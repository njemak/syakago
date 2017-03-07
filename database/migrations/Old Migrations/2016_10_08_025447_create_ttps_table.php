<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTtpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ttps', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('TTP_NO');
            $table->primary('TTP_NO');
            $table->string('CUSTOMER_ID');
            $table->string('PROJECT_ID');
            $table->string('MR_NO')->nullable();
            $table->date('DELIVERY_DATE');
            $table->string('ORIGIN_ADDRESS');
            $table->string('ORIGIN_CODE');
            $table->string('DESTINATION_ADDRESS');
            $table->string('DESTINATION_CODE');
            $table->string('DELIVERY_BY');
            $table->string('DELIVERY_FORM');
            $table->string('DELIVERY_DETAIL');
            $table->integer('TOTAL_WEIGHT');
            $table->string('ADMIN_REMARK')->nullable();
            $table->string('ACCOUNTING_REMARK')->nullable();
            $table->string('DELIVERY_STATUS')->nullable();
            $table->string('RECEIVER_NAME')->nullable();
            $table->date('RECEIVED_DATE')->nullable();
            $table->bigInteger('RATE')->nullable();
            $table->bigInteger('DISCOUNT')->nullable();
            $table->bigInteger('TAX')->nullable();
            $table->string('PROOF_OF_DELIVERY')->nullable();
            $table->bigInteger('TOTAL_AMOUNT')->nullable();
            $table->string('INVOICE_NO')->nullable();
            $table->string('PICKED_UP_BY')->nullable();
            $table->integer('EXTRA_WEIGHT')->nullable();
            $table->string('CREATED_BY')->nullable();
            $table->string('INSURANCE')->nullable();
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
        Schema::drop('ttps');
    }
}
