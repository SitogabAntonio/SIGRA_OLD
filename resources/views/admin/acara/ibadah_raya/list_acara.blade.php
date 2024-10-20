@extends('layouts.app')
@section('styles')
@endsection
@section('content')
@if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
<!-- Simple Datatable start -->
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">List Ibadah Raya</h4>
        <a href="{{ url('/' . $nama_gereja . '/admin/acara/ibadah_raya/tambah_acara') }}"  class="btn btn-primary pull-right"
            style="float: right; margin-top: -5px; margin-bottom:8px;"> Buat Baru</a>
    </div>
    <!-- Bordered table start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix mb-20">
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Tema</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($acara as $index => $data)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $data->judul }}</td>
                        <td>{{ $data->tema }}</td>
                        <td>{{ $data->tanggal}}</td>
                        <td>{!! $data->detail_kegiatan !!}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="collapse collapse-box" id="border-table">
            <div class="code-box">
                <div class="clearfix">
                    <a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"
                        data-clipboard-target="#border-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
                    <a href="#border-table" class="btn btn-primary btn-sm pull-right" rel="content-y"
                        data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bordered table End -->
</div>
<!-- Simple Datatable End -->
@endsection
@section('script')
@endsection
