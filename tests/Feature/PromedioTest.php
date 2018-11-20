<?php
namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Product;
class PromedioTest extends TestCase
{
  public function testPromedio()
  {
    $product = factory(Product::class)->create();
    $response = $this->get('/');
    $response->assertStatus(200)
             ->assertSee('Promedio');
  }

}
?>
