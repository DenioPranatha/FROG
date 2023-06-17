<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_headers', function (Blueprint $table) {
            // $table->id();
            // $table->foreignId('user_id');
            // $table->timestamps();


            // $table->id();
            $table->bigIncrements('id')->unique();
            // $table->primary(['event_id', 'user_id']);
            $table->foreignId('event_id');
            $table->foreignId('user_id');
            $table->timestamps();
        });

        DB::unprepared('ALTER TABLE `cart_headers` DROP PRIMARY KEY, ADD PRIMARY KEY ( `event_id` , `user_id` )');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_headers');
    }
};
