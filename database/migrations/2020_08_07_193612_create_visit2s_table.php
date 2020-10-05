<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisit2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visit2s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('visit3_id')->constrained('visit3s');
            $table->string('Product')->nullable();
            $table->string('Stock_Item')->nullable();
            $table->string('unit')->nullable();
            $table->string('cost')->nullable();
            $table->string('Sub_Total')->nullable();
            $table->string('Discount')->nullable();
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
        Schema::dropIfExists('visit2s');
    }
}
