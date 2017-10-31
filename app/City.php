<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    /**
     * City has many addresses
     *
     *
     */
    public function address()
    {
        $this->hasMany('App\Address');

    }

}
