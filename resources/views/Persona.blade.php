<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
</head>
<body>
     @if(isset($edad) && isset($nombre))
     <p>Tu Nombre {{$nombre}}</p>
     <p>Tu edad {{$edad}}</p>
     @elseif
     <p style="background : red">No Hay Nada Que Mostrar</p>
     @endif
</body>
</html>