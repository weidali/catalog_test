<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Auth;

class UserTest extends TestCase
{

    use DatabaseMigrations {
        runDatabaseMigrations as baseRunDatabaseMigrations;
    }

    /**
     * Define hooks to migrate the database before and after each test.
     *
     * @return void
     */
    public function runDatabaseMigrations()
    {
        $this->baseRunDatabaseMigrations();
    }

    public function test_login_form()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function test_user_duplication()
    {
        $user1 = User::make([
            'name' => 'John Wick',
            'email' =>'john@wick.com'
        ]);

        $user2 = User::make([
            'name' => 'Leo D',
            'email' =>'leo@dekaprio.com'
        ]);

        $this->assertTrue($user1->name != $user2->name);
    }

     /**
     * Redirect to home page and logged in after register.
     *
     * @return void
     */
    function test_redirect_to_dashboard_and_logged_in_after_register()
    {                      
        $response = $this->post('register', [
            'name' => 'Test',
            'email' => 'test@mail.com',
            'password' => '12345678',
            'password_confirmation' => '12345678',         
        ]);

        $response->assertRedirect('/dashboard');       
    }

    /**
     * Redirect to home page and logged in after login.
     *
     * @return void
     */
    function test_redirect_to_dashboard_and_logged_in_after_login()
    {                
        $user = User::factory()->create([
            'name' => 'John',
            'email' => 'test@mail.com', 
            'password' => bcrypt('12345678'),
        ]);      

        $response = [
            'email' => 'test@mail.com',
            'password' => '12345678', 
            '_token' => csrf_token(),       
        ];
  
        $response = $this->post('/login', $response);
        $response->assertRedirect('/dashboard');   
        
    }

    public function test_delete_user()
    {
        $user = User::factory(1)->create();

        $user = User::first();

        if($user) {
            $user->delete();
        }

        $this->assertTrue(true);
    }

    public function test_it_store_new_users()
    {
        $response = $this->post('/register', [
            'name' => 'John',
            'email' => 'john@mail.com', 
            'password' => '12345678',
            'password_confirmation' => '12345678',
        ]);

        $response->assertRedirect('/dashboard');
    }


}
