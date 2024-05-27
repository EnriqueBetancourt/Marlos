<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/general.css')}}">
</head>
<body>
    @include('general.header')
    <div class="container main mt-2 p-3">
    <form action="{{ route('inventario.update', $in->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group ">
          <label for="descripcion">Producto:</label>
          <input type="text" name="producto" id="producto" class="form-control"
          value="{{$in->producto}}">

            <label for="descripcion">Stock:</label>
            <input type="text" name="stock" id="stock" class="form-control"
            value="{{$in->stock}}">

            <label for="descripcion">Ultima Reposicion:</label>
            <input type="text" name="ultima_reposicion" id="ultima_reposicion" class="form-control"
            value="{{$in->ultima_repocision}}">
          </div>
          <div class="table-responsive">
                <table class="table">
                  <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>-</td>
                  </tr>
                  @foreach ($productos as $producto)
                    <tr>            
                      <td>{{$producto->id }}</td>
                      <td>{{$producto->nombre }}</td>
                      <td><a href="#" class="producto" data-name = "{{$producto->nombre}}" data-id="{{$producto->id}}">Seleccionar</a></td>
                    </tr>
                  @endforeach    
                </table>
                <span>Categoria seleccionada: </span> <span id="categoria_nombre"></span>
              </div>
          <button type="submit" class="btn btn-primary mb-3">Actualizar</button>
        </form>
      </div>
    </div>

    @include('general.footer')

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>