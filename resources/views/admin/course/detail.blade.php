@extends('admin.index')
@section('title', 'Kelola Course')
@section('info', 'Kelola Course')
@section('data1', 'Kelola Course')
@section('data2', 'Detail Course')
@section('content')
<section class="section profile">
  <div class="row">

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>    
    @endif

    {{-- <div class="col-xl-4">

      <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
          @empty($data->foto)
              <img src="{{ url('img/users_profile/!profile-default.jpg') }}" height="120px" alt="Profile" class="rounded-circle">
          @else
              <img src="{{ url('img/users_profile')}}/{{$data->foto}}" height="120px" alt="Profile" class="rounded-circle">
          @endempty
          <h2>{{ $data->f_name }} {{ $data->l_name }}</h2>
          <h3>{{ $data->email }}</h3>
          <div class="social-links mt-2">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>

    </div> --}}

    <div class="col-xl-12">

      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
            </li>

          </ul>
          <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">
      
              <h5 class="card-title">Course Details</h5>

              <div class="row pt-1">
                <div class="col-lg-3 col-md-4 label ">Banner Picture</div>
                <div class="col-lg-9 col-md-8 text-center mt-2">
                  @empty($data->foto)
                      <img src="{{ url('img/banner_course/!banner-default.jpg') }}" height="200px" alt="Profile" >
                  @else
                      <img src="{{ url('img/banner_course')}}/{{$data->foto}}" height="200px" alt="Profile" >
                  @endempty 
                  <p class=>{{ $data->foto }}</p> 
                </div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Nama Course</div>
                <div class="col-lg-9 col-md-8">{{ $data->nama_course }}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Deskripsi Course</div>
                <div class="col-lg-9 col-md-8">{{ $data->deskripsi_course }}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Judul Modul</div>
                <div class="col-lg-9 col-md-8">{{ $data->jdl_modul }}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Deskripsi Modul</div>
                <div class="col-lg-9 col-md-8">{{ $data->deskripsi_modul }}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">File Materi</div>
                <div class="col-lg-9 col-md-8">{{ $data->file_materi }}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Video</div>
                <div class="col-lg-9 col-md-8">{{ $data->video }}</div>
              </div>

            </div>

              <div class="text-end">
                  <a class="btn btn-primary btn-md" href=" {{ url('admin/course') }}">
                    <i class="bi bi-caret-left-square"></i> Back
                  </a>  
              </div>
            
          </div><!-- End Bordered Tabs -->

        </div>
      </div>
    </div>
  </div>
</section>
@endsection