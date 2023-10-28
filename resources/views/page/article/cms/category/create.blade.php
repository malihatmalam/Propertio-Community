{{-- Layout --}}
@extends('layout.cms.master')

@section('custom-css')
@endsection
{{-- END Layout --}}

{{-- Content --}}
@section('content')
    <!-- Page-header start -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Tambah Kategori Artikel</h4>
                        <span>Management list kategori artikel - Tambah Kategori</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Artikel</a>
                        </li>
                        <li class="breadcrumb-item"><a href="">Kategori</a>
                        </li>
                        <li class="breadcrumb-item"><a href="">Tambah Kategori Artikel</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->

    <!-- Page-body start -->
    <div class="page-body">
        <!-- Input group card start -->
        <div class="card">
            <div class="card-block">
                <!-- Basic group add-ons start -->
                <div class="m-b-20">
                    <h4 class="sub-title">Tambah Kategori Artikel</h4>
                    <div class="row">
                        
                         
                        @if(Session::has('success'))
                        <div class="col-sm-12 col-md-12 col-xl-12">
                            <div class="alert alert-success background-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="icofont icofont-close-line-circled text-white"></i>
                                </button>
                                <strong>Berhasil !</strong> {{ Session('success') }}
                            </div>
                        </div>
                        @endif

                        @if(count($errors)>0)
                         @foreach($errors->all() as $error)
                              <div class="col-sm-12 col-md-12 col-xl-12">
                                   <div class="alert alert-warning background-warning">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                             <i class="icofont icofont-close-line-circled text-black"></i>
                                        </button>
                                        <strong>Peringatan !</strong> {{ $error }}
                                   </div>
                              </div>
                         @endforeach
                        @endif

                        <div class="col-sm-12 col-md-12 col-xl-12">
                              <form action="{{ route('category.store') }}" method="POST">
                                   @csrf
                                   <div class="form-group">
                                   <label>Kategori</label>
                                   <input type="text" class="form-control" name="name">
                                   </div>
                              
                                   <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                            <a href="{{ route('category.index') }}" class="btn btn-danger btn-block">Kembali</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Tambah Kategori</button>
                                            </div>
                                        </div>
                                   </div>
                              </form>
                        </div>
                    </div>
                </div>
                <!-- Basic group add-ons end -->
            </div>
        </div>
        <!-- Input group card end -->
    </div>
    <!-- Page-body end -->
@endsection
{{-- END Content --}}


{{-- Custome JS --}}
@section('custom-js')
@endsection
{{-- END Custome JS --}}
