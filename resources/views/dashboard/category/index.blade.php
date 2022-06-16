@extends('dashboard.layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <main class="col-md-6 m-auto ms-sm-auto col-lg-8 px-md-4">
                <h2>Daftar Category</h2>
                <hr>
                <a href="/dashboard/categories/create" class="btn btn-danger my-2">Tambah Category</a>
                @if (session('createSuccess'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('createSuccess') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session('deleteSuccess'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('deleteSuccess') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session('updateSuccess'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('updateSuccess') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th scope="col" class="text-center">No</th>
                                <th scope="col" class="text-center">Category</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td class="col-lg-1 text-center">{{ $loop->iteration }}</td>
                                    <td class="col-lg-8 text-center">{{ $category->name }}</td>
                                    <td class="d-flex justify-content-center">
                                        <a href="/dashboard/categories/{{ $category->id }}/edit"
                                            class="badge bg-success text-decoration-none mx-2 ">Ubah</a>
                                        <form action="/dashboard/categories/{{ $category->id }}" class="badge bg-danger "
                                            method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="border-0 text-white p-0 bg-danger"
                                                onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
@endsection
