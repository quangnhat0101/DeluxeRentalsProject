<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_details', function (Blueprint $table) {
            $table->bigIncrements('ContractDetailID');
            $table->unsignedBigInteger('ContractID');
            $table->foreign('ContractID')->references('ContractID')->on('contracts');
            $table->unsignedBigInteger('DriverID')->nullable();
            $table->foreign('DriverID')->references('DriverID')->on('drivers');
            $table->unsignedBigInteger('CarID');
            $table->foreign('CarID')->references('CarID')->on('cars');
            $table->date('Departure');
            $table->date('Arrival');
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
        Schema::dropIfExists('contract_details');
    }
}
