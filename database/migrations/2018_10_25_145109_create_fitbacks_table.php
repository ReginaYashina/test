<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFitbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fitbacks', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id');
			$table->text('body');
			$table->enum('showhide', ['show', 'hide'])->default('show');
			$table->string('url')->nullable();
			
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
        Schema::dropIfExists('fitbacks');
    }
}
