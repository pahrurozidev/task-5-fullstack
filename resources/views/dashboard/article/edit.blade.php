@extends('dashboard.layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <main class="col-md-9 m-auto ms-sm-auto col-lg-8 px-md-4">
                <h2>Ubah Artikel</h2>
                <hr class="mb-4">
                <form action="/dashboard/article/{{ $article[0]->id }}" method="POST" class="mb-2">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="title"
                            value="{{ old('title', $article[0]->title) }}">
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" name="slug" class="form-control" id="slug"
                            value="{{ old('slug', $article[0]->slug) }}">
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select class="form-select" aria-label="Default select example" name="category_id">
                            <option selected>Open this select category</option>
                            @foreach ($categories as $category)
                                @if (old('category_id', $article[0]->category->id) == $category->id)
                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                @else
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    {{-- image --}}
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <input id="content" type="hidden" name="content"
                            value="{{ old('content', $article[0]->content) }}">
                        <trix-editor input="content"></trix-editor>
                    </div>
                    <button class="btn btn-danger">Ubah</button>
                </form>
            </main>
        </div>
    </div>
@endsection
