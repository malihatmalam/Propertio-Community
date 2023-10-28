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
                 <h2><i class="fa fa-th"></i> Management Artikel - Tambah Artikel</h2>
             </div><!-- end col -->
             <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">Home</a></li>
                     <li class="breadcrumb-item"><a href="#">Artikel</a></li>
                     <li class="breadcrumb-item active">Tambah Artikel</li>
                 </ol>
             </div><!-- end col -->                    
         </div><!-- end row -->
     </div><!-- end container -->
</div><!-- end page-title -->
<section class="section">
     <div class="container">
          @if(count($errors)>0)
               @foreach($errors->all() as $error)
               <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                              <div class="alert alert-warning" role="alert">
                                   Peringatan ! {{ $error }}
                                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                   </button>
                              </div>
                    </div>
               </div> 		
               @endforeach
          @endif
          @if(Session::has('success'))
          <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                         <div class="alert alert-success" role="alert">
                              Berhasil ! {{ Session('success') }}
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
                         <a href="{{ route('post.index') }}" class="btn btn-danger btn-sm btn-hover-danger">Kembali</a>
                         <br><br>
                   </div>
               </div>
         </div>
         <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="page-wrapper">
                    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                         @csrf
                         <div class="form-group">
                             <label>Judul</label>
                             <input type="text" class="form-control" name="title">
                         </div>
                         <div class="form-group">
                             <label>Kategori</label>
                             <select class="form-control" name="category_id">
                                  <option value="" holder>Pilih Kategori</option>
                                  @foreach($category as $result)
                                  <option value="{{ $result->id }}">{{  $result->name }}</option>
                                  @endforeach
                             </select>
                         </div>
                         <div class="form-group">
                             <label>Pilih Tags</label>
                             <select class="form-control select2" multiple="multiple" name="tags[]">
                                 @foreach($tags as $tag)
                                 <option value="{{ $tag->id }}">{{ $tag->name }}</option> 
                                 @endforeach
                             </select>
                         </div>
                         <div class="form-group">
                             <label>Konten</label>
                             <textarea class="form-control" name="content" id="content"></textarea>
                         </div>
                         <div class="form-group">
                              <label>Durasi Membaca</label>
                              <select class="form-control" name="read_duration">
                                   <option value="" holder>Pilih Durasi</option>
                                   <option value="3" holder>3 menit</option>
                                   <option value="5" holder>5 menit</option>
                                   <option value="7" holder>7 menit</option>
                                   <option value="10" holder>10 menit</option>
                                   <option value="15" holder>15 menit</option>
                                   <option value="20" holder>20 menit</option>
                              </select>
                         </div>
                         <div class="form-group">
                             <label>Thumbnail</label>
                             <input type="file" name="image_cover" class="form-control">
                         </div>
                       
                         <div class="form-group">
                             <button class="btn btn-primary btn-block">Simpan Artikel</button>
                         </div>
                       
                    </form>
                 </div><!-- end page-wrapper -->
             </div><!-- end col -->
         </div><!-- end row -->
     </div><!-- end container -->
 </section>


@endsection
{{-- END Content --}}

{{-- Custome JS --}}
@section('custom-js')
<script>
     $(document).ready(function() {
         $('.select2').select2();
     });
 </script>
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script >
  CKEDITOR.replace( 'content' );

</script>
@endsection
{{-- END Custome JS --}}