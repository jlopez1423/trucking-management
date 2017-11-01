<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

/** User Factory */
$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'phone_number' => $faker->phoneNumber,

        'address_id' => function(){
            return factory( 'App\Address' )->create()->id;
        },

        'remember_token' => str_random(10),
    ];
});

/////** City Factory */
$factory->define( App\City::class, function( Faker $faker ){

    return [

        'name' => str_random(10)

    ];

});

//
///** Address Factory */
$factory->define( App\Address::class, function(Faker $faker ){

    return [

            'street' => $faker->streetAddress,

            'city_id' => function(){

                return factory( 'App\City' )->create()->id;

            },

            'state_id' => function() {

                return factory( 'App\State' )->create()->id;

            },

            'zip_id' => function() {

                return factory( 'App\ZipCode' )->create()->id;

            }

        ];

});
//
///** State Factory */
$factory->define( App\State::class, function( Faker $faker ){

    return [

        'state_code' => $faker->countryCode

    ];

});


/** ZipCode Factory */
$factory->define( App\ZipCode::class, function( Faker $faker ){

    return [

        'zip_code' => $faker->postcode

    ];

});