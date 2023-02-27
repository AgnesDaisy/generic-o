<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name');                     //name
            $table->string('email')->unique();          //email
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');                 // password
            $table->rememberToken();
            $table->enum('role', ['admin', 'user']);    //role
            $table->string('mobile'); //mobile
            $table->enum('status', ['y', 'n']);         //status
            $table->enum('sms_status', ['y', 'n']);     //sms status
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
};
