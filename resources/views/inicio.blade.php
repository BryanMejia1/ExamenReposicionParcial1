<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tarea</title>
</head>
<body>
    <div class="container">
        <h1> Que desea ver? </h1>
        <br>
        <a href="{{route('empleados.principal')}}" class="btn btn-primary"> Empleados</a>
        <a href="{{route('productos.principal')}}" class="btn btn-primary"> Productos</a>
        <a href="{{route('proveedores.principal')}}" class="btn btn-primary"> Proveedores</a>
    </div>
    
</body>
</html>