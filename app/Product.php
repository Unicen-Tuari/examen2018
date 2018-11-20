<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public static function getProm()
    {  $suma= 0;
        $cant = 0;
        $precios = DB::table('products')->select('precio')->where('precio' ,'<>', null)->get();
        foreach ($precios as $precio){
            $suma = $suma + $precio->precio;
            $cant ++;
        }
        $prom = ($suma / $cant);
        return $prom;
    }
}
