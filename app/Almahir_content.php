<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Almahir_content extends Model
{
    protected $table = 'almahir_contents';

    protected $fillable =[
        'key','content'
    ];
}
