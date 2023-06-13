@extends('layouts.website')
@section('title')
    Comment
@endsection 
@section('content')
    <section class="site-section py-lg">
        <div class="container">
            <div class="col-md-12 col-lg-8 main-content">
                <div class="comment-form-wrap pt-5">
                    <h3 class="mb-5">Yorumunu Bırak</h3>
                        <form class="p-5 bg-light" action="/comments" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="text-lg-left"></div>
                        <label for="user_id">Ad</label>
                        <span value="{{ Auth::User()->id}}" type="text" class="form-control" id="user_id">{{ Auth::User()->name }}</span>
                    </div>
                    <div class="text-lg-left"></div>
                <div class="form-group">
                    <label for="book_id">Kitap</label> <br>
                    <select name="book_id" id="book_id">
                        @foreach ($books as $book)
                        <option value="{{ $book->id ?? '' }}">{{ $book->name ?? '' }}</option>
                        @endforeach
                    </select> <br>
                </div>
                <div class="form-group">
                    <div class="text-lg-left"></div>
                <label for="description">Yorumunuz</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="text-center">
            <div class="form-group">
                <input type="submit" value="Yorumu Gönder" class="btn btn-primary">
            </div>
        </div>
        </div>
        </div>
        <div class="col-md-12 col-lg-4 sidebar">
            <div class="sidebar-box search-form-wrap">
                    <div class="form-group">
                        <span class="icon fa fa-search"></span>
                        <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                    </div>
        @foreach ($errors->all() as $message) {
            {{$message}}
        }
        @endforeach
                </form>
            </div>
        </div>
    </section>
@endsection