<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisit4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visit4s', function (Blueprint $table) {
           $table->ID();
            $table->foreignId('pat_id')->constrained('patients')->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('Rson')->nullable();
            $table->string('Ref')->nullable();
            $table->string('Doct')->nullable();
            $table->string('Date')->nullable();
            $table->string('user')->nullable();
            $table->string('Note')->nullable();
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
        Schema::dropIfExists('visit4s');
    }
}
