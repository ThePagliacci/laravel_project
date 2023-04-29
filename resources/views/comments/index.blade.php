<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tüm yorumlar göstermek</title>
</head>
<body>
    @if (session('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <br><br>
    @foreach ($comments as $comment)

        Comment: {{ $comment->description }} <br>
        book name: {{ $comment->book->name }}
        <br>
        user name: {{ $comment->user->name }}
            <br><br>

            @if (Auth::User()->id == $comment->user->id)


            <form action="/comments/{{ $comment->id }}/edit">
                @csrf
                <button>düzenleme</button>
            </form>
            
            <form action="/comments/{{ $comment->id }}/delete" method="post">
                @csrf
                @method('DELETE')
                <button>silme</button>
            </form>
    
        <br>
        @endif
        
            <br>
    @endforeach

    <a href="{{ route('yorumYap') }}">yorum eklemek ister misiniz??</a>

</body>
</html>