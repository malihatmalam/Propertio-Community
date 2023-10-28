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
                        <h4>Daftar Kategori Artikel</h4>
                        <span>Management list kategori artikel.</span>
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
                    <h4 class="sub-title">Tabel Kategori Artikel</h4>
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

                        <div class="col-sm-12 col-md-12 col-xl-12 align-self-end">
                            <a href="{{ route('category.create') }}" class="btn btn-primary btn-sm">Tambah Kategori</a>
                            <br><br>
                        </div>

                        <div class="col-sm-12 col-md-12 col-xl-12">
                            <table class="table table-striped table-hover table-sm table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($category as $result => $hasil)
                                    <tr>
                                        <td>{{ $result + $category->firstitem() }}</td>
                                        <td>{{ $hasil->name }}</td>
                                        <td>
                                            <form action="{{ route('category.destroy', $hasil->id )}}" method="POST">
                                                @csrf
                                                @method('delete')
                                            <a href="{{ route('category.edit', $hasil->id ) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                        
                                </tbody>
                            </table>
                            {{ $category->links('vendor.pagination.bootstrap-4') }}
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
