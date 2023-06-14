@extends('layouts.website')
@section('content')

@if (session('message'))
<div class="alert alert-success">{{ session('message') }}</div>
@endif

    <div class="site-section bg-light">
    <div class="container">
        <div class="site-branding">
            <p id="site-identity">
                <h1 class="site-title"><a href="{{ route('blog') }}" rel="home">evladiyelikkitaplar.com</a></h1>
                <p class="site-description text-center">
            <h1 class="text-center">"Bir Tutam Kitap Kutusu"</h1>
                </p>
            </div>
        </div>
        <div class="row align-items-stretch retro-layout-2">
            @for ($i = 15; $i<=19; $i++)
            @php
                $book = $books->firstWhere('id', $i);
            @endphp

            @if ($i == 15)
            <div class="col-md-4">
                <a href="{{ route('book.show', ['book' =>$book->id]) }}" class="h-entry mb-30 v-height gradient" style="background-image: url('{{ asset('uploads/category/'.$book->image) }}');">
                    <div class="text">
                            <div class="post-categories mb-3">
                            <span class="post-category bg-danger">{{ $book->bookGenre->name }}here</span>
                        </div>
                        <h2>{{ $book->name }}</h2>
                        <h2>{{$book->writer->name}}</h2>
                    </div>
                </a>
                @endif
                @if ($i == 16)
                <a href="{{ route('book.show', ['book' =>$book->id]) }}" class="h-entry v-height gradient" style="background-image: url('{{ asset('uploads/category/'.$book->image) }}');">
                    <div class="text">
                        <div class="post-categories mb-3">
                            <span class="post-category bg-danger">{{ $book->bookGenre->name }}</span>
                        </div>
                        <h2>{{$book->name}}</h2>
                        <h2>{{$book->writer->name}}</h2>

                    </div>
                </a>
            </div>
            @endif
            @if ($i == 17)
                
            <div class="col-md-4">
                <a href="{{ route('book.show', ['book' =>$book->id]) }}" class="h-entry img-5 h-100 gradient" style="background-image: url('{{ asset('uploads/category/'.$book->image) }}');">

                    <div class="text">
                        <div class="post-categories mb-3">
                            <span class="post-category bg-danger">{{ $book->bookGenre->name }}</span>
                        </div>
                        <h2>{{$book->name}}</h2>
                        <h2>{{$book->writer->name}}</h2>
                    </div>
                </a>
            </div>
            @endif
            @if ($i==18)
                
            <div class="col-md-4">
                <a href="{{ route('book.show', ['book' =>$book->id]) }}" class="h-entry mb-30 v-height gradient" style="background-image: url('{{ asset('uploads/category/'.$book->image) }}');">

                    <div class="text">
                        <div class="post-categories mb-3">
                            <span class="post-category bg-danger">{{ $book->bookGenre->name }}</span>
                        </div>

                        <h2>{{ $book->name }}</h2>
                        <h2>{{$book->writer->name}}</h2>
                    </div>
                </a>
                @endif
                @if($i == 19)
                <a href="{{ route('book.show', ['book' =>$book->id]) }}" class="h-entry v-height gradient" style="background-image: url('{{ asset('uploads/category/'.$book->image) }}');">
                    <div class="text">
                        <div class="post-categories mb-3">
                            <span class="post-category bg-danger">{{ $book->bookGenre->name }}</span>
                        </div>

                        <h2>{{ $book->name }}</h2>
                        <h2>{{$book->writer->name}}</h2>
                    </div>
                </a>
            </div>
            @endif
            @endfor

        </div>
    </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h2>Son Yazılanlar</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($books->slice(0, 9) as $book )
                <div class="col-lg-4 mb-4">
                <div class="entry2">
                <a href="{{ route('book.show', ['book' =>$book->id]) }}">
                    <img src="../uploads/category/{{ $book->image }}" alt="Image" class="img-fluid rounded" >
                </a>
                <div class="excerpt">
                    <a href="{{ route('genre', ['genre_id' =>$book->genre_id]) }}">
                    <span class="post-category text-white bg-secondary mb-3">{{ $book->BookGenre->name }}</span>
                    </a>
                    <div class="post-meta align-items-center text-left clearfix">
                    <span class="d-inline-block mt-1">
                    <h5>The Writer:
                        <a href="{{ route('writer.show', ['writer_id' => $book->writer->id]) }}">
                           {{ $book->writer->name }} </a>
                        </h5>
                    </span>
                    </div>
                    <h2>
                        <a href="{{ route('book.show', ['book' => $book->id]) }}">
                            {{ $book->name }}
                         </a>
                    </h2>

                </div>
            </div>
        </div>
                @endforeach

                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light">
        <div class="container">
            <div class="row align-items-stretch retro-layout">
                @for ($i = 11; $i<=14; $i++)
                @php
                    $book = $books->firstWhere('id', $i);
                @endphp
                    
                @if ($i == 11)
                <div class="col-md-5 order-md-2">
                    <a href="{{ route('book.show', ['book' =>$book->id]) }}" class="hentry img-1 h-100 gradient" style="background-image: url('{{ asset('uploads/category/' . $book->image) }}');">
                        <span class="post-category text-white bg-danger">{{ $book->bookGenre->name }}</span>
                        <div class="text">
                            <h2>{{$book->name}}</h2>
                        </div>
                    </a>
                </div>
                @endif
                @if ($i == 12)

                <div class="col-md-7">
                    <a href="{{ route('book.show', ['book' =>$book->id]) }}" class="hentry img-2 v-height mb30 gradient" style="background-image: url('{{ asset('uploads/category/' . $book->image) }}');">
                        <span class="post-category text-white bg-success">{{ $book->bookGenre->name }}</span>
                        <div class="text text-sm">
                            <h2>{{$book->name}}</h2>
                            </div>
                    </a>
                @endif
                @if ($i == 13)

                    <div class="two-col d-block d-md-flex">
                        <a href="{{ route('book.show', ['book' =>$book->id]) }}" class="hentry v-height img-2 gradient" style="background-image:url('{{ asset('uploads/category/' . $book->image) }}');">
                            <span class="post-category text-white bg-primary">{{ $book->bookGenre->name }}</span>
                            <div class="text text-sm">
                                <h2>{{ $book->name }}</h2>
                            </div>
                        </a>
                @endif
                @if ($i == 14)
                        <a href="{{ route('book.show', ['book' =>$book->id]) }}" class="hentry v-height img-2 ml-auto gradient" style="background-image: url('{{ asset('uploads/category/' . $book->image) }}');">
                            <span class="post-category text-white bg-warning">{{ $book->bookGenre->name }}</span>
                            <div class="text text-sm">
                                <h2>{{$book->name}}</h2>
                            </div>
                        </a>
                    </div>

                </div>
                @endif
                @endfor

            </div>

        </div>
    </div>
    <div class="site-section bg-lightx">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-5">
                    <div class="subscribe-1 ">
                        <h2>Abone ol</h2>
                        <p class="mb-5">Güncel kitaplardan anında  haberdar olmak için abone olun.</p>
                        <form action="#" class="d-flex">
                            <input type="text" class="form-control" placeholder="Enter your email address">
                            <input type="submit" class="btn btn-primary" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
