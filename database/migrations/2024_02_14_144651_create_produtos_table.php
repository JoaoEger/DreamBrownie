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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->tinyText("preview");
            $table->text("descricao");
            $table->string("quantidade");
            $table->string("image")->nullable();
            $table->string("valor");
            $table->boolean("estoque");
            $table->timestamp("date")->useCurrentOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
/*         Schema::dropIfExists('produtos'); */
    }
};
