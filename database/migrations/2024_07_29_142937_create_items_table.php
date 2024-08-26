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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('cantidad');
            $table->unsignedDecimal('price', 12, 2);
            $table->unsignedDecimal('amount', 12, 2);
            $table->text('detalle');
            $table->unsignedBigInteger('service_id')->nullable();
            $table->unsignedBigInteger('order_id')->nullable();
            $table->foreign('service_id')->on('services')->references('id');
            $table->foreign('order_id')->on('orders')->references('id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
};
