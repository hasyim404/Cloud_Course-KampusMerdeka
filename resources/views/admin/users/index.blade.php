@extends('admin.index')
@section('title', 'Kelola Users')
@section('info', 'Kelola Users')
@section('data1', 'Kelola Users')
@section('content')
<div class="col-lg-12">
    <div class="row">

        <div class="col-xxl-12">
            <div class="card info-card sales-card">
                <div class="d-flex flex-row p-3">
                    <li class="dropdown-header"><a href="{{ route('users.create') }}" class="btn btn-primary btn-sm">
                        <i class="bi bi-plus"></i> Tambah Data</a>
                    </li>    
                    <li class="dropdown-header text-center px-2"><a href="{{ url('admin/get-users-excel') }}" class="btn btn-success btn-sm">
                        <i class="bi bi-file-earmark-spreadsheet"></i> Export Excel</a>
                    </li>     
                </div>
                
                <div class="d-flex align-items-center mt-5">
                    
                    <div class="card-body">
                        <table class="table table-borderless align-middle datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama User</th>
                                    {{-- <th scope="col">Username</th> --}}
                                    <th scope="col">Email</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" class="text-center">Active</th>
                                    <th scope="col" class="text-center">Role</th>
                                    <th scope="col" class="text-center">Foto</th>
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
                                    <td>
                                        @livewire('user-is-active', ['model' => $data, 'field' => 'isactive'], key($data->id))
                                    </td>
                                    <td class="text-center">{{ $data->role }}</td>
                                    <td class="text-center">
                                        @empty($data->foto)
                                            <img src="{{ url('img/users_profile/!profile-default.jpg') }}" height="50px"  alt="Profile" class="rounded-circle">
                                        @else
                                            <img src="{{ url('img/users_profile')}}/{{$data->foto}}" height="50px" alt="Profile" class="rounded-circle">
                                        @endempty
                                    </td>
                                    <td>
                                        <form method="POST" id="formDelete">
                                            @csrf
                                            @method('DELETE')

                                            <a href="{{ route('users.show',$data->id) }}" class="btn btn-warning btn-sm">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            {{-- <a href="{{ route('users.edit',$data->id) }}" class="btn btn-warning btn-sm">
                                                <i class="bi bi-pencil-square"></i>
                                            </a> --}}
                                            <button data-action="{{ route('users.destroy',$data->id) }}"  type="submit" class="btn btn-danger btn-sm btnDelete" title="Hapus Users">
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
@section('sweetalert2')
<script type="text/javascript">

    $('body').on('click', '.btnDelete', function(e) {
        e.preventDefault();
        var action = $(this).data('action');
        Swal.fire({
            title: 'Yakin ingin menghapus data ?',
            text: "Data yang sudah dihapus tidak bisa dikembalikan lagi",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Batal',
            confirmButtonText: 'Hapus'
        }).then((result) => {
            if (result.isConfirmed) {
                $('#formDelete').attr('action', action);
                $('#formDelete').submit();
            }
        })
    })

    $('body').on('change', '.btnIsActive', function(e) {
        e.preventDefault();
        var action = $(this).data('action');
        Swal.fire({
            title: 'Status Active Berhasil Di ubah',
            icon: 'success',
            showConfirmButton: true,
            timer: 3000
        })
    })
</script>
@endsection