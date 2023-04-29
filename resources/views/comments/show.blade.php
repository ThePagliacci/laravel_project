<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>yorum göstermek</title>
</head>
<body>
    @if ($comment) <!-- tüm veriler factory/ seeder ile eklendi --->

    user name: {{ $comment->user->name }} <br>
    Comment: {{ $comment->description }} <br>
    book: {{ $comment->book->name }} <br>
    @if (Auth::User()->id == $comment->user->id)


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
    <br>

    @else
    <strong>yorum Henüz mevcut değil.</strong>

    @endif


</body>
</html>