{{-- Search Section --}}
<div class="collapse top-search" id="collapseExample">
    <div class="card card-block">
        <div class="newsletter-widget text-center">
            <form class="form-inline" action="{{route('blog.cari')}}" method="get">
                <input type="text" class="form-control" placeholder="Apa yang ingin anda ketahui ?" name="cari">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
</div>
{{-- End Search Section --}}

{{-- Media Sosial Topbar --}}
<div class="topbar-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 hidden-xs-down">
                <div class="topsocial">
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i
                            class="fa fa-facebook"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i
                            class="fa fa-youtube"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i
                            class="fa fa-pinterest"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i
                            class="fa fa-twitter"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Flickr"><i
                            class="fa fa-flickr"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i
                            class="fa fa-instagram"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i
                            class="fa fa-google-plus"></i></a>
                </div><!-- end social -->
            </div><!-- end col -->

            <div class="col-lg-4 hidden-md-down">
                <div class="topmenu text-center">
                    {{-- <ul class="list-inline">
                        <li class="list-inline-item"><a href="blog-category-01.html"><i class="fa fa-star"></i>
                                Trends</a></li>
                        <li class="list-inline-item"><a href="blog-category-02.html"><i class="fa fa-bolt"></i> Hot
                                Topics</a></li>
                        <li class="list-inline-item"><a href="page-contact.html"><i class="fa fa-user-circle-o"></i>
                                Write for us</a></li>
                    </ul><!-- end ul --> --}}
                </div><!-- end topmenu -->
            </div><!-- end col -->

            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="topsearch text-right">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="false"
                        aria-controls="collapseExample"><i class="fa fa-search"></i> Cari</a>
                </div><!-- end search -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end header-logo -->
</div><!-- end topbar -->
{{-- End Media Sosial Topbar --}}

{{-- Header Logo --}}
<div class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('assets/public/images/logo-2.png') }}" alt=""></a>
                </div><!-- end logo -->
            </div>
        </div><!-- end row -->
    </div><!-- end header-logo -->
</div><!-- end header -->
{{-- End Header Logo --}}

{{-- Navbar Content --}}
<header class="header">
    <div class="container">
        <nav class="navbar navbar-inverse navbar-toggleable-md">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu"
                aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link color-green-hover" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown has-submenu">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Kategori</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            @foreach ($category_widget as $category)
                            <li><a class="dropdown-item" href="{{ route('blog.category.list', $category->name ) }}">{{ $category->name }}</a></li>
                            @endforeach
                            {{-- <li> <small><a class="dropdown-item" href="">Lainnya</a></small> </li> --}}
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-green-hover" href="{{ route('blog.category.list', 'Properti' ) }}">Properti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-green-hover" href="{{ route('blog.category.list', 'Arsitektur' ) }}">Arsitektur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-green-hover" href="{{ route('blog.category.list', 'Keuangan' ) }}">Keuangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-green-hover" href="{{ route('blog.category.list', 'Ide Kreatif' ) }}">Ide Kreatif</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-green-hover" href="{{ route('blog.category.list', 'Lifestyle' ) }}">Lifestyle</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-green-hover" href="{{ route('blog.category.list', 'Budaya' ) }}">Budaya</a>
                    </li>
                    @if (auth()->user() != null)
                        <li class="nav-item dropdown has-submenu">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown02"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                    class="fa fa-user"></i> {!! html_entity_decode(Str::limit(auth()->user()->userData->fullname, 10, ' ...')) !!}</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown02">
                                {{-- <li><a class="dropdown-item" href=""><i class="fa fa-info-circle"></i> Profil</a></li> --}}
                                @if (auth()->user()->role == "ADMIN")
                                <li><a class="dropdown-item" href="{{ route('category.index') }}"><i class="fa fa-cogs"></i> Management</a></li>    
                                @endif
                                <li><a class="dropdown-item" href="{{ route('post.index') }}"><i class="fa fa-edit"></i> Buat Artikel</a></li>
                                <li><a class="dropdown-item" href="http://propertio-sso.apps.test/logout"><i class="fa fa-sign-out"></i> Keluar</a></li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="btn btn-sm btn-success " href="http://propertio-sso.apps.test/login"><i class="fa fa-sign-in"></i> Masuk /
                                Daftar</a>
                        </li>
                    @endif


                </ul>
            </div>
        </nav>
    </div><!-- end container -->
</header><!-- end header -->
{{-- Navbar Content --}}
