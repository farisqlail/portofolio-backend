@extends('admin.layout')

@section('content-admin')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Buat Portfolio</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('portfolio.update', $portfolio) }}" method="post">
                @csrf
                {{ method_field('PATCH') }}

                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" name="title" class="form-control" value="{{ $portfolio->title }}">
                </div>

                <div class="form-group">
                    <label for="">Link Portfolio</label>
                    <input type="text" name="link" class="form-control" value="{{ $portfolio->link }}">
                </div>

                <div class="form-group">
                    <label for="">Kategori Portfolio</label>
                    <input type="text" name="kategori" class="form-control" value="{{ $portfolio->kategori }}">
                </div>

                <div class="form-group">
                    <label for="">Deskripsi Portfolio</label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $portfolio->description }}</textarea>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection