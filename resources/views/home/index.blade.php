<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        Slepettt!!!!{{ Auth::user()->name }}
    </center>
    @if (Auth::user()->role=='admin')
        Slepeet2
    @endif

    <a href="{{ url('logout') }}">Logout</a>
</body>
</html>