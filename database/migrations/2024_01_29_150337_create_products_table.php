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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->string('second_name')->nullable(); // New column
            $table->longText('description');
            $table->string('product_note')->nullable(); // New column
            $table->string('price');
            $table->string('quantity')->nullable(); // New column
            $table->unsignedBigInteger('status')->comment('0 = Active, 1 = Inactive')->default(0);
            $table->string('image_1');
            $table->unsignedBigInteger('is_del')->comment('0 = Not deleted, 1 = Deleted')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
