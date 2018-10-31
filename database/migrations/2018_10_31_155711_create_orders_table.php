<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
			$table->string("name");
            $table->text("body");
			$table->string("fio");
            $table->string("email")->nullable();
			$table->string("phone");
            $table->string("adress");
            $table->string("type");
			$table->string("pay");		
			$table->text("comment")->nullable();
			$table->integer("user_id");
			$table->string("status");
			
			
			
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
        Schema::dropIfExists('orders');
    }
}
