<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Categorias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/general.css')}}">
</head>
<body>
    @include('general.header')
    <div class="container main mt-2 p-3">
    <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group ">
            <input type="hidden" name="categoria_id" id="categoria_id" 
            value="{{ $categoria->id}}">

            <label for="categoria">Nombre de la categoría:</label>
            <input type="text" name="categoria" id="categoria" class="form-control"
            value="{{ $categoria->categoria}}">

           <label for="descripcion">Descripcion de la categoría:</label>
           <input type="text" name="descripcion" id="descripcion" class="form-control"
           value="{{ $categoria->descripcion}}">
          </div>
          <button type="submit" class="btn btn-primary mb-3">Actualizar</button>
        </form>
      </div>
    </div>

    @include('general.footer')

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>