<?php

namespace Atlas\Http\Controllers;

use Atlas\Traits\DataTablesResponseTrait;

use Atlas\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    use DataTablesResponseTrait;
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

        return $this->data_tables_json_response($request, (new User), $users);

    }

}
