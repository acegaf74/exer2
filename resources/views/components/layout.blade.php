<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exer2</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <x-header>{{$title}}</x-header>
    <main>
        <hr>
        <p>{{$slot}}</p>
    </main>
    <x-footer></x-footer>
</body>
</html>