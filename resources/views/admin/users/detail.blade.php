@extends('admin.index')
@section('title', 'Detail User')
@section('info', 'Detail User')
@section('data1', 'Kelola User')
@section('data2', 'Detail User')
@section('content')
<section class="section profile">
    <div class="row">

      @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>    
      @endif

      <div class="col-xl-4">

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

      </div>

      <div class="col-xl-8">

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
        
                <h5 class="card-title">Profile Details</h5>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Full Name</div>
                  <div class="col-lg-9 col-md-8">{{ $data->f_name }} {{ $data->l_name }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Email</div>
                  <div class="col-lg-9 col-md-8">{{ $data->email }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">No. Telp</div>
                  <div class="col-lg-9 col-md-8">{{ $data->no_telp }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Username</div>
                  <div class="col-lg-9 col-md-8">{{ $data->username }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Status</div>
                  <div class="col-lg-9 col-md-8">{{ $data->status }}</div>
                </div>

              </div>

                <div class="text-end">
                    <a class="btn btn-primary btn-md" href=" {{ url('admin/users') }}">
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