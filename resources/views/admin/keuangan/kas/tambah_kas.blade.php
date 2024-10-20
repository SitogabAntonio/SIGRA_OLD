@extends('layouts.app')
@section('styles')
@endsection
@section('content')

<div class="mobile-menu-overlay"></div>

<div class="secondaryx-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Formulir</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Form
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Formulir Keuangan Bulanan
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Formulir Keuangan Bulanan</h4>
                        <br>
                    </div>
                </div>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{ url('/' . $nama_gereja . '/admin/keuangan/bulanan/tambah_bulanan') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Bulan</label>
                        <div class="col-sm-12 col-md-10">
                            <select class="form-control" name="bulan" required>
                                <option value="" disabled selected>Pilih Bulan</option>
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Tahun</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="tahun" placeholder="Masukkan Tahun" required maxlength="4" pattern="\d{4}" title="Tahun harus terdiri dari 4 digit angka"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-datetime-local-input"
                            class="col-sm-12 col-md-2 col-form-label">Jumlah</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="jumlah" placeholder="Masukkan Jumlah" type="number"
                                required />
                        </div>
                    </div>
                    <hr>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- Default Basic Forms End -->
        </div>
    </div>
</div>

@endsection
@section('script')
@endsection
