<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'address_table', function ( Blueprint $table ){

            $table->increments('id');

            $table->string( 'street' );

            $table->unsignedInteger( 'city_id' );

            $table->unsignedInteger( 'state_id' );

            $table->unsignedInteger( 'zip_id' );

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists( 'address_table' );
    }
}
