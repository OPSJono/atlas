<?php

namespace Atlas\Models;

use Atlas\Interfaces\DataTablesInterface;
use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use \Spatie\Permission\Traits\HasRoles;
use \Atlas\Traits\LockableTrait;


class User extends Authenticatable implements DataTablesInterface
{
    use Notifiable;
    use HasRoles;
    use LockableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'forename',
        'surname',
        'email',
        'lockout_time',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * A method to get the data-attributes required to put on a <table> for Datatables to function.
     *
     * @return string
     */
    public static function getDataTableAttributes():string
    {
        // Start with the URL that Datatables calls to get the data.
        $string = 'data-url="'. route('user.list') .'"';

        // Set the server-side flags.
        $string .= 'data-responsive="true" data-processing="true" data-server-side="true" data-method="GET"';
        return $string;
    }
    /**
     * A method to return the Columns used for Datatables.
     * 'title' Is the text displayed in the column header.
     * 'orderable' defines if we can order by this column. "true"/"false" must be a string.
     * 'searchable' defines if we can search by this column. "true"/"false" must be a string.
     * 'db' is the column name in the database.
     * 'dt' is the sequence of the column in the HTML
     * 'formatter' is a function which gets called, where the first argument is the value from the database,
     * and the second argument is the entire row from the DB.
     *
     * The keys in the $columns array are unused. Just there to make the array more readable.
     *
     * @return array
     */
    public static function getDataTableColumns():array
    {
        $columns = [
            'forename' => [
                'title' => 'Forename',
                'orderable' => "true",
                'searchable' => "true",
                'db' => 'forename',
                'dt' => 0
            ],

            'surname' => [
                'title' => 'Surname',
                'orderable' => "true",
                'searchable' => "true",
                'db' => 'surname',
                'dt' => 1
            ],

            'email' => [
                'title' => 'Email',
                'orderable' => "true",
                'searchable' => "true",
                'db' => 'email',
                'dt' => 2
            ],

            'created_at' => [
                'title' => 'Created At',
                'orderable' => "true",
                'searchable' => "false",
                'db' => 'created_at',
                'dt' => 3,
                'formatter' => function(Carbon $d, $row) {
                    $data = '
                        <span class="bootstrap-tooltip" data-container="body" data-toggle="tooltip" data-title="'. (string) $d .'">'.$d->diffForHumans().'</span>
                    ';

                    return $data;
                }
            ],

            'actions' => [
                'title' => 'Actions',
                'orderable' => "false",
                'searchable' => "false",
                'db'        => 'id',
                'dt'        => 4,
                'formatter' => function( $d, $row ) {

                    $data = '
                        <a href="'.route('user.update', $d).'">
                            <i class="fa fa-fw fa-pencil text-primary actions_icon js-simple-modal" title="Edit User"></i>
                        </a>
                        <a href="'.route('user.delete', $d).'" data-toggle="modal" data-target="#deleteUser">
                            <i class="fa fa-fw fa-times text-danger actions_icon" title="Delete User"></i>
                        </a>
                        <a href="'.route('user.view', $d).' ">
                            <i class="fa fa-fw fa-star text-success actions_icon" title="View User"></i>
                        </a>
                    ';

                    return $data;
                }
            ],
        ];

        return $columns;
    }

    public function getDisplayNameAttribute()
    {
        return $this->attributes['forename']. ' ' . $this->attributes['surname'];
    }
}
