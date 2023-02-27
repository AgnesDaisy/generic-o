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
        Schema::create('visitors', function (Blueprint $table) {

            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->enum('title', ['Bro', 'Sis']);
            $table->string('name'); //name
            $table->string('mobile'); //mobile
            $table->string('address1'); //address1
            $table->string('address2'); //address2
            $table->string('country'); //country
            $table->string('state'); //state
            $table->string('district'); //district
            $table->string('city'); //city
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
        Schema::dropIfExists('visitors');
    }
};
