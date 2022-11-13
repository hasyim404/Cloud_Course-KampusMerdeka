@extends('admin.index')
@section('title', 'Kelola Course')
@section('info', 'Kelola Course')
@section('data1', 'Kelola Course')
@section('data2', 'Detail Course')
@section('content')
<div class="tab-content pt-2">

    <div class="tab-pane fade show active profile-overview" id="profile-overview">

      <h5 class="card-title">Course Detail</h5>

      <div class="row">
        <div class="col-lg-3 col-md-4 label ">Nama Course:</div>
        <div class="col-lg-9 col-md-8">{{ $data->nama }}</div>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4 label">Deskripsi:</div>
        <div class="col-lg-9 col-md-8">{{ $data->deskripsi }}</div>
      </div>

    </div>

  </div><!-- End Bordered Tabs -->
@endsection