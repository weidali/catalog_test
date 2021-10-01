<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_products_page_is_rendered_properly()
    {
        /** @var \Illuminate\Contracts\Auth\Authenticatable $user */
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/dashboard/products');

        $response->assertStatus(200);
    }

    public function test_users_can_create_products()
    {
        /** @var \Illuminate\Contracts\Auth\Authenticatable $user */
        $user = User::factory()->create();
        $this->actingAs($user);

        Storage::fake('local');
 
        $response = $this->post('/dashboard/products/create', [
            'name' => 'J 47 Boat',
            'sku' => '123-123-123-123',
            'description' => 'Some description',
            'price' => '999',
            'image' => $file = UploadedFile::fake()->image('random.jpg'),
        ]);
        $response->assertRedirect('dashboard/products');
        $response->assertSessionHas('success');

        $product = Product::first();
        $this->assertEquals('J 47 Boat', $product->name);
        $this->assertEquals('123-123-123-123', $product->sku);
        $this->assertEquals('Some description', $product->description);
        $this->assertEquals('999', $product->price);

    }
}
