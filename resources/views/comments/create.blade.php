<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>yorum yapmak</title>
</head>
<body>

    <form action="/comments" method="post" enctype="multipart/form-data">
        @csrf

        Aşağıda yorumunuz yazın:
        <input name="description" type="text">
        <br>
        kitap adi:
        <select name="book_id" id="book">
            @foreach ($books as $book)
            <option value="{{ $book->id ?? '' }}">{{ $book->name ?? '' }}</option>

            @endforeach
        </select> <br>



        <button>gönder</button>


     @foreach ($errors->all() as $message) {
            {{$message}}
        }

        @endforeach

    </form>

</body>
</html>