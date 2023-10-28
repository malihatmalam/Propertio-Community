<div class="pcoded-inner-navbar main-menu" style="background: #07895b;">

    @switch(auth()->user()->role)
        @case('ADMIN')
            @include('layout.cms.sidebar-role.sidebar-admin')
        @break

        @case('EMPLOYEE')
            @include('layout.cms.sidebar-role.sidebar-consultant')    
        @break

        @default
            @include('layout.cms.sidebar-role.sidebar-user')
    @endswitch

</div>
