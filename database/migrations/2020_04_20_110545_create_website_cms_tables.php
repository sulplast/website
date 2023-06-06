<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteCmsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paginas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->unsignedBigInteger('pagina_id')->nullable();
            $table->string('slug');
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->longText('meta_misc')->nullable();
            $table->string('locale')->default('pt_BR');
            $table->timestamps();
        });

        Schema::create('conteudos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pagina_id');
            $table->string('titulo');
            $table->string('slug');
            $table->longText('conteudo')->nullable();
            $table->longText('revisao')->nullable();
            $table->longText('metas')->nullable();
            $table->string('locale')->default('pt_BR');
            $table->timestamps();
        });

        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('corpo');
            $table->string('slug');
            $table->string('capa')->nullable();
            $table->boolean('destaque')->default(false);
            $table->date('publicada_em')->nullable();
            $table->string('locale')->default('pt_BR');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paginas');
        Schema::dropIfExists('conteudos');
        Schema::dropIfExists('noticias');
    }
}
