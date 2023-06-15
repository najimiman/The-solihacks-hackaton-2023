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
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->dateTime("Date_facture");
            $table->bigInteger("Client_id")->unsigned()->nullable();
            $table->foreign("Client_id")
            ->references("id")
            ->on('clients')
            ->onDelete('cascade');
            $table->bigInteger("services_id")->unsigned()->nullable();
            $table->foreign("services_id")
            ->references("id")
            ->on('services')
            ->onDelete('cascade');
            $table->bigInteger("mode_payment_id")->unsigned()->nullable();
            $table->foreign("mode_payment_id")
            ->references("id")
            ->on('mode_payments')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factures');
    }
};
