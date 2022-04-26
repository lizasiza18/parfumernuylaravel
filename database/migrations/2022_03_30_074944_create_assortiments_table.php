<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assortiments', function (Blueprint $table) {
            $table->increments('id');
            $table -> string (column: 'Название');
            $table -> string (column: 'Цена');
            $table -> string (column: 'Объем');
            $table -> string (column: 'Производитель');
            $table -> string (column: 'Страна');
            $table -> string (column: 'Артикул');
            $table -> date (column: 'Дата_призводства');
            $table -> string (column: 'Количество');
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
        Schema::dropIfExists('assortiments');
    }
};
