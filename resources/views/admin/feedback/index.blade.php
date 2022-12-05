@extends('admin.index')
@section('title', 'Kelola Feedback')
@section('info', 'Kelola Feedback')
@section('data1', 'Kelola Feedback')
@section('content')
<div class="col-lg-12">
    <div class="row">

        <div class="col-xxl-12">
            <div class="card info-card sales-card">
                <div class="d-flex flex-row p-3">
                    <li class="dropdown-header"><a href="{{ route('feedback.create') }}" class="btn btn-primary btn-sm">
                        <i class="bi bi-plus"></i> Tambah Data</a>
                    </li>    
                    <li class="dropdown-header text-center px-2"><a href="{{ url('admin/get-feedback-pdf') }}" class="btn btn-danger btn-sm">
                        <i class="bi bi-filetype-pdf"></i> Export PDF</a>
                    </li>     
                </div>
                
                <div class="d-flex align-items-center mt-2">
                    <div class="card-body">
                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama&nbsp;User</th>
                                    <th scope="col">Isi&nbsp;Feedback</th>
                                    <th scope="col">Course</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php $no=1; @endphp
                                @foreach ( $feedback as $data )
                                <tr>
                                    <th scope="row">{{ $no++ }}.</th>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->isi_feedback }}</td>
                                    <td>{{ $data->course->nama_course }}</td>
                                    <td>
                                        <form method="POST" id="formDelete">
                                            @csrf
                                            @method('DELETE')
                                            {{-- <a href="{{ route('feedback.show',$data->id) }}" class="btn btn-primary btn-sm">
                                                <i class="bi bi-eye"></i>
                                            </a> --}}
                                            <a href="{{ route('feedback.edit',$data->id) }}" class="btn btn-warning btn-sm">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <button data-action="{{ route('feedback.destroy',$data->id) }}" type="submit" class="btn btn-danger btn-sm btnDelete" title="Hapus Feedback">
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

</script>
@endsection