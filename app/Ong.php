<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ong extends Model
{       
    
    protected $fillable =[
       'name', 'segment', 'description', 'address', 'district', 'city', 
       'phone1', 'phone2', 'email', 'website1', 'website2', 
       'website3', 'website4', 'image'

    ];
    
    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany('App\User', 'ong_has_user', 'id_user', 'id_ong');
    }
}
