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
        $out = array();
        for ( $i=0, $ien=count($data) ; $i<$ien ; $i++ ) {
            $row = array();
            for ( $j=0, $jen=count($columns) ; $j<$jen ; $j++ ) {
                $column = $columns[$j];
                // Is there a formatter?
                if ( isset( $column['formatter'] ) ) {
                    $row[ $column['dt'] ] = $column['formatter']( $data[$i][ $column['db'] ], $data[$i] );
                }
                else {
                    $row[ $column['dt'] ] = $data[$i][ $columns[$j]['db'] ];
                }
            }
            $out[] = $row;
        }
        return $out;
    }
}