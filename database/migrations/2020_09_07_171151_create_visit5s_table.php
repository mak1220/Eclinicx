<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisit5sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visit5s', function (Blueprint $table) {
            $table->iD();
            $table->foreignId('visit4_id')->constrained('visit4s')->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('Prod')->nullable();
            $table->string('Stock')->nullable();
            $table->string('unit')->nullable();
            $table->string('cost')->nullable();
            $table->string('Sub')->nullable();
            $table->string('Dcount')->nullable();
            $table->string('total')->nullable();
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
        Schema::dropIfExists('visit5s');
    }
}
