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
        $response->assertStatus(200);
    }
}
