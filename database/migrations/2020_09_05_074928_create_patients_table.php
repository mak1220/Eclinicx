<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('MRNX')->nullable();
            $table->string('Name')->nullable();
            $table->string('Gender')->nullable();
            $table->string('Age')->nullable();
            $table->string('Address')->nullable();
            $table->string('Phone')->nullable();
            $table->string('Discount')->nullable();
            $table->string('DiscountCash')->nullable();
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
        Schema::dropIfExists('patients');
    }
}
