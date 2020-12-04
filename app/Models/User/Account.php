<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = [ 'account' ];

    protected $fillable = [ 'type' ];
}
