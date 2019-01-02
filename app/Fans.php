<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Fans extends Model
{
    use SoftDeletes;
 
    protected $fillable = [
        'title', 'content'
    ];
    protected $dates = ['deleted_at'];
}
