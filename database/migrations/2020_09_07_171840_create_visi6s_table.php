<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisi6sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visi6s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('visit4_id')->constrained('visit4s')->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('Sub')->nullable();
            $table->string('Discount')->nullable();
            $table->string('Grand')->nullable();
            $table->string('Advance')->nullable();
            $table->string('Due')->nullable();
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
        Schema::dropIfExists('visi6s');
    }
}
