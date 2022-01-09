<?php

namespace Models;

use \Illuminate\Database\Eloquent\Model;

class CVModule extends Model
{
    protected $table = 'cv_module';
    protected $fillable = [
        'userId',
        'title',
        'cvmEducationIds',
        'cvmEmailIds',
        'cvmLanguageIds',
        'cvmLinkedinIds',
        'cvmPhoneIds',
    ];
}
