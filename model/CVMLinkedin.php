<?php

namespace Models;

use \Illuminate\Database\Eloquent\Model;

class CVMLinkedin extends Model
{
    protected $table = 'cvm_linkedin';
    protected $fillable = [
        'userId',
        'profile',
    ];
}
