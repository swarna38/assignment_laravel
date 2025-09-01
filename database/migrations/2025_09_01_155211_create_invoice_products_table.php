<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoice_products', function (Blueprint $table) {
            $table->id();
        $table->unsignedBigInteger('invoice_id');
        $table->unsignedBigInteger('product_id');
        $table->unsignedBigInteger('user_id');
        $table->integer('qty');
        $table->decimal('unit_price', 10, 2);
        $table->decimal('sale_price', 10, 2);
        $table->timestamps();

        $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade');
        $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_products');
    }
};
