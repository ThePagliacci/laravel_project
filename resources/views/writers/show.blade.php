<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>yazarlar göstermek</title>
</head>
<body>
    yazar adi: {{ $writer->name }} <br>
    @foreach ($writer->Books as $writerWork)
    yazar'in kitabi: {{ $writerWork->name }} <br>
    {{ $writerWork->image}}<br> <!-- burda fotğraf eklemek gerek  --->
    @endforeach
    
</body>
</html>