@extends('layouts.website')
@section('content')

    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h2>Son Yazılanlar</h2>
                </div>
            </div>

         <div class="row">
            <div class="col-lg-4 mb-4">

                @foreach ($books as $book )
            <div class="entry2">
                <a href="{{ route('book.show', ['book' =>$book->id]) }}"><img src="resized_WhatsApp-Image-2023-04-07-at-07.24.20.png" alt="Image" class="img-fluid rounded"></a>
                <div class="excerpt">
                    <span class="post-category text-white bg-secondary mb-3">{{ $book->BookGenre->name }}</span>

                    <h2>
                        <a href="{{ route('book.show', ['book' => $book->id]) }}">
                            {{ $book->name }}
                            </a>
                    </h2>
                    <div class="post-meta align-items-center text-left clearfix">
                        <figure class="author-figure mb-0 mr-3 float-left"><img src="Hannibal-Cinerituellllllll.png" alt="Image" class="img-fluid"></figure>
                        <span class="d-inline-block mt-1">
                            
                         <a href="{{ route('writer.show', ['writer_id' => $book->writer->id]) }}">
                            {{ $book->writer->name }}
                        </span>
                    </div>

                </div>
            </div>
            @endforeach
          </div>
       </div>

        </div>
    </div>
@endsection