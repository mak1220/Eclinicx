<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatient2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient2s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients')->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('Reg')->nullable();
            $table->string('cnic')->nullable();
            $table->string('Reference')->nullable();
            $table->string('Tag')->nullable();
            $table->string('Remark')->nullable();
            $table->string('File')->nullable();
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
        Schema::dropIfExists('patient2s');
    }
}
