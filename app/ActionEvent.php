<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActionEvent extends Model
{
    protected $table = 'actions_events';
    protected $fillable = [
    'title', 'description', 'address', 'district', 'city', 'uf',
       'date', 'image'
    ];

    public $timestamps = false;
}
