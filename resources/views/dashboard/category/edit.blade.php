@extends('dashboard.layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <main class="col-md-9 m-auto ms-sm-auto col-lg-8 px-md-4">
                <h2>Ubah Category</h2>
                <hr class="mb-4">
                <form action="/dashboard/categories/{{ $category[0]->id }}" method="POST" class="mb-2">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Category</label>
                        <input type="text" name="name" class="form-control" id="name"
                            value="{{ old('name', $category[0]->name) }}">
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" name="slug" class="form-control" id="slug"
                            value="{{ old('slug', $category[0]->slug) }}">
                    </div>
                    <button class="btn btn-danger">Ubah</button>
                </form>
            </main>
        </div>
    </div>
@endsection
