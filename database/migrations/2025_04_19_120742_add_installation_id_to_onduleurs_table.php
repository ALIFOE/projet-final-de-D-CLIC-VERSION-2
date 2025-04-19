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
        Schema::table('onduleurs', function (Blueprint $table) {
            $table->foreignId('installation_id')->nullable()->constrained()->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('onduleurs', function (Blueprint $table) {
            $table->dropForeign(['installation_id']);
            $table->dropColumn('installation_id');
        });
    }
};
