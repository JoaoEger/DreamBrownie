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
        Schema::table('pedidos', function (Blueprint $table) {
            $table->unsignedBigInteger("nome_usuario")->after("id");
            $table->foreign("nome_usuario")
                ->references("id")
                    ->on("usuarios")
                        ->onUpdate("cascade")
                            ->onDelete("cascade");
        });
        Schema::table('pedidos', function (Blueprint $table) {
            $table->unsignedBigInteger("numero_usuario")->after("nome_usuario");
            $table->foreign("numero_usuario")
                ->references("id")
                    ->on("usuarios")
                        ->onUpdate("cascade")
                            ->onDelete("cascade");
        });

        Schema::table('pedidos', function (Blueprint $table) {
            $table->unsignedBigInteger("email_usuario")->after("numero_usuario");
            $table->foreign("email_usuario")
                ->references("id")
                    ->on("usuarios")
                        ->onUpdate("cascade")
                            ->onDelete("cascade");
        });

        Schema::table('pedidos', function (Blueprint $table) {
            $table->unsignedBigInteger("brownie_usuario")->after("email_usuario");
            $table->foreign("brownie_usuario")
                ->references("id")
                    ->on("produtos")
                        ->onUpdate("cascade")
                            ->onDelete("cascade");
        });

        Schema::table('pedidos', function (Blueprint $table) {
            $table->unsignedBigInteger("qnt_usuario")->after("brownie_usuario");
            $table->foreign("qnt_usuario")
                ->references("id")
                    ->on("produtos")
                        ->onUpdate("cascade")
                            ->onDelete("cascade");
        });

        Schema::table('pedidos', function (Blueprint $table) {
            $table->unsignedBigInteger("valor_usuario")->after("qnt_usuario");
            $table->foreign("valor_usuario")
                ->references("id")
                    ->on("produtos")
                        ->onUpdate("cascade")
                            ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pedidos', function (Blueprint $table) {
            //
        });
    }
};
