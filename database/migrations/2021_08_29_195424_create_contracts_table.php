<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->bigIncrements('ContractID');
            $table->string('ContractNo',30);
            $table->date('ContractDate');
            $table->unsignedBigInteger('CusID');
            $table->foreign('CusID')->references('id')->on('users');
            $table->string('StaffID',10)->nullable();
            $table->boolean('ContractStatus')->nullable();
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
        Schema::dropIfExists('contracts');
    }
}
