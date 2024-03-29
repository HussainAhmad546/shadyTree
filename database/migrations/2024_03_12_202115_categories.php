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
    Schema::create('categories', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->unsignedBigInteger('status')->comment('0 = Active, 1 = Inactive')->default(0);
        $table->unsignedBigInteger('is_del')->comment('0 = Not Deleted, 1 = Deleted')->default(0);
        $table->timestamps();
        $table->string('time')->nullable();
        $table->string('choice')->nullable();
        $table->string('addons')->nullable();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
