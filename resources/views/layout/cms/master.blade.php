<!DOCTYPE html>
<html lang="id">

{{-- Header --}}
@include('layout.cms.header')
{{-- END Header --}}

<body>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            {{-- Navbar --}}
            @include('layout.cms.navbar')
            {{-- END Navbar --}}

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <nav class="pcoded-navbar" style="background: #07895b;">
                    {{-- Sidebar --}}
                    @include('layout.cms.sidebar')
                    {{-- END Sidebar --}}
                    </nav>

                    {{-- Content --}}
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    @yield('content')
                                </div>

                                <div id="styleSelector">

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- END Content --}}

                </div>
            </div>
        </div>
    </div>

    {{-- Script Javascript General --}}
    @include('layout.cms.scripts-js')
    {{-- END Script Javascript General --}}

    {{-- Script Javascript Custom --}}
    @yield('custom-js')
    {{-- END Script Javascript Custom --}}

</body>

</html>