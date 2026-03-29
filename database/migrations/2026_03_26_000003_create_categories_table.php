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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->enum('gender_type', ['mixed', 'female_only', 'male_only'])->default('mixed');
            $table->decimal('base_price', 13, 4);
            $table->string('currency')->default('USD');
            $table->boolean('is_ensuite')->default(false); // true if it has a private bathroom
            $table->boolean('has_ac')->default(false); // true if it has air conditioner
            $table->boolean('has_lockers')->default(false); // true if the room provides privates secure storage
            $table->boolean('has_individual_plugs')->default(false); // true if it has individual plugs next to eaach bed
            $table->boolean('has_curtains')->default(false); // true if it has "pod style" privacy
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
