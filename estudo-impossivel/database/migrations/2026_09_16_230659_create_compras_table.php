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
        Schema::create('compras', function (Blueprint $table) {
            $table->id();

            $table->dateTime('data_compra')->useCurrent();

            $table->decimal('valor_compra', 10, 2);

            $table->foreignId('id_usuario')
                ->constrained('usuarios');

            $table->string('status', 25)
                ->default('pendente');

            $table->string('formapagto', 25);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};