<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menages', function (Blueprint $table) {
            $table->id();
            $table->string('nomComplet'); // nouveau
            $table->string('telephone'); // nouveau
            $table->string('email'); // nouveau
            $table->string('quartier'); // nouveau
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
        Schema::dropIfExists('menages');
    }
}
