<?php

namespace Models;

use \Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'language';
    protected $fillable = [
        'name',
        'is_default',
        'is_for_ui',
    ];
}
