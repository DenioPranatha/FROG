<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('event_qty_view', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::statement('
            CREATE VIEW event_qty AS
            SELECT  `events`.id, SUM(payment_details.qty) AS qty
            FROM payment_details JOIN products ON products.id = payment_details.product_id
            JOIN `events` ON products.event_id = `events`.`id`
            GROUP BY `events`.`id`
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('event_qty_view');
    }

};
