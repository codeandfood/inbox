<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'property';

    function offers(){
    	return $this->hasMany('App\Offers\OffersModel', 'property_id', 'id');
    }
}
