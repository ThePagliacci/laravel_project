<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kitap göstermek</title>
</head>
<body>

    @if ($book->id == true)
    kitap adi: {{ $book->name }} <br>
    türü ismi: {{ $book->BookGenre->name }} <br>
    yazarin adi: {{ $book->writer->name }} <br>
    
    <br><br>
    @foreach ($book->comments as $comment)
    yorum: {{ $comment->description }} <br>
    kullanci adi: {{ $comment->user->name }} <br>
    @if (Auth::user()->id == $comment->user_id)
    <form action="/comments/{{ $comment->id }}/edit">
        @csrf
        <button>düzenleme</button>
    </form>

    <form action="/comments/{{ $comment->id }}/delete" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">silme</button>
    </form>

<br>
    @endif
    @endforeach

    @endif

</body>

</html>