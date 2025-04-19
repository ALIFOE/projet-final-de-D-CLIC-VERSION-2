<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('type_onduleurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('marque');
            $table->string('modele');
            $table->float('puissance_nominale')->comment('en W');
            $table->float('tension_entree_min')->comment('en V');
            $table->float('tension_entree_max')->comment('en V');
            $table->float('tension_sortie')->comment('en V');
            $table->float('rendement')->comment('en %');
            $table->float('prix_unitaire')->comment('en euros');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('type_onduleurs');
    }
};
