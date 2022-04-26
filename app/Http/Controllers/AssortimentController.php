<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\Assortiment;

class AssortimentController extends Controller
{
    public function Assortiments() {

        $posts = DB :: table('assortiments' )-> select ('*')->get();
        return view ('table1', compact('posts'));
        }
        public function Submit(Request $request){
            $assortiments = new Assortiment();
            $assortiments  -> Название = $request-> input('Название');
            $assortiments -> Цена = $request-> input('Цена');
            $assortiments-> Объем = $request-> input('Объем');
            $assortiments -> Производитель = $request-> input('Производитель');
            $assortiments  -> Страна = $request-> input('Страна');
            $assortiments -> Артикул = $request-> input('Артикул');
            $assortiments  -> Дата_производства = $request-> input('Дата_производства');
            $assortiments -> Количество = $request-> input('Количество');
        
            $assortiments ->save();
        return redirect ()-> route ('table');
        }
        public function del($id){
        DB::delete('delete from assortiments where id = ?', [$id]);
        echo '<a href="/table">Назад</a>';
}
}
