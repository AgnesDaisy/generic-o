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
        Schema::create('pastor_camps', function (Blueprint $table) {

            $table->id();
            $table->foreignId('event_id')->constrained();
            $table->foreignId('visitor_id')->constrained();
            $table->string('amount');
            $table->string('discount');
            $table->string('payment_type');
            $table->string('payment_details');
            $table->string('male_count');
            $table->string('female_count');
            $table->string('child_count');
            $table->string('created_by');
            $table->string('updated_by');
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
        Schema::dropIfExists('pastor_camps');
    }
};
