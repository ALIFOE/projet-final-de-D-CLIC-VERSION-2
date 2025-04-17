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
    public function up()
    {
        Schema::create('installations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('utilisateur_id')->constrained('users')->onDelete('cascade');
            $table->string('nom');
            $table->date('date_installation');
            $table->decimal('puissance_totale', 10, 2)->comment('en kWc');
            $table->decimal('surface_totale', 10, 2)->nullable()->comment('en m²');
            $table->integer('nombre_panneaux');
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->string('orientation')->nullable();
            $table->decimal('inclinaison', 5, 2)->nullable()->comment('en degrés');
            $table->text('description')->nullable();
            $table->enum('statut', ['active', 'en maintenance', 'inactive'])->default('active');
            $table->decimal('cout_installation', 10, 2)->nullable()->comment('en euros');
            $table->date('date_mise_service')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('installations');
    }
};
