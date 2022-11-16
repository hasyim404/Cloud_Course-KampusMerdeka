@extends('admin.index')
@section('title', 'Kelola Users')
@section('info', 'Kelola Users')
@section('data1', 'Kelola Users')
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
        
                            <li class="text-center px-3"><a href="{{ route('users.create') }}" class="btn btn-success btn-sm">Tambah Data</a></li>
                        </ul>
                    </div>
                    
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>    
                        @endif
                        <table class="table table-borderless align-middle datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama User</th>
                                    {{-- <th scope="col">Username</th> --}}
                                    <th scope="col">Email</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php $no=1; @endphp
                                @foreach ( $users as $data )
                                <tr>
                                    <th scope="row">{{ $no++ }}.</th>
                                    <td>{{ $data->f_name }} {{ $data->l_name }}</td>
                                    {{-- <td>{{ $data->username }}</td> --}}
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->status }}</td>
                                    <td>{{ $data->role }}</td>
                                    <td>
                                        @empty($data->foto)
                                            <img src="{{ url('img/users_profile/!profile-default.jpg') }}" height="50px"  alt="Profile" class="rounded-circle">
                                        @else
                                            <img src="{{ url('img/users_profile')}}/{{$data->foto}}" height="50px" alt="Profile" class="rounded-circle">
                                        @endempty
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('users.destroy',$data->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('users.show',$data->id) }}" class="btn btn-primary btn-sm">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="{{ route('users.edit',$data->id) }}" class="btn btn-warning btn-sm">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <button type="submit" class="btn btn-danger btn-sm" title="Hapus Users" 
                                                    onclick="return confirm('Anda Yakin ingin menghapus data user dengan username {{ $data->username }}?')">
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