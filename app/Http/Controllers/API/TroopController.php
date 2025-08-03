<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Troop;
use App\Models\Unit;
use App\Models\Region;
class TroopController extends Controller
{
        public function getUnitsByTroop($troopId)
        {
            // Fetch units that belong to the troop
            $units = Unit::where('troop_id', $troopId)->get(['id', 'unit_name']);

            // Return them as JSON
            return response()->json($units);
        }
}
