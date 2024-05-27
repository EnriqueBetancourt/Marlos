<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/general.css')}}">
</head>
<body>
    @include('general.header')
    <div class="container main mt-2 p-3">
    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group ">
            <input type="hidden" name="categoria_id" id="producto_id" 
            value="{{ $producto->id}}">

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" 
            value="{{$producto->nombre}}">

            <label for="descripcion">Cantidad:</label>
            <input type="text" name="cantidad" id="cantidad" class="form-control"
            value="{{ $producto->cantidad}}">

            <label for="descripcion">Cantidad Minima:</label>
            <input type="text" name="cantidad_minima" id="cantidad_minima" class="form-control"
            value="{{ $producto->cantidad_minima}}">

            <label for="descripcion">Impuesto:</label>
            <input type="text" name="impuesto" id="impuesto" class="form-control"
            value="{{$producto->impuesto}}">

            <label for="descripcion">Precio:</label>
            <input type="text" name="precio" id="precio" class="form-control"
            value="{{ $producto->precio }}">

            <label for="descripcion">Costo:</label>
            <input type="text" name="costo" id="costo" class="form-control"
            value="{{$producto->costo}}">

            <input type="hidden" name="categoria_id" id="categoria_id"
            value="{{$producto->categoria_id}}">
          </div>
          <div class="table-responsive">
    <table class="table">
    <tr>
        <td>ID</td>
        <td>Categoria</td>
        <td>-</td>
    </tr>
    @foreach ($categorias as $categoria)
        <tr>            
            <td>{{$categoria->id }}</td>
            <td>{{$categoria->categoria }}</td>
            <td><a href="#" class="categoria" data-name = "{{$categoria->categoria}}" data-id="{{$categoria->id}}">Seleccionar</a></td>
        </tr>
    @endforeach    
</table>
<span>Categoria seleccionada: </span> <span id="categoria_nombre"></span>
</div>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>

    @include('general.footer')

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const buttons = document.querySelectorAll('.categoria');
        buttons.forEach(button => {
            button.addEventListener('click', function () {
                const categoriaId = this.getAttribute('data-id');
                const categoriaNombre = this.getAttribute('data-name');
                document.getElementById('categoria_id').value = categoriaId;                
                document.getElementById('categoria_nombre').textContent = categoriaNombre;
            });
        });
    });
</script>
</body>
</html>