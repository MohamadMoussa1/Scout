<?php

namespace App\Http\Controllers\Api;
use App\Models\Region;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Troop;
use App\Models\Scout;
use App\Models\Unit;
class RegionController extends Controller
{
    public function index()
    {
        return Region::select('id', 'region_name')->get();
    }
    public function getTroopsByRegion($regionId)
    {
        // Fetch troops that belong to the region
        $troops = Troop::where('region_id', $regionId)->get(['id', 'troop_name']);

        // Return them as JSON
        return response()->json($troops);
    }
}
