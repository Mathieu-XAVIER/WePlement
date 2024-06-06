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
        $table->boolean('is_active')->default(true);
        $table->date('start_date');
        $table->date('end_date');
        $table->string('subscription_type');
        $table->json('product_ids')->nullable();
        $table->integer('recurrence_frequency')->nullable();
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('address_id')->nullable();
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('address_id')->references('id')->on('delivery_adress')->onDelete('cascade');
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
