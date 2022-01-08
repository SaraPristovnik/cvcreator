<?php

namespace Models;

use \Illuminate\Database\Eloquent\Model;

class CVMEmail extends Model
{
    protected $table = 'cvm_email';
    protected $fillable = [
        'userId',
        'email',
    ];
}
