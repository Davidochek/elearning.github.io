<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
     protected $fillable = [
        'assignment','notesdescription','notes','description',
    ];
}
