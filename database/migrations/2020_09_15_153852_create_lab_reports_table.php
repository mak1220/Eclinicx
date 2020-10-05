<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('lab_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('visit4_id')->constrained('visit4s')->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('Type')->nullable();
            $table->string('PName')->nullable();
            $table->string('doctor')->nullable();
            $table->string('Location')->nullable();
            $table->string('date')->nullable();
            $table->string('OrigDate')->nullable();
            $table->string('Attach')->nullable();
            $table->string('desc')->nullable();
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
        Schema::dropIfExists('lab_reports');
    }
}
