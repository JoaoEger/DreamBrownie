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
            $table->unsignedBigInteger("from_cidades");
            $table->foreign("from_cidades")
                ->references("id")
                    ->on("cidades")
                        ->onUpdate("cascade")
                            ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('padarias', function (Blueprint $table) {
            $table->dropColumn("from_cidades");
        });
    }
};
