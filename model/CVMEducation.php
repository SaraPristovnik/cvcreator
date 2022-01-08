<?php

namespace Models;

use \Illuminate\Database\Eloquent\Model;

class CVMEducation extends Model
{
    protected $table = 'cvm_education';
    protected $fillable = [
        'userId',
        'gainedTitle',
        'establishmentTitle',
        'establishmentAddress',
        'establishmentUrl',
        'startedAt',
        'finishedAt',
    ];
}
