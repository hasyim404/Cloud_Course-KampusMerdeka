@extends('admin.index')
@section('title', 'Kelola Course')
@section('info', 'Kelola Course')
@section('data1', 'Kelola Course')
@section('content')
<div class="col-lg-12">
    <div class="row">

        <div class="col-xxl-12">
            <div class="card info-card sales-card">
                
                <div class="d-flex align-items-center mt-5">

                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                            <h6>Action</h6>
                            </li>
        
                            <li class="text-center px-3"><a href="{{ route('course.create') }}" class="btn btn-success btn-sm">Tambah Data</a></li>
                        </ul>
                    </div>
                    
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                                <p>{{ $message }}</p>
                        </div>    
                        @endif
                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Course</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php $no=1; @endphp
                                @foreach ( $course as $data )
                                <tr>
                                    <th scope="row">{{ $no++ }}.</th>
                                    <td>{{ $data->nama_course }}</td>
                                    <td>{{ $data->deskripsi_course }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('course.destroy',$data->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('course.show',$data->id) }}" class="btn btn-primary btn-sm">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="{{ route('course.edit',$data->id) }}" class="btn btn-warning btn-sm">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <button type="submit" class="btn btn-danger btn-sm" title="Hapus Course" 
                                                    onclick="return confirm('Anda Yakin ingin menghapus data course {{ $data->nama_course }}?')">
                                                    <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                    {{-- <td><span class="badge bg-success">Approved</span></td> --}}
                                </tr>    
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection