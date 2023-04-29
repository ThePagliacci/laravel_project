<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>yorumu düzenleme</title>
</head>
<body>

    <form action="/comments/{{ $comment->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        Aşağıda yorumunuzu düzenleyin:
        <input name="description" type="text" value="{{ old('description', $comment->description) }}">
        <br>
        kitap adi:
        <select name="book_id" id="book">
            @foreach ($books as $book)
            <option value="{{ $book->id }}" {{ old('book_id', $comment->book_id) == $book->id ? 'selected' : '' }}>{{ $book->name }}</option>
            @endforeach
        </select> <br>
    <button type="submit">düzenlemeleri kaydet</button><br>


    @foreach ($errors->all() as $message) {
        {{$message}}
    }

    @endforeach

    </form>

</body>
</html>