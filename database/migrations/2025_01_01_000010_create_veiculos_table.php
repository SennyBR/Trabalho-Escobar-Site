<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('nome_veiculo');
            $table->string('marca');
            $table->string('modelo');
            $table->string('cor');
            $table->year('ano');
            $table->unsignedBigInteger('quilometragem');
            $table->decimal('valor', 12, 2);
            $table->text('descricao')->nullable();
            $table->string('foto1');
            $table->string('foto2')->nullable();
            $table->string('foto3')->nullable();
            $table->string('contato')->nullable();
            $table->string('proprietario')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('veiculos');
    }
};
