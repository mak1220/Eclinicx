<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisit1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visit1s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('visit3_id')->constrained('visit3s');
            $table->string('Reason')->nullable();
            $table->string('Referee')->nullable();
            $table->string('Doctor')->nullable();
            $table->string('Date')->nullable();
            $table->string('Amount')->nullable();
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
        Schema::dropIfExists('visit1s');
    }
}
