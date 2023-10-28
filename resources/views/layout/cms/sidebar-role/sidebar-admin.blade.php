{{-- <div class="pcoded-navigatio-lavel">Home</div>
<ul class="pcoded-item pcoded-left-item">
    <li class="">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
            <span class="pcoded-mtext">Dashboard</span>
        </a>
    </li>
</ul> --}}

<div class="pcoded-navigatio-lavel">Management</div>
<ul class="pcoded-item pcoded-left-item">
    <li class="pcoded-hasmenu">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="feather icon-grid"></i></span>
            <span class="pcoded-mtext">Managemen Kategori</span>
        </a>
        <ul class="pcoded-submenu">
            <li class=" ">
                <a href="{{ route('category.index') }}">
                    <span class="pcoded-mtext">List Kategori</span>
                </a>
            </li>
            <li class=" ">
                <a href="{{ route('category.create') }}">
                    <span class="pcoded-mtext">Penambahan Kategori</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="pcoded-hasmenu">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="feather icon-hash"></i></span>
            <span class="pcoded-mtext">Managemen Tag</span>
        </a>
        <ul class="pcoded-submenu">
            <li class=" ">
                <a href="{{ route('tag.index') }}">
                    <span class="pcoded-mtext">List Tag</span>
                </a>
            </li>
            <li class=" ">
                <a href="{{ route('tag.create') }}">
                    <span class="pcoded-mtext">Penambahan Tag</span>
                </a>
            </li>
        </ul>
    </li>
</ul>
