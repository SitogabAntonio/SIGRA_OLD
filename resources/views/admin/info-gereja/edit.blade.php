@extends('layouts.app')
@section('styles')
@endsection
@section('content')

<div class="container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Edit Informasi Gereja</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/' . $nama_gereja . '/info') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Edit Informasi Gereja
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Edit Informasi Gereja</h4>
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

                <form action="{{ url('/' . $gereja->nama_gereja . '/info/update/' . $gereja->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Nama Gereja</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="nama_gereja" value="{{ $gereja->nama_gereja }}" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Kutipan</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="kutipan" value="{{ $gereja->kutipan }}" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Ibadah Online</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="online" value="{{ $gereja->online }}" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Sesi Ibadah</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="sesi" value="{{ $gereja->sesi }}" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Contact Person</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="kontak" value="{{ $gereja->kontak }}" />
                        </div>
                    </div>
                    <hr>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
@endsection
