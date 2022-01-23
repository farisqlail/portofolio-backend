@extends('admin.layout')

@section('content-admin')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Buat Blog</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('blog.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" name="title" class="form-control" placeholder="Judul Blog">
                </div>

                <div class="form-group">
                    <label for="">Link Medium</label>
                    <input type="text" name="link" class="form-control" placeholder="Link Blog">
                </div>

                <div class="form-group">
                    <label for="">Deskripsi Blog</label>
                    <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection