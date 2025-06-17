<html lang="en">
<head>
    @include('layouts.partials.head')
    <title>@yield('title', 'Page')</title>
</head>
<body>

    @yield('content')
    @include('layouts.partials.footer')
    @include('layouts.partials.scripts')
</body>
</html>