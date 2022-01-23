@extends('admin.layout')

@section('content-admin')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Blog</h1>
        <a href="{{ route('blog.create') }}"
            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Tambah Blog</a>
    </div>

    <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Blog</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="tableBlog">
                    <thead>
                        <tr>
                            <th>Judul Blog</th>
                            <th>Link</th>
                            <th>Deskripsi</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Judul Blog</th>
                            <th>Link</th>
                            <th>Deskripsi</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($blog as $item)
                            <tr>
                                <td>{{ $item->title }}</td>
                                <td>{{ Str::limit($item->link, 30) }}</td>
                                <td>{{ Str::limit($item->deskripsi, 30) }}</td>
                                <td>
                                    <a href="{{ route('blog.edit', $item) }}"
                                        class="btn btn-primary"><i class="fas fa-edit"></i></a>

                                    <a href="{{ route('blog.delete', $item->id) }}"
                                        class="btn btn-danger"><i class="fas fa-trash"></i></a>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection

@push('script')

<script>
    $(document).ready(function() {
        $('#tableBlog').DataTable();
    });
</script>

@endpush