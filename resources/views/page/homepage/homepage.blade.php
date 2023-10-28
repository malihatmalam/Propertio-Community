{{-- Layout --}}
@extends('layout.public.master')

@section('custom-css')
@endsection
{{-- END Layout --}}

{{-- Content --}}
@section('content')
    {{-- Top Content --}}
    {{-- <section class="section first-section">
        <div class="container-fluid">
            <div class="masonry-blog clearfix">
                <div class="left-side">
                    <div class="masonry-box post-media">
                        <img src="upload/blog_masonry_01.jpg" alt="" class="img-fluid">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <span class="bg-aqua"><a href="blog-category-01.html"
                                            title="">Lifestyle</a></span>
                                    <h4><a href="single.html" title="">The golden rules you need to know for a
                                            positive life</a></h4>
                                    <small><a href="single.html" title="">24 July, 2017</a></small>
                                    <small><a href="blog-author.html" title="">by Amanda</a></small>
                                </div><!-- end meta -->
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->
                </div><!-- end left-side -->

                <div class="center-side">
                    <div class="masonry-box post-media">
                        <img src="upload/blog_masonry_02.jpg" alt="" class="img-fluid">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <span class="bg-green"><a href="blog-category-01.html" title="">Travel</a></span>
                                    <h4><a href="single.html" title="">5 places you should see</a></h4>
                                    <small><a href="single.html" title="">24 July, 2017</a></small>
                                    <small><a href="blog-author.html" title="">by Amanda</a></small>
                                </div><!-- end meta -->
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->

                    <div class="masonry-box small-box post-media">
                        <img src="upload/blog_masonry_03.jpg" alt="" class="img-fluid">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <span class="bg-green"><a href="blog-category-01.html" title="">Travel</a></span>
                                    <h4><a href="single.html" title="">Separate your place with exotic hotels</a></h4>
                                </div><!-- end meta -->
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->

                    <div class="masonry-box small-box post-media">
                        <img src="upload/blog_masonry_04.jpg" alt="" class="img-fluid">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <span class="bg-green"><a href="blog-category-01.html" title="">Travel</a></span>
                                    <h4><a href="single.html" title="">What you need to know for child health</a></h4>
                                </div><!-- end meta -->
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->
                </div><!-- end left-side -->

                <div class="right-side hidden-md-down">
                    <div class="masonry-box post-media">
                        <img src="upload/blog_masonry_05.jpg" alt="" class="img-fluid">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <span class="bg-aqua"><a href="blog-category-01.html"
                                            title="">Lifestyle</a></span>
                                    <h4><a href="single.html" title="">The rules you need to know for a happy
                                            union</a></h4>
                                    <small><a href="single.html" title="">03 July, 2017</a></small>
                                    <small><a href="blog-author.html" title="">by Jessica</a></small>
                                </div><!-- end meta -->
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->
                </div><!-- end right-side -->
            </div><!-- end masonry -->
        </div>
    </section> --}}
    {{-- End Top Content --}}

    {{-- Main Content --}}
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h3 class="color-aqua"><a href="blog-category-01.html" title="">Properti</a></h3>
                    </div><!-- end title -->

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            @foreach ($data_properti as $post)
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="{{ route('blog.isi', $post->slug ) }}" title="">
                                        <img src="{{ asset( $post->image_cover ) }}" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta big-meta">
                                    <h4><a href="{{ route('blog.isi', $post->slug ) }}" title="">{{ $post->title }}</a></h4>
                                    <p>{!! substr($post->content, 0, 197) . '...' !!}</p>
                                    <small><a href="" title="">{{ $post->category->name }}</a></small>
                                    <small><a href="" title="">{{ $post->date }}</a></small>
                                    <small><a href="" title="">oleh {{ $post->users->userData->fullname }}</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                            
                            <hr class="invis">
                            @endforeach

                        </div><!-- end col -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            {{-- <hr class="invis"> --}}
                            <h5>
                                <a href="{{ route('blog.category.list', $c_properti->name ) }}"> <strong>Lihat lebih banyak</strong></a>
                            </h5>
                        </div>
                    </div><!-- end row -->
                </div><!-- end col -->

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h3 class="color-pink"><a href="blog-category-01.html" title="">Arsitektur</a></h3>
                    </div><!-- end title -->
                    <div class="row">
                        @foreach ($data_arsitektur as $post)
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="{{ route('blog.isi', $post->slug ) }}" title="">
                                        <img src="{{ asset( $post->image_cover ) }}" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta big-meta">
                                    <h4><a href="{{ route('blog.isi', $post->slug ) }}" title="">{{ $post->title }}</a></h4>
                                    {{-- <p>{!! substr($post->content, 0, 197) . '...' !!}</p> --}}
                                    <small><a href="" title="">{{ $post->category->name }}</a></small>
                                    <small><a href="" title="">{{ $post->date }}</a></small>
                                    {{-- <small><a href="" title="">oleh {{ $post->users->userData->fullname }}</a></small> --}}
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                            
                            <hr class="invis">
                        </div><!-- end col -->
                        @endforeach

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            {{-- <hr class="invis"> --}}
                            <h5>
                                <a href="{{ route('blog.category.list', $c_arsitektur->name ) }}"> <strong>Lihat lebih banyak</strong></a>
                            </h5>
                        </div>
                    </div><!-- end row -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="invis1">

            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-spot clearfix">
                        <div class="banner-img">
                            <img src="upload/banner_01.jpg" alt="" class="img-fluid">
                        </div><!-- end banner-img -->
                    </div><!-- end banner -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="invis1">

            <div class="row">
                <div class="col-lg-9">
                    <div class="blog-list clearfix">
                        <div class="section-title">
                            <h3 class="color-green"><a href="blog-category-01.html" title="">Keuangan</a></h3>
                        </div><!-- end title -->

                        @foreach ($data_keuangan as $post)
                        <div class="blog-box row">
                            <div class="col-md-4">
                                <div class="post-media">
                                    <a href="{{ route('blog.isi', $post->slug ) }}" title="">
                                        <img src="{{ asset( $post->image_cover ) }}" alt="" class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="blog-meta big-meta col-md-8">
                                <h4><a href="{{ route('blog.isi', $post->slug ) }}" title="">{{ $post->title }}</a></h4>
                                <p>{!! substr($post->content, 0, 197) . '...' !!}</p>
                                <small><a href="" title="">{{ $post->category->name }}</a></small>
                                <small><a href="" title="">{{ $post->date }}</a></small>
                                <small><a href="" title="">oleh {{ $post->users->userData->fullname }}</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">
                        @endforeach

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <hr class="invis">
                            <h5>
                                <a href="{{ route('blog.category.list', $c_keuangan->name ) }}"> <strong>Lihat lebih banyak</strong></a>
                            </h5>
                        </div>
                    </div><!-- end blog-list -->

                    <hr class="invis">

                    <div class="blog-list clearfix">
                        <div class="section-title">
                            <h3 class="color-red"><a href="blog-category-01.html" title="">Lifestyle</a></h3>
                        </div><!-- end title -->

                        @foreach ($data_lifestyle as $post)
                            
                        <div class="blog-box row">
                            <div class="col-md-4">
                                <div class="post-media">
                                    <a href="{{ route('blog.isi', $post->slug ) }}" title="">
                                        <img src="{{ asset( $post->image_cover ) }}" alt="" class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="blog-meta big-meta col-md-8">
                                <h4><a href="{{ route('blog.isi', $post->slug ) }}" title="">{{ $post->title }}</a></h4>
                                <p>{!! substr($post->content, 0, 197) . '...' !!}</p>
                                <small><a href="" title="">{{ $post->category->name }}</a></small>
                                <small><a href="" title="">{{ $post->date }}</a></small>
                                <small><a href="" title="">oleh {{ $post->users->userData->fullname }}</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">
                        @endforeach

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            {{-- <hr class="invis"> --}}
                            <h5>
                                <a href="{{ route('blog.category.list', $c_lifestyle->name ) }}"> <strong>Lihat lebih banyak</strong></a>
                            </h5>
                        </div>
                    </div><!-- end blog-list -->
                </div><!-- end col -->

                <div class="col-lg-3">
                    <div class="section-title">
                        <h3 class="color-yellow"><a href="blog-category-01.html" title="">Ide Kreatif</a></h3>
                    </div><!-- end title -->

                    @foreach ($data_ide as $post)
                        
                    <div class="blog-box">
                        <div class="post-media">
                            <a href="{{ route('blog.isi', $post->slug ) }}" title="">
                                <img src="{{ asset( $post->image_cover ) }}" alt="" class="img-fluid">
                                <div class="hovereffect">
                                    <span class="hovereffect"></span>
                                </div><!-- end hover -->
                            </a>
                        </div><!-- end media -->
                        <div class="blog-meta">
                            <h4><a href="{{ route('blog.isi', $post->slug ) }}" title="">{{ $post->title }}</a></h4>
                            <small><a href="" title="">{{ $post->category->name }}</a></small>
                            <small><a href="" title="">{{ $post->date }}</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">
                    @endforeach

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        {{-- <hr class="invis"> --}}
                        <h5>
                            <a href="{{ route('blog.category.list', $c_ide->name ) }}"> <strong>Lihat lebih banyak</strong></a>
                        </h5>
                    </div>

                    <hr class="invis">

                    <div class="section-title">
                        <h3 class="color-grey"><a href="blog-category-01.html" title="">Budaya</a></h3>
                    </div><!-- end title -->

                    @foreach ($data_budaya as $post)
                        
                    <div class="blog-box">
                        <div class="post-media">
                            <a href="{{ route('blog.isi', $post->slug ) }}" title="">
                                <img src="{{ asset( $post->image_cover ) }}" alt="" class="img-fluid">
                                <div class="hovereffect">
                                    <span></span>
                                </div><!-- end hover -->
                            </a>
                        </div><!-- end media -->
                        <div class="blog-meta">
                            <h4><a href="{{ route('blog.isi', $post->slug ) }}" title="">{{ $post->title }}</a></h4>
                            <small><a href="" title="">{{ $post->category->name }}</a></small>
                            <small><a href="" title="">{{ $post->date }}</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">
                    @endforeach

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        {{-- <hr class="invis"> --}}
                        <h5>
                            <a href="{{ route('blog.category.list', $c_budaya->name ) }}"> <strong>Lihat lebih banyak</strong></a>
                        </h5>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="invis1">

            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-spot clearfix">
                        <div class="banner-img">
                            <img src="upload/banner_02.jpg" alt="" class="img-fluid">
                        </div><!-- end banner-img -->
                    </div><!-- end banner -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    {{-- End Main Content --}}
@endsection
{{-- END Content --}}


{{-- Custome JS --}}
@section('custom-js')
@endsection
{{-- END Custome JS --}}
