@extends('layouts.website')
@section('title')
    post
@endsection
@section('content')
    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('{{ asset('../uploads/category/'.$book->image)}}');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="post-entry text-center">
                        <a href="{{ route('genre', ['genre_id' =>$book->genre_id]) }}">
                        <span class="post-category text-white bg-success mb-3">{{ $book->bookGenre->name }}</span>
                    </a>
                        <h1 class="mb-4"><a href="#">{{ $book->name }} – {{ $book->writer->name }}</a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="site-section py-lg">
        <div class="container">
            <div class="row blog-entries element-animate">
                <div class="col-md-12 col-lg-8 main-content">
                    <div class="post-content-body">
                        <p class="text font-italic">{{ $book->name }}</p>
                        <p>{{$book->description}}</p>

                        <div class="row mb-5 mt-5">
                            <div class="col-md-12 mb-4">
                                <img src="{{asset('website')}}/images/img_3.jpg" alt="Image placeholder" class="img-fluid rounded">
                            </div>
                            <div class="col-md-6 mb-4">
                                <img src="{{asset('website')}}/images/img_4.jpg" alt="Image placeholder" class="img-fluid rounded">
                            </div>
                            <div class="col-md-6 mb-4">
                                <img src="{{asset('website')}}/images/img_1.jpg" alt="Image placeholder" class="img-fluid rounded">
                            </div>
                        </div>
                        @if ($book->id == true)
                        kitap adi: {{ $book->name }} <br>
                        türü ismi: {{ $book->BookGenre->name }} <br>
                        yazarin adi: {{ $book->writer->name }} <br>
                        <br>
                        <div class="pt-5">
                            <h3 class="mb-5">Comments</h3>
                            @foreach ($book->comments as $comment)

                            <div class="comment-list">
                                <li class="comment">
                                    <div class="vcard">
                                        <img src="{{ url('../uploads/category/'.$comment->user->image )}}" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>{{ $comment->user->name }}</h3>
                                        <div class="meta">{{ $comment->created_at->format('Y-m-d H:i:s') }}</div>
                                        <p>{{ $comment->description }}</p>

                                        @if (Auth::check() && Auth::user()->id == $comment->user_id)
                                        <div style="display: inline;">
                                            <a href="/comments/{{ $comment->id }}/edit"> <em>Edit</em>  </a>
                                                <a href="/comments/{{ $comment->id }}/delete"> <em> Delete</em>  </a>
                                            </div>
                                        @endif


                                    </div>
                                </li>
                        </div>
                        @endforeach

                            <br><br><br>
                            <h6>
                                <a href="{{ route('yorumYap') }}">  <strong> Add comment? </strong> </a> 
                            </h6>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

