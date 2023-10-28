{{-- Layout --}}
@extends('layout.public.master')

@section('custom-css')
@endsection
{{-- END Layout --}}

{{-- Content --}}
@section('content')

<div class="page-title wb">
     <div class="container">
         <div class="row">
             <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                 <h2><i class="fa fa-th bg-green"></i> {{ $category->name }}</h2>
             </div><!-- end col -->
             <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">Home</a></li>
                     <li class="breadcrumb-item active">{{ $category->name }}</li>
                 </ol>
             </div><!-- end col -->                    
         </div><!-- end row -->
     </div><!-- end container -->
</div><!-- end page-title -->

<section class="section wb">
     <div class="container">
         <div class="row">
             <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                 <div class="page-wrapper">
                     <div class="blog-list clearfix">
                        @foreach ($data as $post)
                        <div class="blog-box row">
                            <div class="col-md-4">
                                <div class="post-media">
                                    <a href="single.html" title="">
                                        <img src="{{ asset( $post->image_cover ) }}" alt="" class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="blog-meta big-meta col-md-8">
                                <h4><a href="{{ route('blog.isi', $post->slug ) }}" title="">{{ $post->title }}</a></h4>
                                <p>{!! substr($post->content, 0, 200) . '...' !!}</p>
                                <small><a href="" title="">{{ $post->category->name }}</a></small>
                                <small><a href="" title="">{{ $post->date }}</a></small>
                                <small><a href="" title="">oleh {{ $post->users->userData->fullname }}</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">
                            
                        @endforeach

                        <div class="row">
                            <div class="col-md-12">
                                {{ $data->links('vendor.pagination.default') }}
                            </div>
                        </div>
                     </div><!-- end blog-list -->
                 </div><!-- end page-wrapper -->
             </div><!-- end col -->
         </div><!-- end row -->
     </div><!-- end container -->
</section>

@endsection
{{-- END Content --}}

{{-- Custome JS --}}
@section('custom-js')
@endsection
{{-- END Custome JS --}}