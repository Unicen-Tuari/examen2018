<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Product;
class ProductTest extends TestCase
{
 
    public function testProm()
    {
        Product::truncate();
        $newProduct= factory(Product::class)->create(['precio' => 5]);
        $newProm = Product::getProm();
        $this->assertEquals($newProduct->precio,$newProm);

    }
}
