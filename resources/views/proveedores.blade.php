<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proveedores</title>
</head>
<body>
    <div class="container">        
    <h1>Proveedores</h1>
    <br>
    <a href="{{route('proveedores.agregar')}}" class="btn btn-success">Agregar Nuevo Proveedor</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>IdProveedor</th>
                <th>Nombre</th>
                <th>Fecha Registro</th>
                <th>Telefono</th>
                <th>Correo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $proveedor)
                <tr>
                    <td>{{$proveedor->IdProveedor}}</td>
                    <td>{{$proveedor->nombre}}</td>
                    <td>{{$proveedor->fechaRegistro}}</td>
                    <td>{{$proveedor->telefono}}</td>
                    <td>{{$proveedor->correo}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('principal')}}" class="btn btn-dark">Pagina Principal</a>
    <a href="{{route('empleados.principal')}}" class="btn btn-success">Ver Empleados</a>
    <a href="{{route('productos.principal')}}" class="btn btn-primary">Ver Productos</a>
    </div>
</body>
</html>
