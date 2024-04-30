<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleados</title>
</head>
<body>
    <div class="container">        
    <h1>Empleados</h1>
    <br>
    <a href="{{route('empleados.agregar')}}" class="btn btn-success">Agregar Nuevo Empleado</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>IdPrestamo</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>fechaIngreso</th>
                <th>Salario</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
                <tr>
                    <td>{{$empleado->IdPrestamo}}</td>
                    <td>{{$empleado->nombre}}</td>
                    <td>{{$empleado->apelldio}}</td>
                    <td>{{$empleado->fechaIngreso}}</td>
                    <td>{{$empleado->salario}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('principal')}}" class="btn btn-dark">Pagina Principal</a>
    <a href="{{route('proveedores.principal')}}" class="btn btn-success">Ver Proveedores</a>
    <a href="{{route('productos.principal')}}" class="btn btn-primary">Ver Productos</a>
    </div>
</body>
</html>

