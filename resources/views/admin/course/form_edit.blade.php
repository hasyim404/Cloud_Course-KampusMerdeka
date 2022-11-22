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
      <form class="row g-3" method="POST" action="{{ route('course.update',$data->id) }}" enctype="multipart/form-data">
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

          <div class="row g-3">
            <div class="col-md-4">
                <div class="form-floating">
                    <input type="text" class="form-control" value="{{ $data->nama_course }}" id="floatingName" name="nama_course" placeholder="Nama Course">
                    <label for="floatingName">Nama Course</label>
                </div>
            </div>   
          </div> 

          <div class="row g-3">
            <div class="col-md-4">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Deskripsi" name="deskripsi_course" id="floatingTextarea" style="height: 100px;">{{ $data->deskripsi_course }}</textarea>
                    <label for="floatingTextarea">Deskripsi Course</label>
                </div>
            </div>   
          </div> 

          <div class="row g-3">
            <div class="col-md-4">
                <div class="form-floating">
                    <input type="file" class="form-control" id="floatingName" name="foto" placeholder="Banner Foto">
                    <label for="floatingName">Banner Foto</label>
                    <div class="row">
                      <div class="col-lg text-center">
                        @if(!empty($data->foto)) 
                          <h5 class="pt-2">Current Banner Image:</h5>
                          <img src="{{ url('img/banner_course')}}/{{$data->foto}}" height="120px" alt="Profile"  class="img-thumbnail p-1 ">
                          <br/>{{$data->foto}}
                        @endif    
                      </div>
                    </div>
                </div>
            </div>   
          </div> 

          <div class="row g-3">
            <div class="col-md-4">
                <div class="form-floating">
                    <input type="text" class="form-control" value="{{ $data->jdl_modul }}" id="floatingName" name="jdl_modul" placeholder="Judul Modul">
                    <label for="floatingName">Judul Modul</label>
                </div>
            </div>   
          </div> 

          <div class="row g-3">
            <div class="col-md-4">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Deskripsi" name="deskripsi_modul" id="floatingTextarea" style="height: 100px;">{{ $data->deskripsi_modul }}</textarea>
                    <label for="floatingTextarea">Deskripsi Modul</label>
                </div>
            </div>   
          </div> 

          <div class="row g-3">
            <div class="col-md-4">
                <div class="form-floating">
                    <input type="file" class="form-control" id="floatingName" name="file_materi" placeholder="File Materi">
                    <label for="floatingName">File Materi</label>
                    <div class="row">
                      <div class="col-lg text-center">
                        @if(!empty($data->file_materi)) 
                          <h5 class="pt-2">Current File Materi:</h5>
                          
                          <br/>{{$data->file_materi}}
                        @endif    
                      </div>
                    </div>
                </div>
            </div>   
          </div> 

          <div class="row g-3">
            <div class="col-md-4">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Deskripsi" name="video" id="floatingTextarea" style="height: 100px;">{{ $data->video }}</textarea>
                    <label for="floatingTextarea">Video</label>
                </div>
            </div>   
          </div> 

          <div class="text-center p-3">
            <button type="submit" class="btn btn-primary">Edit</button>
            <a class="btn btn-secondary btn-md" href=" {{ url('admin/course') }}">
              Back
            </a>  
          </div>
      </form><!-- End floating Labels Form -->

    </div>
  </div>
@endsection

