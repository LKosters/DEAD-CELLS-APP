@extends('layouts.layout')

@section('content')
<div class="overflow-x-auto">
    <table class="table">
        <!-- head -->
        <thead>
            <tr>
                <th>Edit</th>
                <th>Weapon</th>
                <th>Description</th>
                <th>Blueprint location</th>
                <th>Base DPS</th>
                <th>Scaling</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($weapons as $weapon)
            <tr>
                <th>
                    <form action="{{ route('Edit melee weapon', $weapon->id) }}" method="GET">
                        <button type="submit"><i class="fa-solid fa-pen-to-square"></i></button>
                    </form>
                </th>
                <td>
                    <div class="flex items-center gap-3">
                        <div class="avatar">
                            <div class="mask mask-squircle w-12 h-12">
                                <img src="{{ $weapon->weapon_img }}" />
                            </div>
                        </div>
                        <div>
                            <div class="font-bold">{{ $weapon->weapon }}</div>
                        </div>
                    </div>
                </td>
                <td>{{ $weapon->description }}</td>
                <td>{{ $weapon->blueprint_location }}</td>
                <td>{{ $weapon->base_dps }}</td>
                <td>
                    <div class="flex items-center gap-3">
                        <div class="avatar">
                            <div class="mask mask-squircle w-12 h-12">
                                <img src="{{ $weapon->scaling }}" />
                            </div>
                        </div>
                    </div>
                </td>
                <th>
                    <form action="{{ route('Delete melee weapon', $weapon->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
        <!-- foot -->
        <tfoot>
            <tr>
                <th>Edit</th>
                <th>Weapon</th>
                <th>Description</th>
                <th>Blueprint location</th>
                <th>Base DPS</th>
                <th>Scaling</th>
                <th>Delete</th>
            </tr>
        </tfoot>

        {{ $weapons->links() }}

    </table>
</div>
@endsection