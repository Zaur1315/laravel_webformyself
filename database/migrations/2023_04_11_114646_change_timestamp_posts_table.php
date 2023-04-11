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
        Schema::table('posts', function (Blueprint $table) {
            \Illuminate\Support\Facades\DB::statement("ALTER TABLE `posts` CHANGE `created_at` `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP, CHANGE `updated_at` `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            \Illuminate\Support\Facades\DB::statement("ALTER TABLE `posts` CHANGE `created_at` `created_at` TIMESTAMP NULL DEFAULT NULL, CHANGE `updated_at` `updated_at` TIMESTAMP NULL DEFAULT NULL");
        });
    }
};
