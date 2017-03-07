<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdditionalColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ttps', function($table) {
            $table->integer('GROSS_SALES');
            $table->integer('SUBTOTAL');
            $table->integer('DISCOUNTVAL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
            $table->dropColumn('GROSS_SALES');
            $table->dropColumn('SUBTOTAL');
            $table->dropColumn('DISCOUNTVAL');
        });
    }
}
