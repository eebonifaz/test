<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voucher_invoce', function (Blueprint $table) {
            $table->id();
            $table->string("referencia_sri", 255);
            $table->string("moneda", 255);


            $table->double("valor");


            $table->unsignedBigInteger('invoce_id');

            $table->foreign('invoce_id')
                ->references('id')
                ->on('invoces')
                ->onDelete('cascade');

            $table->unsignedBigInteger('user_add_id');

            $table->foreign('user_add_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

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
        Schema::dropIfExists('voucher_invoce');
    }
}
