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
        Schema::table('cidades', function (Blueprint $table) {
            $table->unsignedBigInteger("from_usuarios");
            $table->foreign("from_usuarios")
                ->references("id")
                    ->on("usuarios")
                        ->onUpdate("cascade")
                            ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cidades', function (Blueprint $table) {
            $table->dropColumn("from_usuarios");
        });
    }
};
