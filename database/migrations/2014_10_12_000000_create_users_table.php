<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();  
            $table->string('password');          
            $table->string('first_name');
            $table->string('last_name');
            $table->date('dob')->nullable();
            $table->boolean('status')->default(false);
            $table->enum('account_status', ['block', 'active', 'suspend'])->default('active');
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('phone')->nullable();
            $table->string('biography')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
