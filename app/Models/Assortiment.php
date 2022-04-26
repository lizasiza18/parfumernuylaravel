<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assortiment extends Model
{
    use HasFactory;
    public $timestamps =false;
public function Order(){
return DB :: table ('assortiments')-> select ('*')->get();
}
}
