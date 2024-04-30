<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Producto</title>
</head>
<body>
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Crear Proveedor</h2>
                <br>
                <form action="{{route('proveedores.guardar')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="color">IdProveedor:</label>
                        <input type="text" class="form-control" name="idProveedor" id="idProveedor"/>
                    </div>
                    <div class="form-group">
                        <label for="metros">Nombre:</label>
                        <input type="text"class="form-control" name="nombre" id="nombre"/>
                    </div>
                    <div class="form-group">
                        <label for="tipoPropiedad">Fecha De Registro:</label>
                        <input type="text" class="form-control" name="fechaRegistro" id="fechaRegistro"/>
                    </div>
                    <div class="form-group">
                        <label for="tipoPropiedad">Telefono:</label>
                        <input type="text" class="form-control" name="telefono" id="telefono"/>
                    </div>
                    <div class="form-group">
                        <label for="tipoPropiedad">Correo:</label>
                        <input type="text" class="form-control" name="correo" id="correo"/>
                    </div>
                    
                    <br>
                    <div class="form-group">
                        <a href="{{route('proveedores.principal')}}" class="btn btn-warning">Volver</a>
                        <button type="submit" class="btn btn-success">Guardar</button>                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>