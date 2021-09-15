<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management_staffs', function (Blueprint $table) {
            $table->bigIncrements('StaffID');
            $table->string('StaffName',50);
            $table->string('StaffPass',20);
            $table->date('StaffDOB');
            $table->string('StaffPhone',20);            
            $table->string('StaffAdd',255);
            $table->string('StaffMail',50);          
            $table->string('StaffPic',255);
            $table->integer('StaffSalary');
            $table->boolean('CurrentStaff')->nullable();
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
        Schema::dropIfExists('management_staffs');
    }
}
