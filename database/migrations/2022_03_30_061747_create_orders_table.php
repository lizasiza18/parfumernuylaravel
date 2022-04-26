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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table -> string (column: 'Фамилия');
            $table -> string (column: 'Имя');
            $table -> string (column: 'Отчество');
            $table -> string (column: 'Телефон');
            $table -> string (column: 'Паспорт');
            $table -> string (column: 'Адрес');
            $table -> date (column: 'Дата_заказа');
            $table -> string (column: 'Товары');
            $table -> string (column: 'Сумма');
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
        Schema::dropIfExists('orders');
    }
};
