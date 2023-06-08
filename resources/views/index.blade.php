@extends('layouts.website')
@section('content')

@if (session('message'))
<div class="alert alert-success">{{ session('message') }}</div>

@endif
    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h2>Son Yazılanlar</h2>
                </div>
            </div>

         <div class="row">
            <div class="col-lg-4 mb-4">
            <div class="entry2">
                @foreach ($books as $book )
                <a href="{{ route('book.show', ['book' =>$book->id]) }}">
                    <img src="../uploads/category/{{ $book->image }}" alt="Image" class="img-fluid rounded" >
                </a>
                <div class="excerpt">
                    <span class="post-category text-white bg-secondary mb-3">{{ $book->BookGenre->name }}</span>
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
                @endforeach

            </div>
          </div>
       </div> 
        </div>
    </div>
@endsection
