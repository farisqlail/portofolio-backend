@extends('admin.layout')

@section('content-admin')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update Blog</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('blog.update', $blog) }}" method="post">
                @csrf
                {{ method_field('PATCH') }}

                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" name="title" class="form-control" value="{{ $blog->title }}">
                </div>

                <div class="form-group">
                    <label for="">Link Medium</label>
                    <input type="text" name="link" class="form-control" value="{{ $blog->link }}">
                </div>

                <div class="form-group">
                    <label for="">Deskripsi Blog</label>
                    <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10">{{ $blog->deskripsi }}</textarea>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection