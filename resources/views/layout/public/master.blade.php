<!DOCTYPE html>
<html lang="id">

{{-- Header --}}
@include('layout.public.header')
{{-- END Header --}}

<body>
    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="{{ asset('assets/public/images/loader.gif') }}" alt="">
    </div><!-- end loader -->
    <!-- End LOADER -->

    <div id="wrapper">

        {{-- Navbar --}}
        @include('layout.public.navbar')
        {{-- END Navbar --}}

        {{-- Content --}}
        @yield('content')
        {{-- End Content --}}

        {{-- Footer --}}
        @include('layout.public.footer')
        {{-- End Footer --}}


        {{-- Script Javascript General --}}
        @include('layout.public.script-js')
        {{-- END Script Javascript General --}}

        {{-- Script Javascript Custom --}}
        @yield('custom-js')
        {{-- END Script Javascript Custom --}}

    </div>
</body>

</html>