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
        Schema::table('products', function (Blueprint $table) {
            $table->text('description')->nullable();
            $table->string('details')->after('description')->nullable();
            $table->string('category')->after('details')->nullable();
            $table->string('image')->after('category')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->dropColumn('details');
            $table->dropColumn('category');
            $table->dropColumn('image');
        });
    }
};
