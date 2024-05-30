<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLigneBonCommandeServiceTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ligne_bon_commande_service', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->unsignedBigInteger('id_bcs');
            $table->unsignedBigInteger('id_commerc'); 
            $table->integer('quantite_demandee');
            $table->integer('quantite_restante')->nullable();
            $table->timestamps();

            $table->foreign('id_bcs')->references('id_bcs')->on('bon_commande_service')->onDelete('cascade');
            $table->foreign('id_commerc')->references('id_commerc')->on('nom_commercial')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ligne_bon_commande_service');
    }
};
