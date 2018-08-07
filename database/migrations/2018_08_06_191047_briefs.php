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
            $table->string('name', 100);
            $table->string('organization', 255);
            $table->string('services');
            $table->string('purposes', 5000);
            $table->string('description', 5000);
            $table->string('files', 255);
            $table->string('website', 255);
            $table->string('deadline', 1000);
            $table->string('email', 320);
            $table->string('phone', 20);
            $table->string('references', 1000);
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
