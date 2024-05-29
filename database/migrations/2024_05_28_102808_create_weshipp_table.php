<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('weshipp', function (Blueprint $table) {
            $table->id();
            $table->string('we_name');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('subscription_type');
            $table->json('product_ids')->nullable();
            $table->integer('recurrence_frequency')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weshipp');
    }
};
