@extends('admin.index')
@section('title', 'Kelola Testimoni')
@section('info', 'Kelola Testimoni')
@section('data1', 'Kelola Testimoni')
@section('content')
<div class="col-lg-12">
    <div class="row">

        <div class="col-xxl-12">
            <div class="card info-card sales-card">
                <div class="d-flex flex-row p-3">
                    <li class="dropdown-header"><a href="{{ route('testimoni.create') }}" class="btn btn-primary btn-sm">
                        <i class="bi bi-plus"></i> Tambah Data</a>
                    </li>    
                    <li class="dropdown-header text-center px-2"><a href="{{ url('admin/get-testimoni-excel') }}" class="btn btn-success btn-sm">
                        <i class="bi bi-file-earmark-spreadsheet"></i> Export Excel</a>
                    </li>  
                    <li class="dropdown-header text-center"><a href="{{ url('admin/get-testimoni-pdf') }}" class="btn btn-danger btn-sm">
                        <i class="bi bi-filetype-pdf"></i> Export PDF</a>
                    </li>     
                </div>
                
                <div class="d-flex align-items-center mt-5">
                    
                    <div class="card-body">
                        <div class="table-responsive-lg">
                            <table class="table table-borderless align-middle datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama&nbsp;User</th>
                                        <th scope="col">Isi Pesan</th>
                                        <th scope="col" class="text-center">Status</th>
                                        <th scope="col" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @php $no=1; @endphp
                                    @foreach ( $testimoni as $data )
                                    <tr>
                                        <th scope="row">{{ $no++ }}.</th>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->isi_pesan }}</td>
                                        <td>
                                            @livewire('testimoni-status', ['model' => $data, 'field' => 'status'], key($data->id))
                                        </td>
                                        <td class="text-center">
                                            <form method="POST" id="formDelete">
                                                @csrf
                                                @method('DELETE')
                                                
                                                <a href="{{ route('testimoni.show',$data->id) }}" class="btn btn-warning btn-sm" title="Detail">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>

                                                <button data-action="{{ route('testimoni.destroy',$data->id) }}"  type="submit" class="btn btn-danger btn-sm btnDelete" title="Hapus">
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

    $('body').on('change', '.btnStatus', function(e) {
        e.preventDefault();
        var action = $(this).data('action');
        Swal.fire({
            title: 'Status Berhasil Di ubah',
            icon: 'success',
            showConfirmButton: true,
            timer: 3000
        })
    })
</script>
@endsection