<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->ID();
            $table->foreignId('pur_id')->constrained('purchases')->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('Stock_Item')->nullable();
            $table->string('Batch')->nullable();
            $table->string('Count')->nullable();
            $table->string('Cost')->nullable();
            $table->string('Total')->nullable();
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
        Schema::dropIfExists('items');
    }
}
