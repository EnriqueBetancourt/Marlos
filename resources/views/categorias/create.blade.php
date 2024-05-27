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
        <div class="container">
<form action="{{ route('categorias.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="categoria">Nombre de la categoría:</label>
        <input type="text" name="categoria" id="categoria" class="form-control">

        <label for="descripcion">Descripcion de la categoría:</label>
        <input type="text" name="descripcion" id="descripcion" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
</form>
</div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
