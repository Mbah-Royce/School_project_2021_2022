<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('class_room_id');
            $table->unsignedBigInteger('field_id');
            $table->unsignedBigInteger('gaurdian_id')->nullable();
            $table->unsignedBigInteger('academic_session_id');
            $table->foreign('academic_session_id')->references('id')->on('academic_sessions');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('class_room_id')->references('id')->on('class_rooms');
            $table->foreign('field_id')->references('id')->on('fields');
            $table->foreign('gaurdian_id')->references('id')->on('gaurdians');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('permanent_address')->nullable();
            $table->string('current_address')->nullable();
            $table->text('profile')->nullable();




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
        Schema::dropIfExists('students');
    }
}
