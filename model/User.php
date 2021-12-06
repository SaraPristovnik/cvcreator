<?php

namespace Models;

use \Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $fillable = [
        'email',
        'password',
        'birthday',
        'gender',
        'nationality',
        'addressStreet',
        'addressAdditional',
        'addressPostalCode',
        'addressCity',
    ];
}
