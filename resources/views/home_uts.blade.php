@extends('layouts.layout_uts')
@section('title','Home')
@section('content')

<!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Blog Artikel
          <small>Wisata Alam Kota Situbondo</small>
        </h1>

        @foreach($articles as $article)
        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="{{$article->featured_image}}" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{$article->title}}</h2>
            <p class="card-text">{{$article->content}}</p>
            <a href="/article/{{$article->id}}" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on {{$article->updated_at}} by
            <a href="#">Start Bootstrap</a>
          </div>
        </div>
        @endforeach       

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

@endsection