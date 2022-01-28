@extends('admin.layout')

@section('content-admin')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Buat Portfolio</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('portfolio.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" name="title" class="form-control" placeholder="Judul Portfolio">
                </div>

                <div class="form-group">
                    <label for="">Link Portfolio</label>
                    <input type="text" name="link" class="form-control" placeholder="Link Portfolio">
                </div>

                <div class="form-group">
                    <label for="">Kategori Portfolio</label>
                    <input type="text" name="kategori" class="form-control" placeholder="Kategori Portfolio">
                </div>

                <div class="form-group">
                    <label for="">Deskripsi Portfolio</label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection