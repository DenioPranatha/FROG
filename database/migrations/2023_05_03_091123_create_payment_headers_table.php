<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_headers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('name', 55);
            $table->string('phone', 20);
            $table->string('address', 155);
            $table->date('date');
            $table->integer('total_price');
            $table->integer('total_modal');
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
        Schema::dropIfExists('payment_headers');
    }
};
