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
        <form class="p-5 bg-light" action="/anasayfa" method="post" enctype="multipart/form-data">
            @csrf
            <h3>Contact Us</h3>
            <p>Daha fazlası için ve bir sorun olduğunda bize mesaj atınız.</p>
            <label for="email" class="form-group">
                <input name="email" id="email" type="text" class="form-control"  required>
                <span for="email">Emailin</span>
                <span name="email" class="border"></span>
            </label>
            <label class="form-group" >
                <textarea name="message" id="message" class="form-control" required></textarea>
                <span for="message">Mesajınız</span>
                <span for="message" class="border"></span>
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
