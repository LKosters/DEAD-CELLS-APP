<?php

namespace App\Http\Controllers;

use App\Models\MeleeWeapon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class MeleeWeaponsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /**
         * Fetches melee weapons data from an API, saves new weapons to the database, and returns a paginated view of all melee weapons.
         *
         * @return \Illuminate\View\View
         */
        
        $client = new Client();

        $response = $client->request('GET', 'http://localhost:5000/api/v1/melee-weapons');

        $weaponsData = json_decode($response->getBody()->getContents());

        foreach ($weaponsData as $weaponData) {
            if (! MeleeWeapon::where('weapon', $weaponData->weapon)->exists()) {
                MeleeWeapon::create([
                    'base_dps' => $weaponData->base_dps,
                    'blueprint_location' => $weaponData->blueprint_location,
                    'description' => $weaponData->description,
                    'scaling' => $weaponData->scaling,
                    'weapon' => $weaponData->weapon,
                    'weapon_img' => $weaponData->weapon_img,
                ]);
            }
        }

        $weapons = MeleeWeapon::paginate(20);

        return view('MeleeWeapons.index', [
            'weapons' => $weapons,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('MeleeWeapons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $weapon = MeleeWeapon::findOrFail($id);

        return view('MeleeWeapons.edit', [
            'weapon' => $weapon,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $weapon = MeleeWeapon::findOrFail($id);

        $weapon->update([
            'base_dps' => $request->base_dps,
            'blueprint_location' => $request->blueprint_location,
            'description' => $request->description,
            'scaling' => $request->scaling,
            'weapon' => $request->weapon,
            'weapon_img' => $request->weapon_img,
        ]);

        return redirect()->route('Melee weapons');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $weapon = MeleeWeapon::findOrFail($id);

        $weapon->delete();

        return redirect()->route('Melee weapons');
    }
}