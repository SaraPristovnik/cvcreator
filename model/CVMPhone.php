<?php

namespace Models;

use \Illuminate\Database\Eloquent\Model;

class CVMPhone extends Model
{
    protected $table = 'cvm_phone';
    protected $fillable = [
        'userId',
        'phone',
    ];
}
