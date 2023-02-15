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
        
        $timedata = new \DateTime();

        User::factory()->create([
            'name' => 'SYSTEM',
            'email' => 'api@admin.com',
            'created_at' => $timedata,
            'updated_at' => $timedata
        ]);

        AssetsCategory::insert([
            ['name' => 'Stocks', 'created_at' => $timedata, 'updated_at' => $timedata],
            ['name' => 'Commodities', 'created_at' => $timedata, 'updated_at' => $timedata],
            ['name' => 'Cryptocurrencies', 'created_at' => $timedata, 'updated_at' => $timedata],
            ['name' => 'Currencies', 'created_at' => $timedata, 'updated_at' => $timedata],
        ]);

        Assets::insert([
            ['name' => 'Intel', 'tag' => 'INTC','category_asset_id' => 1, 'created_at' => $timedata, 'updated_at' => $timedata],
            ['name' => 'IBM', 'tag' => 'IBM','category_asset_id' => 1, 'created_at' => $timedata, 'updated_at' => $timedata],
            ['name' => 'APPLE','tag' => 'AAPL','category_asset_id' => 1, 'created_at' => $timedata, 'updated_at' => $timedata],
            ['name' => 'Gold','tag' => 'XAUUSD','category_asset_id' => 2, 'created_at' => $timedata, 'updated_at' => $timedata],
            ['name' => 'Platinum','tag' => 'XPTUSD','category_asset_id' => 2, 'created_at' => $timedata, 'updated_at' => $timedata],
            ['name' => 'Oil','tag' => 'USOIL','category_asset_id' => 2, 'created_at' => $timedata, 'updated_at' => $timedata],
            ['name' => 'Bitcoin','tag' => 'BTC','category_asset_id' => 3, 'created_at' => $timedata, 'updated_at' => $timedata],
            ['name' => 'Solana', 'tag' => 'SOL','category_asset_id' => 3, 'created_at' => $timedata, 'updated_at' => $timedata],
            ['name' => 'Ethereum','tag' => 'ETH','category_asset_id' => 3, 'created_at' => $timedata, 'updated_at' => $timedata],
            ['name' => 'EUR/USD','tag' => 'EUR/USD','category_asset_id' => 4, 'created_at' => $timedata, 'updated_at' => $timedata],
            ['name' => 'GBP/USD', 'tag' => 'GBP/USD','category_asset_id' => 4, 'created_at' => $timedata, 'updated_at' => $timedata],
            ['name' => 'USD/CAD','tag' => 'USD/CAD','category_asset_id' => 4, 'created_at' => $timedata, 'updated_at' => $timedata],
        ]);

        AssetsStatus::insert([
            ['asset_id' => 1, 'current_price' => 26.68, 'last_price' => 22.15, 'created_at' => $timedata, 'updated_at' => $timedata],
            ['asset_id' => 4, 'current_price' => 1866.68, 'last_price' => 1870.15, 'created_at' => $timedata, 'updated_at' => $timedata],
            ['asset_id' => 7, 'current_price' => 22808.68, 'last_price' => 2222.15, 'created_at' => $timedata, 'updated_at' => $timedata],
            ['asset_id' => 10, 'current_price' => 1.0729, 'last_price' => 1.1129, 'created_at' => $timedata, 'updated_at' => $timedata],
        ]);

        Watchlist::insert([
            ['user_id' => 1, 'name_watchlist' => 'Favorites', 'created_at' => $timedata, 'updated_at' => $timedata],
            ['user_id' => 1, 'name_watchlist' => 'Spot Tradining', 'created_at' => $timedata, 'updated_at' => $timedata],
        ]);

        WatchlistAssets::insert([
            ['watchlist_id' => 1, 'asset_id' => '2', 'created_at' => $timedata, 'updated_at' => $timedata],
            ['watchlist_id' => 1, 'asset_id' => '6', 'created_at' => $timedata, 'updated_at' => $timedata],
            ['watchlist_id' => 1, 'asset_id' => '8', 'created_at' => $timedata, 'updated_at' => $timedata],
            ['watchlist_id' => 1, 'asset_id' => '1', 'created_at' => $timedata, 'updated_at' => $timedata],
            ['watchlist_id' => 1, 'asset_id' => '5', 'created_at' => $timedata, 'updated_at' => $timedata],
            ['watchlist_id' => 2, 'asset_id' => '1', 'created_at' => $timedata, 'updated_at' => $timedata],
            ['watchlist_id' => 2, 'asset_id' => '2', 'created_at' => $timedata, 'updated_at' => $timedata],
            ['watchlist_id' => 2, 'asset_id' => '5', 'created_at' => $timedata, 'updated_at' => $timedata],
            ['watchlist_id' => 2, 'asset_id' => '6', 'created_at' => $timedata, 'updated_at' => $timedata],
            ['watchlist_id' => 2, 'asset_id' => '9', 'created_at' => $timedata, 'updated_at' => $timedata],
        ]);
    }
}
