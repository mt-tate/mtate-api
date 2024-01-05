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
        Schema::create('weight_histories', function (Blueprint $table) {
            $table->id();
            $table->date('day');
            $table->integer('weight')->default(0);
            $table->integer('calorie_intake')->default(0);
            $table->integer('calorie_burned')->default(0);
            $table->text('memo');
            $table->string('updated_by',30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weight_histories');
    }
};
