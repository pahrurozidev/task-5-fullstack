@extends('layouts.app')

@section('content')
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/hero1.webp" class="d-block" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $articles[0]->title }}</h5>
                    <p>{{ substr($articles[0]->content, 0, 200) }}</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/hero2.webp" class="d-block" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $articles[1]->title }}</h5>
                    <p>{{ substr($articles[1]->content, 0, 200) }}</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/hero3.webp" class="d-block" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $articles[2]->title }}</h5>
                    <p>{{ substr($articles[2]->content, 0, 200) }}</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container" style="margin: 150px auto;">
        <h2 class="text-center mb-5">My Articles</h2>
        <div class=" d-flex flex-wrap justify-content-around">
            @foreach ($articles->skip(3) as $article)
                <div class="card mb-4" style="width: 15rem;">
                    <img src="img/hero1.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>{{ $article->title }}</h5>
                        <p>{{ substr($article->content, 0, 100) }}</p>
                        <a href="#" class="btn btn-danger">Go somewhere</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
