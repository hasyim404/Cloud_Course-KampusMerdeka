@extends('admin.index')
@section('title', 'Form Kelola User')
@section('info', 'Form Tambah User')
@section('data1', 'Kelola User')
@section('data2', 'Form Tambah User')
@section('content')
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Tambah User</h5>

      <!-- Floating Labels Form -->
      <form class="row g-3" method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
        @csrf

        @if ($errors->any())
          <div class="alert alert-danger">
            {{-- <strong>Whoops!</strong> Ada Salah saat input data --}}
            <strong>Error!</strong>
            {{-- <br><br> --}}
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>                        
                @endforeach
            </ul>
          </div>    
        @endif

        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingName" name="f_name" placeholder="First Name">
            <label for="floatingName">First Name</label>
          </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingName" name="l_name" placeholder="Last Name">
                <label for="floatingName">Last Name</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingName" name="email" placeholder="Email">
                <label for="floatingName">Email</label>
            </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingName" name="no_telp" placeholder="No. Telp">
            <label for="floatingName">No. Telp</label>
          </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingName" name="username" placeholder="Username">
                <label for="floatingName">Username</label>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingName" name="password" placeholder="Password">
                <label for="floatingName">Password</label>
            </div>
        </div>
        <div class="col-md-3">
          <label for="validationDefault04" class="form-label">Status</label>
          <select class="form-select" id="validationDefault04" name="status" required>
            <option selected disabled value="">-- Pilih Status --</option>
            @php
            $no = 1;  
            @endphp

            @foreach ($ar_status as $status)

            <option value="{{ $status }}"> {{ $no++ }} - {{ $status }}</option> 

            @endforeach
          </select>
        </div>
        <div class="row g-3">
            <div class="col-md-4">
                <div class="form-floating">
                    <input type="file" class="form-control" id="floatingName" name="foto" placeholder="Foto">
                    <label for="floatingName">Foto</label>
                </div>
            </div>    
        </div>
        
        <div class="col-md-3">
            <label for="validationDefault04" class="form-label">Role</label>
            <select class="form-select" id="validationDefault04" name="role" required>
              <option selected disabled value="">-- Pilih Role --</option>
  
              @foreach ($ar_role as $role)
  
              <option value="{{ $role }}"> {{ $role }}</option> 
  
              @endforeach
            </select>
        </div>
        <div class="text-center p-3">
          <button type="submit" class="btn btn-primary">Tambah</button>
          <a class="btn btn-secondary btn-md" href=" {{ url('admin/users') }}">
            Back
          </a>  
        </div>
      </form><!-- End floating Labels Form -->

    </div>
  </div>
@endsection

