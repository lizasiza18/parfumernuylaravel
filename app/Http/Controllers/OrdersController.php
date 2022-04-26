<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\Order;

class OrdersController extends Controller

{
    public function Orders() {

        $posts = DB :: table('orders' )-> select ('*')->get();
        return view ('table', compact('posts'));
        }
        public function Submit(Request $request){
            $orders = new Order();
            $orders  -> Фамилия = $request-> input('Фамилия');
            $orders -> Имя = $request-> input('Имя');
            $orders-> Отчество = $request-> input('Отчество');
            $orders -> Телефон = $request-> input('Телефон');
            $orders  -> Паспорт = $request-> input('Паспорт');
            $orders -> Адрес = $request-> input('Адрес');
            $orders  -> Дата_заказа = $request-> input('Дата_заказа');
            $orders -> Товары = $request-> input('Товары');
            $orders  -> Сумма = $request-> input('Сумма');
            $orders ->save();
        return redirect ()-> route ('table');
        }
        public function del($id){
        DB::delete('delete from orders where id = ?', [$id]);
        echo '<a href="/table">Назад</a>';
        }
        }
    



        