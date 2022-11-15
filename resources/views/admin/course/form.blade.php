@extends('admin.index')
@section('title', 'Form Course')
@section('info', 'Form Course')
@section('data1', 'Kelola Course')
@section('data2', 'Form Course')
@section('content')
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Tambah Course</h5>

      <!-- Floating Labels Form -->
      <form class="row g-3" method="POST" action="{{ route('course.store') }}">
        @csrf
        <div class="col-md-12">
          @if ($errors->any())
          <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada Salah saat input data
            <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>                        
                @endforeach
            </ul>
          </div>    
          @endif
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingName" name="nama" placeholder="Nama Course">
            <label for="floatingName">Nama Course</label>
          </div>
        </div>
        <div class="col-12">
          <div class="form-floating">
            <textarea class="form-control" placeholder="Deskripsi" name="deskripsi" id="floatingTextarea" style="height: 100px;"></textarea>
            <label for="floatingTextarea">Deskripsi</label>
          </div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form><!-- End floating Labels Form -->

    </div>
  </div>
@endsection

