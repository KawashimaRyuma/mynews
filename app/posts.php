<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
       protected $guarded = array('id');


    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
    );
}
