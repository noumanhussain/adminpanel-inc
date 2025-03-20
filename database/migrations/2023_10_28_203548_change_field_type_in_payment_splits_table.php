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
        Schema::table('payment_splits', function (Blueprint $table) {
            $table->integer('sr_no')->change();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {}
};
