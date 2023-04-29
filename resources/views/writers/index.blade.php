<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>yazar göstermek</title>
</head>
<body>
    @foreach ($writers as $writer)
    yazar adi: {{ $writer->name}}
    @endforeach
    
</body>
</html>