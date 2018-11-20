<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Product extends Model
{
        protected $table = 'products';
        protected $fillable = [
          'id', 'nombre', 'precio', 'puntaje', 
        ];
  
    protected function promedio(){
        $products = $this->select('precio')->get();
        $suma = 0;
        $total= count($products);
        foreach ($products as $product)
        {
            $suma+= $product->precio;
        }
        $promedio= $suma/$total;
        return $promedio;
    }
}
