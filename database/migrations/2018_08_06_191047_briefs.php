<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Briefs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('briefs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('from', 255);
            $table->string('services');
            $table->text('purposes');
            $table->string('files_description')->nullable();
            $table->string('website')->nullable();
            $table->string('deadline')->nullable();
            $table->string('email', 255);
            $table->string('phone', 20)->nullable();
            $table->string('references')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('briefs');
    }
}
