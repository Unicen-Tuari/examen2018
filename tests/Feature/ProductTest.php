<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testListProducts()
    {
        $product = factory(Product::class)->create();
        $response = $this->get('/');
        $response->assertSeeText($product->nombre);
        $response->assertSeeText($product->puntaje);
        $response->assertStatus(200);
    }
    public function testProm(){
        $product = factory(Product::class)->create();
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Promedio');
    }
}
