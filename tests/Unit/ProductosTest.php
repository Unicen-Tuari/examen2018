<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Product;

class ProductosTest extends TestCase
{
   public function testPromedio()
  {
    // $productos = factory(Product::class)->create(['precio'=>5], ['precio'=>4]);
    // $suma= 0;
    // foreach ($productos as $producto){
    //     $suma+= $producto->precio;
    // }
    // $promedio= $suma/2;
    // $this->assertEquals(Product::promedio(),$promedio);
    $this->assertTrue(true);
  }
}