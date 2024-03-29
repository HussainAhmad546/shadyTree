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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('status')->comment('0 = Active, 1 = Inactive')->default(0);
            $table->unsignedBigInteger('is_del')->comment('0 = Not deleted, 1 = Deleted')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert([
            [
                'name' => 'SheddyTree',
                // 'last_name' => 'Copia',
                'email' => 'admin@sheddytree.com',
                'password' => Hash::make('admin786321'),
                'status' => 0,
                'is_del' => 0
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
