<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModalR">
  Registrar
</button>

<!-- The Modal -->
<div class="modal" id="myModalR">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Productos</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="container">
          <form action="{{ route('productos.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="categoria">Nombre:</label>
              <input type="text" name="nombre" id="nombre" class="form-control">

              <label for="descripcion">Cantidad:</label>
              <input type="text" name="cantidad" id="cantidad" class="form-control">

              <label for="descripcion">Cantidad Minima:</label>
              <input type="text" name="cantidad_minima" id="cantidad_minima" class="form-control">

              <label for="descripcion">Impuesto:</label>
              <input type="text" name="impuesto" id="impuesto" class="form-control">

              <label for="descripcion">Precio:</label>
              <input type="text" name="precio" id="precio" class="form-control">

              <label for="descripcion">Costo:</label>
              <input type="text" name="costo" id="costo" class="form-control">

              <input type="hidden" name="categoria_id" id="categoria_id">
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
              <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
          </form>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
