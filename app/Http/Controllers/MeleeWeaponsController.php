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
        $client = new Client();

        $response = $client->request('GET', 'http://localhost:5000/api/v1/melee-weapons');

        $weapons = json_decode($response->getBody()->getContents());

        foreach ($weapons as $weapon) {
            if (!MeleeWeapon::where('weapon', $weapon->weapon)->exists()) {
                MeleeWeapon::create([
                    'base_dps' => $weapon->base_dps,
                    'blueprint_location' => $weapon->blueprint_location,
                    'description' => $weapon->description,
                    'scaling' => $weapon->scaling,
                    'weapon' => $weapon->weapon,
                    'weapon_img' => $weapon->weapon_img,
                ]);
            }
        }

        dd(MeleeWeapon::all());
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}