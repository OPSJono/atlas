<?php

namespace Atlas\Http\Controllers;

use Atlas\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the Index page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index');
    }

    public function list(Request $request)
    {
        $users = User::query();

        $globalSearch = array_get($request->get('search'), 'value', false);

        if($globalSearch) {
            $users = $users->where(function($q) use ($globalSearch) {
                $q->orWhere('forename', 'LIKE', '%'.$globalSearch.'%');
                $q->orWhere('surname', 'LIKE', '%'.$globalSearch.'%');
                $q->orWhere('email', 'LIKE', '%'.$globalSearch.'%');
            });
        }

        foreach ($request->get('columns', []) as $column) {
            if($column['searchable'] == "true") {
                if($column['search']['value'] !== null) {
                    $users = $users->where($column['name'], 'LIKE', '%'.$column['search']['value'].'%');
                }
            }
        }

        $users = $users->get();

        $columns = array(
            array( 'db' => 'forename', 'dt' => 0 ),
            array( 'db' => 'surname',  'dt' => 1 ),
            array( 'db' => 'email',   'dt' => 2 ),
            array( 'db' => 'created_at',     'dt' => 3 ),
            array(
                'db'        => 'id',
                'dt'        => 4,
                'formatter' => function( $d, $row ) {

                    $data = '
                        <a href="'.route('user.update', $d).'">
                            <i class="fa fa-fw fa-pencil text-primary actions_icon" title="Edit User"></i>
                        </a>
                        <a href="'.route('user.delete', $d).'" data-toggle="modal" data-target="#delete">
                            <i class="fa fa-fw fa-times text-danger actions_icon" title="Delete User"></i>
                        </a>
                        <a href="'.route('user.view', $d).' ">
                            <i class="fa fa-fw fa-star text-success actions_icon" title="View User"></i>
                        </a>
                    ';

                    return $data;
                }
            ),
        );

        $users_data = $this->data_output($columns, $users->toArray());

        $json_data = array(
            "draw"            => intval( $request->get('draw', null) ),
            "recordsTotal"    => intval( User::count() ),
            "recordsFiltered" => intval( $users->count() ),
            "data"            => $users_data
        );
        return response()->json($json_data);
    }

    private function data_output ( $columns, $data )
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
