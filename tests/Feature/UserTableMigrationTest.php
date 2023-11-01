<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Schema;

class UserTableMigrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_users_table_exists()
    {
        // Controleer of de 'users' tabel bestaat in de database
        $this->assertTrue(Schema::hasTable('users'));
    }

    public function test_users_table_columns()
    {
        // Controleer of de 'users' tabel de verwachte kolommen heeft
        $expectedColumns = [
            'id',
            'name',
            'email',
            'email_verified_at',
            'password',
            'remember_token',
            'created_at',
            'updated_at',
        ];

        $actualColumns = Schema::getColumnListing('users');

        foreach ($expectedColumns as $column) {
            $this->assertTrue(in_array($column, $actualColumns));
        }
    }
}
