@extends('admin.index')
@section('title', 'Edit User')
@section('info', 'Form Edit User')
@section('data1', 'Kelola User')
@section('data2', 'Edit User')
@section('content')
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Edit User</h5>

      <!-- Floating Labels Form -->
      <form class="row g-3" method="POST" action="{{ route('users.update',$data->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

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
            <input type="text" class="form-control" value="{{ $data->f_name }}" id="floatingName" name="f_name" placeholder="">
            <label for="floatingName">First Name</label>
          </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" value="{{ $data->l_name }}" id="floatingName"  name="l_name" placeholder="">
                <label for="floatingName">Last Name</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="email" class="form-control" value="{{ $data->email }}" id="floatingName" name="email" placeholder="">
                <label for="floatingName">Email</label>
            </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" class="form-control" value="{{ $data->no_telp }}" id="floatingName" name="no_telp" placeholder="Email">
            <label for="floatingName">No. Telp</label>
          </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" value="{{ $data->username }}" id="floatingName" name="username" placeholder="">
                <label for="floatingName">Username</label>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" value="{{ $data->password }}" id="floatingName" name="password" placeholder="">
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
                @php $cek1 = ($status == $data->status) ? 'selected' : ''; @endphp
                <option value="{{ $status }}" {{ $cek1 }}> {{ $no++ }} - {{ $status }}</option> 

            @endforeach
          </select>
        </div>
        <div class="row g-3">
            <div class="col-md-4">
                <div class="form-floating">
                    <input type="file" class="form-control" id="floatingName" name="foto" placeholder="">
                    <label for="floatingName">Foto</label>
                    @if(!empty($data->foto)) 
                    <img src="{{ url('img/users_profile')}}/{{$data->foto}}" height="120px" alt="Profile"  class="img-thumbnail p-1 m-2">
                        {{-- <br/>{{$data->foto}} --}}
                    @endif
                </div>
            </div>    
        </div>
        
        <div class="col-md-3">
            <label for="validationDefault04" class="form-label">Role</label>
            <select class="form-select" id="validationDefault04" name="role" required>
              <option selected disabled value="">-- Pilih Role --</option>
  
              @foreach ($ar_role as $role)
                @php $cek2 = ($role == $data->role) ? 'selected' : ''; @endphp
                <option value="{{ $role }}" {{ $cek2 }}> {{ $role }}</option> 
              @endforeach
              
            </select>
        </div>
        <div class="text-center p-3">
          <button type="submit" class="btn btn-primary">Edit</button>
          <a class="btn btn-secondary btn-md" href=" {{ url('admin/users') }}">
            Back
          </a>  
        </div>
      </form><!-- End floating Labels Form -->

    </div>
  </div>
@endsection

