<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActionEvent extends Model
{
    protected $table = 'actions_events';
    protected $fillable = [
    'id_ong', 'title', 'description', 'address', 'district', 'city', 
       'date', 'image'
    ];

    public $timestamps = false;
}
