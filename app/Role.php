<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    /**
     * Role has many users
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user()
    {

        return $this->hasMany( 'App\Users' );

    }
}
