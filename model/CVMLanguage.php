<?php

namespace Models;

use \Illuminate\Database\Eloquent\Model;

class CVMLanguage extends Model
{
    protected $table = 'cvm_language';
    protected $fillable = [
        'userId',
        'languageId',
        'speakingRating',
        'writingRating',
        'listeningRating',
        'speakingRating',
    ];
}
