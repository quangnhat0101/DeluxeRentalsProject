<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->bigIncrements('DriverID');
            $table->string('DriverName',50);
            $table->string('DriverLicense',20);
            $table->date('DriverDOB');
            $table->string('DriverPic',255);
            $table->string('DriverAdd',255);
            $table->string('DriverMail',50);
            $table->integer('DriverPhone');
            $table->boolean('DriverStatus');
            $table->boolean('CurrentDriver')->nullable();
            $table->boolean('DriverStatus')->nullable();
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
        Schema::dropIfExists('drivers');
    }
}
