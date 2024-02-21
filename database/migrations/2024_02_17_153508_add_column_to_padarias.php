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
        Schema::table('padarias', function (Blueprint $table) {
            $table->text('imagem')->after('telefone');
            $table->text('descricao')->after('nome');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('padarias', function (Blueprint $table) {
            $table->dropColumn('imagem');
            $table->dropColumn('descricao');
        });
    }
};
