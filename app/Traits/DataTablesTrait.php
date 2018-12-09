<?php

namespace Atlas\Traits;

use Atlas\Interfaces\DataTablesInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

trait DataTablesResponseTrait
{
    /**
     * @param Request $request
     * @param DataTablesInterface $model
     * @param Collection $collection
     * @return array
     */
    public function data_tables_json_response(Request $request, DataTablesInterface $model, Collection $collection)
    {
        $columns = $model::getDataTableColumns();
        $data = $this->format_data($columns, $collection->toArray());

        $json_data = array(
            "draw"            => intval( $request->get('draw', null) ),
            "recordsTotal"    => intval( $model::count() ),
            "recordsFiltered" => intval( $collection->count() ),
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