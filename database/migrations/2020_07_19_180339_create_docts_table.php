<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docts', function (Blueprint $table) {
            $table->id();
            $table->string('Status');
            $table->string('Doctor_Name');
            $table->string('Phone_Number');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Doctor_Licence');
            $table->string('Doctor_Department');
            $table->rememberToken();
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
        Schema::dropIfExists('docts');
    }
}
