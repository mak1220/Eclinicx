<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePastMedicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('past_medics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('visit4_id')->constrained('visit4s')->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('PName')->nullable();
            $table->string('Dose')->nullable();
            $table->string('Freq')->nullable();
            $table->string('Dura')->nullable();
            $table->string('Doctor')->nullable();
            $table->string('Date')->nullable();
            $table->string('OrigDate')->nullable();
            $table->string('Attach')->nullable();
            $table->string('Desc')->nullable();
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
        Schema::dropIfExists('past_medics');
    }
}
