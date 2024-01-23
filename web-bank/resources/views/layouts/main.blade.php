<!DOCTYPE html>
    @include('layouts.header')
    <body class="sb-nav-fixed">
        @include('layouts.topnav')
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                @yield('content')
                @include('layouts.footer')
            </div>
        </div>
        @include('layouts.javascript')
    </body>
</html>