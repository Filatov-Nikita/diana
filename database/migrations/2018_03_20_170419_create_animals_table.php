<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('age');
            $table->string('thumbnail');
            $table->integer('animal_type_id')->unsigned();
            $table->foreign('animal_type_id')->references('id')
            ->on('animal_types')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->integer('categorie_id')->unsigned();
            $table->foreign('categorie_id')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('animals');
    }
}
