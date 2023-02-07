<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ControllerAssets;
use App\Models\Assets;
use Exception;

class ControllerAPI extends Controller
{    
    /**
     * Function used to get all assets from db.
     *
     * @return array
    */
    public function get_list_assets() {
        return DB::table('assets')->get();
    }

    /**
     * Function used to get one asset by id
     *
     * @param  $id
     * @return array
    */
    public function get_asset_by_id($id) {
		$response = DB::table('assets')
        ->join('category_assets', 'category_assets.id','=', 'assets.category_asset_id')
        ->join('asset_status', 'asset_status.asset_id', '=', 'assets.id')
        ->where('assets.id', '=', $id)
        ->select(
            "assets.id as asset_id",
            "assets.name as asset_name",
            "assets.tag as asset_tag",
            "category_assets.name as category_name",
            "asset_status.current_price as price",
            "asset_status.last_price as last_price"
        )->first();

        if ($response == null) return [
            "status" => "404",
            "response" => "Assest doesn't exist."
        ];

        return $response;

	}

    /**
     * Function used to get all categories.
     *
     * @return array
    */
    public function get_category_asset() {
		return DB::table('category_assets')->get();
	}

    /**
     * Function used to insert a new asset with a status.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
    */
    public function create_new_asset(Request $request) {
        $response = ControllerAssets::check_if_asset_exist_by_tag($request->tag);

        if ($response != null)
            return [
                "status" => "403",
                "response" => "Assest already exist."
            ];
		
        $timedata = new \DateTime();
        
        try {
            $this->store_asset($request, $timedata);
            $this->store_status_asset($request, $timedata);
                return [
                    "status" => "200",
                    "response" => "A new asset has been created."
                ];

        }catch(\Exception $e){
            return [
                "status" => "403",
                "response" => $e
            ];
        }
	}

    /**
     * Function used to insert a new asset
     *
     * @param  \Illuminate\Http\Request $request
     * @return bool
    */
    private function store_asset($req, $timedata):bool {

        return DB::table('assets')
            ->insert([
				'name' => $req->name,
				'tag' => $req->tag,
				'category_asset_id' => $req->category_asset,
				'created_at' => $timedata,
				'updated_at' => $timedata
			]);
    }

    /**
     * Function used to insert a new status for asset.
     *
     * @param  \Illuminate\Http\Request $request
     * @return bool
    */
    private function store_status_asset($req, $timedata):bool {
    
        $response = ControllerAssets::check_if_asset_exist_by_tag($req->tag);

        return DB::table('asset_status')
            ->insert([
				'asset_id' => $response,
				'current_price' => $req->price,
				'last_price' => $req->last_price,
				'created_at' => $timedata,
				'updated_at' => $timedata
			]);
    }

    /**
     * Function used to update asset by id.
     *
     * @param  \Illuminate\Http\Request $request, $id
     * @return array
    */
    public function update_asset(Request $request, $id) {
        $timedata = new \DateTime();
        $response = ControllerAssets::check_if_asset_exist_by_id($id);
        if ($response == null)
            return [
                "status" => "404",
                "response" => "Assest doesn't exist"
            ];
        
        $response = DB::table('assets')
        ->where('id', '=' , $id)
        ->update([
            'name' => $request->name,
            'tag' => $request->tag,
            'category_asset_id' => $request->category_id,
            'updated_at' => $timedata
        ]);

        if ($response != null) 
        return [
            "status" => "200",
            "response" => "A new asset has been updated."
        ];
    }

    /**
     * Function used to update status asset by id.
     *
     * @param  \Illuminate\Http\Request $request, $id
     * @return array
    */
    public function update_asset_status(Request $request, $id) {
        $timedata = new \DateTime();
        $response = ControllerAssets::check_if_asset_exist_by_id($id);
        if ($response == null)
            return [
                "status" => "404",
                "response" => "Assest doesn't exist"
            ];
        
        $response = DB::table('asset_status')
        ->where('asset_id', '=' , $id)
        ->update([
            'current_price' => $request->price,
            'last_price' => $request->last_price,
            'updated_at' => $timedata
        ]);

        if ($response != null) 
        return [
            "status" => "200",
            "response" => "A new asset has been updated."
        ];
    }

    /**
     * Function used to delete a asset by id.
     *
     * @param  $id
     * @return array
    */
    public function delete_asset($id) {
        
        $response = DB::table('asset_status')
            ->where("asset_id", "=", $id)
            ->delete(); 
          
        if ($response != null)
            $response = DB::table('assets')
            ->where("id", "=", $id)
            ->delete();

        if ($response != null)
            return [
                "status" => "200",
                "response" => "Asset has been deleted"
            ];

        return [
            "status" => "404",
            "response" => "Assest doesn't exist"
        ];
        
    }
}
