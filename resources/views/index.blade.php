<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ana sayfa</title>
</head>
<body>
    @foreach ($books as $book )

    <a href="{{ route('book.show', ['book' => $book->id]) }}">
    kitap adi: {{ $book->name }} <br>
    </a>

    türü ismi: {{ $book->BookGenre->name }}<br>

    <a href="{{ route('writer.show', ['writer_id' => $book->writer->id]) }}">
    yazarin ismi: {{ $book->writer->name }} <br>
    </a>
    <br> <br>
    @endforeach
<!-- I should add comments here?-->

</body>
</html>