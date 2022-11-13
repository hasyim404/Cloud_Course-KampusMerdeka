@extends('admin.index')
@section('title', 'Kelola Feedback')
@section('info', 'Kelola Feedback')
@section('data1', 'Kelola Feedback')
@section('data2', 'Detail Feedback')
@section('content')
<div class="tab-content pt-2">

    <div class="tab-pane fade show active profile-overview" id="profile-overview">

      <h5 class="card-title">Feedback Detail</h5>

      <div class="row">
        <div class="col-lg-3 col-md-4 label ">Nama User:</div>
        <div class="col-lg-9 col-md-8">{{ $data->nama }}</div>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4 label">Email:</div>
        <div class="col-lg-9 col-md-8">{{ $data->email }}</div>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4 label">Course:</div>
        <div class="col-lg-9 col-md-8">{{ $data->course->nama }}</div>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4 label">Isi Feedback:</div>
        <div class="col-lg-9 col-md-8">{{ $data->isi_feedback }}</div>
      </div>

    </div>

  </div><!-- End Bordered Tabs -->
@endsection