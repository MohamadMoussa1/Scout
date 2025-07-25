<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Scout;
use App\Models\Region;
use App\Models\Unit;
use App\Models\TransferCard;
use App\Models\AssigneRank;
use App\Models\ScoutBadge;
use App\Models\AssignedTask;
use App\Models\ActivityReport;
use App\Models\Participation;

class ScoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scouts = Scout::with(['region', 'unit','unit.unitType'])->get(); //region is the name of the function

        return response()->json(
            [
                'message' => 'Scouts retrieved successfully',
                'success' => true,
                'data' => $scouts,
            ],
            200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'scout_photo' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'gender' => 'required|string|max:10',
            'contact_tel_Home' => 'required|string|max:15',
            'contact_tel_Cell' => 'required|string|max:15',
            'contact_tel_father' => 'required|string|max:15',
            'contact_tel_other' => 'nullable|string|max:15',
            'current_unit_id' => 'required|exists:units,id',
            'address' => 'required|string|max:255',
            'region_id' => 'required|exists:region,id',
            'town' => 'required|string|max:100',
            'joining_date' => 'required|date',
            'remarks' => 'nullable|string|max:500',
        ]);
        $scout = Scout::create($validatedData);
        return response()->json(
            [
                'message' => 'Scout created successfully',
                'success' => true,
                'data' => $scout,
            ],
            201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $scout = Scout::with(['region', 'unit', 'unit.unitType'])->findOrFail($id);
        return response()->json(
            [
                'message' => 'Scout retrieved successfully',
                'success' => true,
                'data' => $scout,
            ],
            200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $scout = Scout::findOrFail($id);
        $validatedData = $request->validate([
            'scout_photo' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'gender' => 'required|string|max:10',
            'contact_tel_Home' => 'required|string|max:15',
            'contact_tel_Cell' => 'required|string|max:15',
            'contact_tel_father' => 'required|string|max:15',
            'contact_tel_other' => 'nullable|string|max:15',
            'current_unit_id' => 'required|exists:units,id',
            'address' => 'required|string|max:255',
            'region_id' => 'required|exists:region,id',
            'town' => 'required|string|max:100',
            'joining_date' => 'required|date',
            'remarks' => 'nullable|string|max:500',
        ]);
        $scout->update($validatedData);
        return response()->json(
            [
                'message' => 'Scout updated successfully',
                'success' => true,
                'data' => $scout,
            ],
            200);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $scout = Scout::findOrFail($id);
        $scout->delete();
        return response()->json(
            [
                'message' => 'Scout deleted successfully',
                'success' => true,
            ],
            200);
    }
}
