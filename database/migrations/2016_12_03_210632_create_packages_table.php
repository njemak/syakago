<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('PACKAGE_ID');
            $table->string('TTP_NO');
            $table->string('ITEM');
            $table->string('FORM')->nullable();
            $table->string('TYPE_VEHICLE')->nullable();
            $table->integer('QUANTITY');
            $table->integer('P')->nullable();
            $table->integer('L')->nullable();
            $table->integer('T')->nullable();
            $table->integer('WEIGHT')->nullable();
            $table->string('TYPE');
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
        Schema::drop('packages');
    }
}
