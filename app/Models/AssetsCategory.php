<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetsCategory extends Model
{
    use HasFactory;

    protected $table = "category_assets";

    /**
     * The attributes that are mass assignable.
     *
     * @var string<int, string>
     */

    protected $fillable = [
        'name',
    ];
}
