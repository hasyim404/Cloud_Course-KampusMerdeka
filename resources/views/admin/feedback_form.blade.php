@extends('admin.index')
@section('title', 'Form Feedback')
@section('info', 'Form Feedback')
@section('data1', 'Kelola Feedback')
@section('data2', 'Form Feedback')
@section('content')
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Tambah Feedback</h5>

      <!-- Floating Labels Form -->
      <form class="row g-3" method="POST" action="{{ route('feedback.store') }}">
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
            <input type="text" class="form-control" id="floatingName" name="nama" placeholder="Nama User">
            <label for="floatingName">Nama User</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingName" name="email" placeholder="Email">
            <label for="floatingName">Email</label>
          </div>
        </div>
        <div class="col-md-3">
          <label for="validationDefault04" class="form-label">Course</label>
          <select class="form-select" id="validationDefault04" name="course_id" required>
            <option selected disabled value="">-- Pilih Course --</option>
            @php
            $no = 1;  
            @endphp
              @foreach ($course as $data)

                <option value="{{ $data['id'] }}"> {{ $no++ }} - {{ $data['nama_course'] }}</option> 

              @endforeach

                  
          </select>
        </div>
        <div class="col-12">
          <div class="form-floating">
            <textarea class="form-control" placeholder="Feedback" name="isi_feedback" id="floatingTextarea" style="height: 100px;"></textarea>
            <label for="floatingTextarea">Feedback</label>
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

