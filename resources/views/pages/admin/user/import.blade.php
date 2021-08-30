@extends('layouts.admin')
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Import Akun Mahasiswa</h3>
                        <p class="text-subtitle text-muted">File uploader that makes user easier to upload their
                            files</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Akun Mahasiswa</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Import</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="row">

                    <div class="col-12 col-md-6">

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Upload File</h5>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p class="card-text">Pilih file dengan format excel dan susunan yang benar!
                                    </p>
                                    <!-- Basic file uploader -->
                                    <form action=""></form>
                                    <input type="file" class="basic-filepond">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>


    </div>
@endsection
