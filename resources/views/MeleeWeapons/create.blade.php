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
            <tr>
                <td><input type="text" placeholder="Weapons img" class="input input-bordered w-full max-w-xs" /></td>
                <td><input type="text" placeholder="Weapon" class="input input-bordered w-full max-w-xs" /></td>
                <td><input type="text" placeholder="Description" class="input input-bordered w-full max-w-xs" /></td>
                <td><input type="text" placeholder="Blueprint location" class="input input-bordered w-full max-w-xs" />
                </td>
                <td><input type="text" placeholder="Base DPS" class="input input-bordered w-full max-w-xs" /></td>
                <td><input type="text" placeholder="Scaling" class="input input-bordered w-full max-w-xs" /></td>
                <th>
                    <form>
                        <button><i class="fa-solid fa-plus"></i></button>
                    </form>
                </th>
            </tr>
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