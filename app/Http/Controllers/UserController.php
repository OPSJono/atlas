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
        // Start a query on the model.
        $users = User::query();

        // If the user has typed in the generic/global search box, grab the value from the input.
        $globalSearch = array_get($request->get('search'), 'value', false);

        if($globalSearch) {
            // If we have a value from the input, search by any of our columns.
            $users = $users->where(function($q) use ($globalSearch) {
                $q->orWhere('forename', 'LIKE', '%'.$globalSearch.'%');
                $q->orWhere('surname', 'LIKE', '%'.$globalSearch.'%');
                $q->orWhere('email', 'LIKE', '%'.$globalSearch.'%');
            });
        }

        // Loop through the 'columns' inputs and see if the user has tried to search using a specific column.
        foreach ($request->get('columns', []) as $column) {
            if($column['searchable'] == "true") {
                // If they have, the value is not empty/null. - Do a search for that column.
                if($column['search']['value'] !== null) {
                    $users = $users->where($column['name'], 'LIKE', '%'.$column['search']['value'].'%');
                }
            }
        }

        // Loop through the 'order' inputs and see if the user has tried to set an order by on a column.
        foreach ($request->get('order', []) as $order) {
            $input = $request->all();

            if(isset($input['columns'][$order['column']])) {

                // If the user has defined which column to order by, define that column using the 'columns' input key.
                $column = $input['columns'][$order['column']];

                // But only do the order by if we think that column is orderable.
                if($column['orderable'] == "true") {
                    // And also only order by the column, if the column name is specified.
                    if(isset($column['name']) && !empty($column['name'])) {
                        // Finally we can order the column name by the direction given from the input.
                        $users->orderBy($column['name'], $order['dir']);
                    }
                }
            }
        }

        // Return the formatted data for datatables to handle.
        return $this->data_tables_json_response($request, (new User), $users);

    }

}
