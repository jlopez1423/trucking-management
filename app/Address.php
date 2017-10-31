<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    /**
     *Address belongs to a city
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     */
    public function city()
    {

        return $this->belongsTo('App\City' );

    }

    /**
     *  Address has many users
     *
     *
     *
     */
    public function user()
    {

        return $this->hasMany('App\User' );
    }

}
