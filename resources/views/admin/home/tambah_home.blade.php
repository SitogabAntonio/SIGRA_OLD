@extends('layouts.app')
@section('styles')
@endsection
@section('content')

<div class="mobile-menu-overlay"></div>

<div class="container">
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
                                    Home
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
                        <h4 class="text-blue h4">Jadwal Ibadah </h4>
                        <br>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Pagi </h4>
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
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- Display validation errors -->
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Jam Mulai</label>
                        <div class="col-sm-12 col-md-10">
                            <input name="jam_mulai_pagi" class="form-control" type="time" value="{{ old('jam_mulai_pagi', Auth::user()->gereja->home->first()->jam_mulai_pagi) }}" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Jam Selesai</label>
                        <div class="col-sm-12 col-md-10">
                            <input name="jam_selesai_pagi" class="form-control" type="time" value="{{ old('jam_selesai_pagi', Auth::user()->gereja->home->first()->jam_selesai_pagi) }}" />
                        </div>
                    </div>
                    <hr>
                    <p class="text-blue h4">Siang</p>
                    <br>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Jam Mulai</label>
                        <div class="col-sm-12 col-md-10">
                            <input name="jam_mulai_siang" class="form-control" type="time" value="{{ old('jam_mulai_siang', Auth::user()->gereja->home->first()->jam_mulai_siang) }}" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Jam Selesai</label>
                        <div class="col-sm-12 col-md-10">
                            <input name="jam_selesai_siang" class="form-control" type="time" value="{{ old('jam_selesai_siang', Auth::user()->gereja->home->first()->jam_selesai_siang) }}" />
                        </div>
                    </div>
                    <hr>
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Ibadah Online</h4>
                            <br>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Channel YouTube</label>
                        <div class="col-sm-12 col-md-10">
                            <input name="youtube" class="form-control" type="text" value="{{ old('youtube', Auth::user()->gereja->home->first()->youtube) }}" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Link YouTube</label>
                        <div class="col-sm-12 col-md-10">
                            <input name="link" class="form-control" type="text" value="{{ old('link', Auth::user()->gereja->home->first()->link) }}" />
                            @error('link')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Informasi Lainnya</h4>
                            <br>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Kartu Keluarga</label>
                        <div class="col-sm-12 col-md-10">
                            <input name="kartu_keluarga" class="form-control" type="text" value="{{ old('kartu_keluarga', Auth::user()->gereja->home->first()->kartu_keluarga) }}" />
                            @error('kartu_keluarga')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Total Jemaat</label>
                        <div class="col-sm-12 col-md-10">
                            <input name="total_jemaat" class="form-control" type="text" value="{{ old('total_jemaat', Auth::user()->gereja->home->first()->total_jemaat) }}" />
                            @error('total_jemaat')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Total BPH</label>
                        <div class="col-sm-12 col-md-10">
                            <input name="total_bph" class="form-control" type="text" value="{{ old('total_bph', Auth::user()->gereja->home->first()->total_bph) }}" />
                            @error('total_bph')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Total Pendeta</label>
                        <div class="col-sm-12 col-md-10">
                            <input name="total_pendeta" class="form-control" type="text" value="{{ old('total_pendeta', Auth::user()->gereja->home->first()->total_pendeta) }}" />
                            @error('total_pendeta')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">No Telepon</label>
                        <div class="col-sm-12 col-md-10">
                            <input name="no_telp" class="form-control" type="text" value="{{ old('no_telp', Auth::user()->gereja->home->first()->no_telp) }}" />
                            @error('no_telp')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                        <div class="col-sm-12 col-md-10">
                            <input name="email" class="form-control" type="email" value="{{ old('email', Auth::user()->gereja->home->first()->email) }}" />
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
