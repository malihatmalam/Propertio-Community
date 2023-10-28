{{-- Layout --}}
@extends('layout.public.master')

@section('custom-css')
@endsection
{{-- END Layout --}}

{{-- Content --}}
@section('content')
<div class="page-title">
     <div class="container">
         <div class="row">
             <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                 <h2><i class="fa fa-th"></i> Management Artikel</h2>
             </div><!-- end col -->
             <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">Home</a></li>
                     <li class="breadcrumb-item active">Artikel</li>
                 </ol>
             </div><!-- end col -->                    
         </div><!-- end row -->
     </div><!-- end container -->
</div><!-- end page-title -->
<section class="section">
     <div class="container">
          @if(Session::has('success'))
          <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                         <div class="alert alert-success" role="alert">
                              <strong>Berhasil ! </strong>{{ Session('success') }}
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                              </button>
                         </div>
               </div>
          </div>
          @endif
         <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="page-wrapper">
                         <a href="{{ route('post.create') }}" class="btn btn-info btn-sm">Tambah Artikel</a>
                         <br><br>
                   </div>
               </div>
         </div>
         <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="page-wrapper">
                    <table class="table table-striped table-hover table-sm table-bordered">
                         <thead>
                              <tr>
                                   <th>No</th>
                                   <th>Nama Post</th>
                                   <th>Kategori</th>
                                   <th>Daftar Tags</th>
                                   <th>Creator</th>
                                   <th>Thumbnail</th>
                                   <th>Action</th>
                              </tr>
                         </thead>
                         <tbody>
                              @foreach ($post as $result => $hasil)
                              <tr>
                                   <td>{{ $result + $post->firstitem() }}</td>
                                   <td>{{ $hasil->title }}</td>
                                   <td>{{ $hasil->category->name }}</td>
                                   <td>
                                        @foreach($hasil->tag as $tag)
                                        <ul>
                                             <h6><span class="badge badge-info">{{ $tag->name }}</span></h6>
                                        </ul>
                                        @endforeach		
                                   </td>
                                   <td>{{$hasil->users->userData->fullname }}</td>
                                   <td><img src="{{ asset( $hasil->image_cover ) }}" class="img-fluid" style="width:100px"></td>
                                   <td>
                                        <form action="{{ route('post.destroy', $hasil->id )}}" method="POST">
                                             @csrf
                                             @method('delete')
                                        <a href="{{ route('post.edit', $hasil->id ) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                   </td>
                              </tr>
                              @endforeach
               
                         </tbody>
                    </table>
                    <div class="row">
                         <div class="col-md-12">
                             {{ $post->links('vendor.pagination.default') }}
                         </div>
                     </div>
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