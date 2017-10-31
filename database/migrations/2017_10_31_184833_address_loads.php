<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddressLoads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'address_loads', function ( Blueprint $table ) {

            $table->increments( 'id' );

            $table->unsignedInteger( 'address_id' );

            $table->unsignedInteger( 'load_id' );

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( 'address_loads' );
    }
}
