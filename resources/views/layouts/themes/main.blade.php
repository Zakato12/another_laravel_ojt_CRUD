<html lang="en">
<head>
    @include('layouts.partials.head')
    <title>@yield('title','Page')</title>
    @include('layouts.partials.auth')
</head>
<body>
    @include('layouts.partials.header')
    @include('layouts.partials.topbar')
    <div class="container">
        @yield('content')
    </div>
    @include('layouts.partials.footer')
    @include('layouts.partials.scripts')
</body>