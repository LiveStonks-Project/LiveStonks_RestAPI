<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\AssetsCategory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // Seeding default user.
        User::factory()->create([
            'name' => 'SYSTEM',
            'email' => 'api@admin.com',
        ]);

        // Seeding default category_assets.
        AssetsCategory::insert([
            ['name' => 'Stocks'],
            ['name' => 'Commodities'],
            ['name' => 'Cryptocurrencies'],
            ['name' => 'Currencies'],
        ]);
    }
}
