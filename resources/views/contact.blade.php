@extends('layouts.website')
@section('title')
    Contact
    @endsection
@section('content')

<head>
    <meta charset="utf-8">
    <title>RegistrationForm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('contact1')}}/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="{{asset('contact1')}}/css/style.css">
</head>

<body>
<div class="wrapper">
    <div class="inner">
        <form action="{{ url('contact') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h3>Contact Us</h3>
            <p>Daha fazlası için ve bir sorun olduğunda bize mesaj atınız.</p>
        </label>
        <label class="form-group">
            <span value="{{Auth::User()->id}}" for="">{{Auth::User()->email}}</span>
            <span class="border"></span> <br><br><br>
        </label>
                <label for="message" class="form-group" >
                <textarea name="message" id="message" class="form-control" required></textarea>
                <span for="message" >Mesajınız</span>
            </label>
            <button type="submit" >Gönder
                <i class="zmdi zmdi-arrow-right"></i>
            </button>
            @foreach ($errors->all() as $message) {
                {{$message}}
            }
            @endforeach
        </form>
    </div>
</div>
</body>
</html>
@endsection
