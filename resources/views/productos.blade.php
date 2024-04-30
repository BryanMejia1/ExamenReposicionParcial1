<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>
<body>
    <div class="container">        
    <h1>Productos</h1>
    <br>
    <a href="{{route('productos.agregar')}}" class="btn btn-success">Agregar Nuevo Producto</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>PagaIsv</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{$producto->Id}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->stock}}</td>
                    <td>{{$producto->pagaIsv}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('principal')}}" class="btn btn-dark">Pagina Principal</a>
    <a href="{{route('empleados.principal')}}" class="btn btn-success">Ver Empleados</a>
    <a href="{{route('proveedores.principal')}}" class="btn btn-primary">Ver Proveedores</a>
    </div>
</body>
</html>