<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje</title>
</head>
<body>
<h1>Nuevo mensaje de {{ $msg["name"]  }} <{{ $msg["email"] }}></h1>
<h2>Asunto {{ $msg["subject"] }}</h2>
<h3>Mensaje</h3>
<p>{{ $msg["message"]  }}</p>
</body>
</html>
