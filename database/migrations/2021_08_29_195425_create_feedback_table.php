<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->bigIncrements('FeedbackID');
            $table->unsignedBigInteger('Contract_ID');
            $table->foreign('Contract_ID')->references('ContractID')->on('contracts');
            $table->unsignedBigInteger('Cus_ID');
            $table->foreign('Cus_ID')->references('CusID')->on('customers');
            $table->integer('DriverAttitude');
            $table->integer('Punctuality');
            $table->integer('ReasonalPrice');
            $table->string('Comment',255);
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
        Schema::dropIfExists('feedback');
    }
}
