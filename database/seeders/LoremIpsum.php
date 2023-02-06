<?php

namespace Database\Seeders;

use App\Models\Assets;
use App\Models\User;
use App\Models\AssetsCategory;
use App\Models\AssetsStatus;
use App\Models\Watchlist;
use App\Models\WatchlistAssets;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoremIpsum extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::factory()->create([
            'name' => 'SYSTEM',
            'email' => 'api@admin.com',
        ]);

        AssetsCategory::insert([
            ['name' => 'Stocks'],
            ['name' => 'Commodities'],
            ['name' => 'Cryptocurrencies'],
            ['name' => 'Currencies'],
        ]);

        Assets::insert([
            ['name' => 'Intel','tag' => 'INTC','category_asset_id' => 1],
            ['name' => 'IBM','tag' => 'IBM','category_asset_id' => 1],
            ['name' => 'APPLE','tag' => 'AAPL','category_asset_id' => 1],
            ['name' => 'Gold','tag' => 'XAUUSD','category_asset_id' => 2],
            ['name' => 'Platinum','tag' => 'XPTUSD','category_asset_id' => 2],
            ['name' => 'Oil','tag' => 'USOIL','category_asset_id' => 2],
            ['name' => 'Bitcoin','tag' => 'BTC','category_asset_id' => 3],
            ['name' => 'Solana', 'tag' => 'SOL','category_asset_id' => 3],
            ['name' => 'Ethereum','tag' => 'ETH','category_asset_id' => 3],
            ['name' => 'EUR/USD','tag' => 'EUR/USD','category_asset_id' => 4],
            ['name' => 'GBP/USD', 'tag' => 'GBP/USD','category_asset_id' => 4],
            ['name' => 'USD/CAD','tag' => 'USD/CAD','category_asset_id' => 4],
        ]);

        AssetsStatus::insert([
            ['asset_id' => 1, 'current_price' => 26.68, 'last_price' => 22.15],
            ['asset_id' => 4, 'current_price' => 1866.68, 'last_price' => 1870.15],
            ['asset_id' => 7, 'current_price' => 22808.68, 'last_price' => 2222.15],
            ['asset_id' => 10, 'current_price' => 1.0729, 'last_price' => 1.1129],
        ]);

        Watchlist::insert([
            ['user_id' => 1, 'name_watchlist' => 'Favorites'],
            ['user_id' => 1, 'name_watchlist' => 'Spot Tradining'],
        ]);

        WatchlistAssets::insert([
            ['watchlist_id' => 1, 'asset_id' => '2'],
            ['watchlist_id' => 1, 'asset_id' => '6'],
            ['watchlist_id' => 1, 'asset_id' => '8'],
            ['watchlist_id' => 1, 'asset_id' => '1'],
            ['watchlist_id' => 1, 'asset_id' => '5'],
            ['watchlist_id' => 2, 'asset_id' => '1'],
            ['watchlist_id' => 2, 'asset_id' => '2'],
            ['watchlist_id' => 2, 'asset_id' => '5'],
            ['watchlist_id' => 2, 'asset_id' => '6'],
            ['watchlist_id' => 2, 'asset_id' => '9'],
        ]);
    }
}
