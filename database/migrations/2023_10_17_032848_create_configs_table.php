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
        Schema::create('configs', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('title');
            $table->string('promo');
            $table->string('service');
            $table->string('service_detail');
            $table->string('about');
            $table->string('faq');
            $table->string('contact');
            $table->text('favicon');
            $table->text('keyword');
            $table->text('desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configs');
    }
};
