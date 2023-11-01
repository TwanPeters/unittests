<?php

namespace Database\Seeders;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class UsersTableSeederTest extends TestCase
{
    use RefreshDatabase;

    public function test_users_table_seeder()
    {
        $this->seed(UsersTableSeeder::class);

        $userCount = User::count();
        $this->assertEquals(100, $userCount);

    }
}
