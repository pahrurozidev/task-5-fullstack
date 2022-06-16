@extends('dashboard.layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <main class="col-md-9 m-auto ms-sm-auto col-lg-8 px-md-4">
                <h2>Tambah Category</h2>
                <hr class="mb-4">
                <form action="/dashboard/categories" method="POST" class="mb-2">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Category</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" name="slug" class="form-control" id="slug" value="{{ old('slug') }}">
                    </div>
                    <button class="btn btn-danger" type="submit">Tambah</button>
                </form>
            </main>
        </div>
    </div>
@endsection
