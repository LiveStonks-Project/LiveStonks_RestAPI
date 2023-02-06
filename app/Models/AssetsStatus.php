<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetsStatus extends Model
{
    use HasFactory;

    protected $table = "asset_status";

    /**
     * The attributes that are mass assignable.
     *
     * @var string<int, string>
     */
    protected $fillable = [
        'asset_id',
        'current_price',
        'last_price',
    ];
}
