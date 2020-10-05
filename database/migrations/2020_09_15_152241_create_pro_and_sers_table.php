<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProAndSersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_and_sers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('visit4_id')->constrained('visit4s')->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('Sergery_Name')->nullable();
            $table->string('Sergery_Doctor')->nullable();
            $table->string('Sergery_Hospital')->nullable();
            $table->string('Sergery_Date')->nullable();
            $table->string('Origin_Date')->nullable();
            $table->string('Sergery_Attachment')->nullable();
            $table->string('Sergery_Description')->nullable();
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
        Schema::dropIfExists('pro_and_sers');
    }
}
