<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
     protected $fillable = [
        'class_id','subject_name','subject_code'
    ];
}
