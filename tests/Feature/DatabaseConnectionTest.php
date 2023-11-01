<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;

class DatabaseConnectionTest extends TestCase
{
    use RefreshDatabase;

    public function testDatabaseConnection()
    {
        try {
            DB::connection()->getPdo();
            $this->assertTrue(true); 
        } catch (\Exception $e) {
            $this->fail('Databaseverbinding is mislukt: ' . $e->getMessage());
        }
    }
}