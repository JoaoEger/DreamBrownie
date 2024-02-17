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
        Schema::table('cidade', function (Blueprint $table) {
            $table->unsignedBigInteger("from_usuario");
            $table->foreign("from_usuario")
                ->references("id")
                    ->on("usuario")
                        ->onUpdate("cascade")
                            ->onDelete("restrict");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cidade', function (Blueprint $table) {
            //
        });
    }
};
