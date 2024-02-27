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
        Schema::table('produtos', function (Blueprint $table) {
            $table->unsignedBigInteger("from_padarias");
            $table->foreign("from_padarias")
                ->references("id")
                    ->on("padarias")
                        ->onUpdate("cascade")
                            ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
/*         Schema::table('produtos', function (Blueprint $table) {
            $table->dropColumn("from_padarias");
        }); */
    }
};
