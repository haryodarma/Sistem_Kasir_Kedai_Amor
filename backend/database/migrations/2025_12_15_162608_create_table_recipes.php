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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id("recipe_id");
            $table->integer("recipe_qty");
            $table->enum("recipe_unit", ["KG", "GRAM", "LITER", "ML"]);
            $table->unsignedBigInteger("product_id");
            $table->unsignedBigInteger("raw_id");
            $table->timestamps();

            // $table->primary("recipe_id");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
