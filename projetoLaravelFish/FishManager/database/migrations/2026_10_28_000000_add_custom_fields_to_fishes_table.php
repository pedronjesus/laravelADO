<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('fishes', function (Blueprint $table) {
            $table->decimal('weight', 8, 2)->nullable()->after('name');
            $table->string('tank_code')->nullable()->after('weight');
            $table->string('status')->default('ativo')->after('tank_code');
        });
    }

    public function down(): void
    {
        Schema::table('fishes', function (Blueprint $table) {
            $table->dropColumn(['weight', 'tank_code', 'status']);
        });
    }
};