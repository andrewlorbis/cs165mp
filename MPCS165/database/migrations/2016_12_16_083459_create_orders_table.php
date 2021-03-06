<?php

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
        //
        Schema::create('orders', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('user_id');
            $table->timestamp('timestamp');
            $table->integer('quantity');
            $table->string('status');
          });
      }

      /**
       * Reverse the migrations.
       *
       * @return void
       */
      public function down()
      {
          Schema::drop('orders');
      }
}
