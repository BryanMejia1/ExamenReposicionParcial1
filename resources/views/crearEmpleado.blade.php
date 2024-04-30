<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Empleado</title>
</head>
<body>
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1>Crear Empleado</h1>
                <br>
                <form action="{{route('empleados.guardar')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="color">IdPrestamo:</label>
                        <input type="text" class="form-control" name="idPrestamo" id="idPrestamo"/>
                    </div>
                    <div class="form-group">
                        <label for="metros">Nombre:</label>
                        <input type="text"class="form-control" name="nombre" id="nombre"/>
                    </div>
                    <div class="form-group">
                        <label for="tipoPropiedad">Apellido:</label>
                        <input type="text" class="form-control" name="apellido" id="apellido"/>
                    </div>
                    <div class="form-group">
                        <label for="tipoPropiedad">fechaIngreso:</label>
                        <input type="text" class="form-control" name="fechaIngreso" id="fechaIngreso"/>
                    </div>
                    <div class="form-group">
                        <label for="tipoPropiedad">Salario:</label>
                        <input type="text" class="form-control" name="salario" id="salario"/>
                    </div>
                    
                    <br>
                    <div class="form-group">
                        <a href="{{route('empleados.principal')}}" class="btn btn-warning">Volver</a>
                        <button type="submit" class="btn btn-success">Guardar</button>                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>