<!doctype html>
<html data-theme="sunset">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
            <!-- Page content here -->
            <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">Open drawer</label>
            <div class="p-10">
                <div class="text-sm breadcrumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        @php
                        $segments = Request::segments();
                        $url = '';
                        @endphp
                        @foreach ($segments as $segment)
                        @php
                        $url .= '/' . $segment;
                        @endphp
                        <li><a href="{{ $url }}">{{ ucfirst($segment) }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <h1 class="text-5xl font-extrabold mb-10">{{ Route::currentRouteName() }}</h1>
                @yield('content')
            </div>
        </div>
        <div class="drawer-side">
            <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
                <!-- Sidebar content here -->
                <li><a href="{{ route('Melee weapons') }}">Melee weapons</a></li>
            </ul>

        </div>
    </div>

    <livewire:footer />
    @livewireScripts
</body>

</html>