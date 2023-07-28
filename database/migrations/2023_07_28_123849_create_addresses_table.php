<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->string('postalcode', 8);
            $table->string('streetname', 50);
            $table->string('complement', 40)->nullable();
            $table->string('neighborhood', 30)->nullable();
            $table->string('city', 30);
            $table->string('state', 2);
            $table->string('ibgecode', 7);
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
        Schema::dropIfExists('address');
    }
}
