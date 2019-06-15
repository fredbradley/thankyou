<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThankyousTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thankyous', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('for');
            $table->string("custom_from")->nullable();
            $table->string('custom_to')->nullable();
            $table->tinyInteger('created_by');
            $table->tinyInteger('updated_by');
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
        Schema::dropIfExists('thankyous');
    }
}
