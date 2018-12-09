<?php

namespace Atlas\Models;

use Atlas\Interfaces\DataTablesInterface;
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
     * @return array
     */
    public static function getDataTableColumns():array
    {
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

        return $columns;
    }

    public function getDisplayNameAttribute()
    {
        return $this->attributes['forename']. ' ' . $this->attributes['surname'];
    }
}
