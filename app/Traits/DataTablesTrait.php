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
        $columns = $model::getDataTableColumns();

        $perPage = $request->get('length', 10);

        $currentPage = round($request->get('start', 0) / $request->get('length', 10) + 1);

        Paginator::currentPageResolver(function () use ($currentPage) {
            return $currentPage;
        });

        $paginator = $query->paginate($perPage);

        $data = $this->format_data($columns, $paginator->items());


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