<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerAssets extends Controller
{
    /**
     * Will verify if a asset exist searched by tag and
     * if will be found the fucntion will return the asset id.
     *
     * @param  $tag
     * @return integer|null
     */
    public static function check_if_asset_exist_by_tag($tag) {
        $request = DB::table('assets')->where('tag','=',$tag)->first();
        
        if ($request == null) return $request;

        return $request->id;
    }

    /**
     * Will verify if a asset exist searched by tag and
     * if will be found the fucntion will return the asset id.
     *
     * @param  $tag
     * @return integer|null
     */
    public static function check_if_asset_exist_by_id($id) {
        $request = DB::table('assets')->where('id', '=' , $id)->first();
        
        if ($request == null) return $request;

        return $request->id;
    }
}
