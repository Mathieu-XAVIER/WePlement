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
            $table->string('prod_nom');
            $table->decimal('prod_prix', 8, 2);
            $table->text('prod_desc')->nullable();
            $table->json( 'prod_images')->nullable();
            $table->foreignId('brand_id')->constrained()->after('prod_images');
            $table->foreignId('category_id')->constrained()->after('brand_id');
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
