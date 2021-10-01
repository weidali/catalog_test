<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Faker\Generator;
use App\Upload;
use Illuminate\Http\UploadedFile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class CustomerControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_customers_page_is_rendered_properly()
    {
        /** @var \Illuminate\Contracts\Auth\Authenticatable $user */
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/dashboard/customers');

        $response->assertStatus(200);
    }

    public function test_users_can_create_customers()
    {
        /** @var \Illuminate\Contracts\Auth\Authenticatable $user */
        $user = User::factory()->create();
        $this->actingAs($user);

        Storage::fake('local');
 
        $response = $this->post('/dashboard/customers/create', [
            'name' => 'John Wick',
            'email' => 'test@mail.com',
            'phone' => '12345678901',
            'photo' => $file = UploadedFile::fake()->image('random.jpg'),
        ]);
        $response->assertRedirect('dashboard/customers');
        $response->assertSessionHas('success');

        $customer = Customer::first();
        $this->assertEquals('John Wick', $customer->name);
        $this->assertEquals('test@mail.com', $customer->email);
        $this->assertEquals('12345678901', $customer->phone);

    }
}
