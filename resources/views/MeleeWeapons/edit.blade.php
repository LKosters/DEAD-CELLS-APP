@extends('layouts.layout')

@section('content')
<div class="overflow-x-auto">
    <table class="table">
        <!-- head -->
        <thead>
            <tr>
                <th>Weapon img</th>
                <th>Weapon</th>
                <th>Description</th>
                <th>Blueprint location</th>
                <th>Base DPS</th>
                <th>Scaling</th>
            </tr>
        </thead>
        <tbody>
            <form action="{{ route('Update melee weapon', $weapon->id) }}" method="POST">
                @csrf
                @method('PUT')
                <tr>
                    <td><input value="{{ $weapon->weapon_img }}" type="text" name="weapon_img" placeholder="Weapons img"
                            class="input input-bordered w-full max-w-xs" />
                    </td>
                    <td><input value="{{ $weapon->weapon }}" type="text" name="weapon" placeholder="Weapon"
                            class="input input-bordered w-full max-w-xs" /></td>
                    <td><input value="{{ $weapon->description }}" type="text" name="description"
                            placeholder="Description" class="input input-bordered w-full max-w-xs" /></td>
                    <td><input value="{{ $weapon->blueprint_location }}" type="text" name="blueprint_location"
                            placeholder="Blueprint location" class="input input-bordered w-full max-w-xs" />
                    </td>
                    <td><input value="{{ $weapon->base_dps }}" type="text" name="base_dps" placeholder="Base DPS"
                            class="input input-bordered w-full max-w-xs" /></td>
                    <td><input value="{{ $weapon->scaling }}" type="text" name="scaling" placeholder="Scaling"
                            class="input input-bordered w-full max-w-xs" /></td>
                    <th>
                        <button type="submit"><i class="fa-solid fa-plus"></i></button>
                    </th>
                </tr>
            </form>
        </tbody>
        <!-- foot -->
        <tfoot>
            <tr>
                <th>Weapon img</th>
                <th>Weapon</th>
                <th>Description</th>
                <th>Blueprint location</th>
                <th>Base DPS</th>
                <th>Scaling</th>
            </tr>
        </tfoot>
    </table>
</div>
@endsection