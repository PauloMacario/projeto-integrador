<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable =[
        'id_ong', 'name', 'path'
 
     ];
     
     public $timestamps = false;
}
