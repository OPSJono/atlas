<?php

namespace Atlas\Traits;

use Atlas\Interfaces\DataTablesInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

trait DataTablesResponseTrait
{
    /**
     * @param Request $request
     * @param DataTablesInterface $model
     * @param Builder $query
     * @return \Illuminate\Http\JsonResponse
     */
    public function data_tables_json_response(Request $request, DataTablesInterface $model, Builder $query)
    {
        // Grab the array of columns from the model we've been passed.
        $columns = $model::getDataTableColumns();

        // Grab the amount of records we should retrieve per page from the input. Default 10
        $perPage = $request->get('length', 10);

        // Work out what the current page is based on the records datatables has already.
        $currentPage = round($request->get('start', 0) / $request->get('length', 10) + 1);

        // Set the current page in the Paginator
        Paginator::currentPageResolver(function () use ($currentPage) {
            return $currentPage;
        });

        // Retrieve the records using the paginator
        $paginator = $query->paginate($perPage);

        // Format the paginated results ready for Datatables
        $data = $this->format_data($columns, $paginator->items());

        // Define and return the final response array for Datatables.
        $json_data = array(
            "draw"            => intval( $request->get('draw', null) ),
            "recordsTotal"    => intval( $paginator->total() ),
            "recordsFiltered" => intval( $paginator->total() ),
            "data"            => $data
        );

        return response()->json($json_data);
    }

    public function format_data ( $columns, $data )
    {
        // Start with an empty array.
        $out = [];

        // Loop through all the data
        foreach($data as $i => $value) {

            // Start each row as an empty array
            $row = [];

            // Loop through all the columns
            foreach($columns as $j => $column) {

                // Is there a formatter?
                // If a formatter was defined in the `getDataTableColumns` method then we call that function.
                // Passing in the 'db' (column name) and the 'value' from the database as the arguments
                if ( isset( $column['formatter'] ) ) {
                    $row[ $column['dt'] ] = $column['formatter']( $data[$i][ $column['db'] ], $data[$i] );
                } else {
                    // If there isn't a formatter, we just assign the value directly.
                    $row[ $column['dt'] ] = $data[$i][ $columns[$j]['db'] ];
                }
            }
            // Now we're built the row, we append it to the final output array.
            $out[] = $row;
        }

        // Return the build-up data array.
        return $out;
    }
}