<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Proveedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/general.css')}}">
</head>
<body>
    @include('general.header')
    <div class="container main mt-2 p-3">
    <form action="{{ route('proveedores.update', $proveedor->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group ">
            <label for="categoria">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control"
            value="{{$proveedor->nombre}}">

            <label for="descripcion">Telefono:</label>
            <input type="text" name="telefono" id="telefono" class="form-control"
            value="{{$proveedor->telefono}}">
    
            <label for="descripcion">RFC:</label>
            <input type="text" name="rfc" id="rfc" class="form-control"
            value="{{$proveedor->rfc}}">
    
            <label for="descripcion">Direccion:</label>
            <input type="text" name="direccion" id="direccion" class="form-control"
            value="{{$proveedor->direccion}}">
          </div>
          <button type="submit" class="btn btn-primary mb-3">Actualizar</button>
        </form>
      </div>
    </div>

    @include('general.footer')

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>