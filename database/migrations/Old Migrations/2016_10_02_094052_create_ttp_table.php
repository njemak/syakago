<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTtpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TTP', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('TTP_NO');
            $table->string('CUSTOMER_ID');
            $table->date('DELIVERY_DATE');
            $table->string('ORIGIN_ADDRESS');
            $table->string('ORIGIN_CODE');
            $table->string('DESTINATION_ADDRESS');
            $table->string('DESTINATION_CODE');
            $table->string('ITEM');
            $table->integer('QUANTITY');
            $table->integer('TOTAL_WEIGHT');
            $table->string('ADMIN_REMARK');
            $table->string('ACCOUNTING_REMARK');
            $table->string('MR');
            $table->string('RECEIVER_NAME');
            $table->date('RECEIVED_DATE');
            $table->bigInteger('PRICE');
            $table->bigInteger('DISCOUNT');
            $table->bigInteger('TAX');
            $table->string('PROOF_OF_DELIVERY');
            $table->bigInteger('TOTAL_AMOUNT');
            $table->string('INVOICE_NO');
            $table->string('CREATED_BY');
            $table->string('LAST_UPDATE_BY');
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
        Schema::drop('TTP');
    }
}
