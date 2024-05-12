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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->dateTime('app_date');
            $table->text('reason');
            $table->enum('status',
                [
                    'approved',
                    'expectation',
                    'awaiting_payment',
                    'completed',
                    'denied'
                ]);
            $table->timestamps();

            $table->unsignedBigInteger('client_id')->index();
            $table->foreign('client_id')->references('id')->on('users');

            $table->unsignedBigInteger('pet_id')->index();
            $table->foreign('pet_id')->references('id')->on('pets');

            $table->unsignedBigInteger('vet_id')->index();
            $table->foreign('vet_id')->references('id')->on('vets');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
