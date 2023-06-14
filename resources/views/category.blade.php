@extends('layouts.website')
@section('title')
    Kategoriler
@endsection
@section('content')
    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span>Kategori</span>
                    <h3>{{ $genre->name }}</h3>
                    <p>{{ $genre->name }} olan kitaplar listelenmiştir.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section bg-white">
        <div class="container">
            <div class="row">
                @foreach ($genre->books as $book )
                    
                <div class="col-lg-4 mb-4">
                    <div class="entry2">
                        <a href="{{ route('book.show', ['book' =>$book->id]) }}">
                            <img src="{{ asset('uploads/category/'.$book->image) }}" alt="Image" class="img-fluid rounded">
                        </a>
                        <div class="excerpt">
                            <h2><a href="{{ route('book.show', ['book' =>$book->id]) }}">{{ $book->name }}</a></h2>
                            <p>{{ $book->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
