<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('f_name');
            $table->string('l_name');
            $table->string('email')->unique();
            $table->foreignId('order_id')->nullable();
            $table->string('phone');
            $table->string('avatar')->nullable();
            $table->string('password');
            $table->string('usertype')->default('user');
            $table->timestamp('email_verivied_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                'f_name' => 'admin',
                'l_name' => 'only',
                'phone' => '081234567890',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'usertype' => 'admin'
            )
        );

        DB::table('users')->insert(
            array(
                'f_name' => 'kasir',
                'l_name' => '1',
                'phone' => '081234567890',
                'email' => 'kasir@gmail.com',
                'password' => Hash::make('kasir123'),
                'usertype' => 'cashier'
            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
