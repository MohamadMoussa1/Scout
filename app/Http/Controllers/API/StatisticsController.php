<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Scout;
use App\Models\Unit;
use App\Models\Troop;
use App\Models\Region;
class StatisticsController extends Controller
{
   
    public function showScoutsStatistics(){
        try {
            // Get all data with optimized queries
            $regions = Region::withCount('scouts')->get();
            $troops = Troop::withCount('scouts')->get();
            $units = Unit::withCount('scouts')->get();

            // Group troops by region_id
            $troopsByRegion = $troops->groupBy('region_id');
            
            // Group units by troop_id
            $unitsByTroop = $units->groupBy('troop_id');

            $scoutsByRegion = $regions->map(function($region) use ($troopsByRegion, $unitsByTroop) {
                $regionTroops = $troopsByRegion->get($region->id, collect());
                
                $troopsData = $regionTroops->map(function($troop) use ($unitsByTroop) {
                    $troopUnits = $unitsByTroop->get($troop->id, collect());
                    
                    $unitsData = $troopUnits->map(function($unit) {
                        return [
                            'unit_id' => $unit->id,
                            'unit_name' => $unit->unit_name,
                            'scout_count' => $unit->scouts_count
                        ];
                    });

                    return [
                        'troop_id' => $troop->id,
                        'troop_name' => $troop->troop_name,
                        'scout_count' => $troop->scouts_count,
                        'units' => $unitsData
                    ];
                });

                return [
                    'region_id' => $region->id,
                    'region_name' => $region->region_name,
                    'total_scouts' => $region->scouts_count,
                    'troops' => $troopsData
                ];
            });

            // Get total counts
            $totalScouts = Scout::count();
            $totalRegions = $regions->count();
            $totalTroops = Troop::count();
            $totalUnits = Unit::count();

            return response()->json([
                'success' => true,
                'total_scouts' => $totalScouts,
                'total_regions' => $totalRegions,
                'total_troops' => $totalTroops,
                'total_units' => $totalUnits,
                'scouts_by_region' => $scoutsByRegion
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch statistics',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
