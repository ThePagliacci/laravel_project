@extends('layouts.website')
@section('title')
    Yazarlar
@endsection
@section('content')

    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span>Kategori</span>
                    <h3>Yazarlar</h3>
                    <p>Bazı yazarlar listelenmiştir</p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-white">
        <div class="container">
            <div class="row">
                @foreach ($writers as $writer )
                <div class="col-lg-4 mb-4">
                    <div class="entry2">
                        <a href="">
                            <img src="../uploads/category/{{ $writer->image }}" alt="image" class="img-fluid rounded">
                        </a>
                        <div class="excerpt">
                            <span class="post-category text-white bg-secondary mb-3">yazar</span>

                            <h2><a href="single.html">{{ $writer->name }}</a></h2>
                            <p> {{ $writer->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>

@endsection
