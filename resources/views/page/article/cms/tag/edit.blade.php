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
                        <h4>Edit Tag Artikel</h4>
                        <span>Management list Tag artikel - Edit Tag</span>
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
                        <li class="breadcrumb-item"><a href="">Tag</a>
                        </li>
                        <li class="breadcrumb-item"><a href="">Edit Tag Artikel</a>
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
                    <h4 class="sub-title">Edit Tag Artikel</h4>
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
                              <form action="{{ route('tag.update', $tags->id ) }}" method="POST">
                                   @csrf
                                   @method('PUT')
                                   <div class="form-group">
                                   <label>Tag</label>
                                   <input type="text" class="form-control" name="name" value="{{ $tags->name }}">
                                   </div>
                              
                                   <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                            <a href="{{ route('tag.index') }}" class="btn btn-danger btn-block">Kembali</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Perbaharui Tag</button>
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
