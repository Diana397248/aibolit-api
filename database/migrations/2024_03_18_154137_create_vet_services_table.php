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
        Schema::create('vet_services', function (Blueprint $table) {
            $table->id();
            $table->integer('price');
            $table->timestamps();

            $table->unsignedBigInteger('vet_id')->index();
            $table->foreign('vet_id')->references('id')->on('users');

            $table->unsignedBigInteger('service_id')->index();
            $table->foreign('service_id')->references('id')->on('service_lists');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vet_services');
    }
};
