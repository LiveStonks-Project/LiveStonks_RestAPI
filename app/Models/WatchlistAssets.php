<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WatchlistAssets extends Model
{
    use HasFactory;

    protected $table = "watchlist_assets";

    /**
     * The attributes that are mass assignable.
     *
     * @var string<int, string>
     */
    protected $fillable = [
        'watchlist_id',
        'asset_id',
    ];
}
