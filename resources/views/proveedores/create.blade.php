<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModalR">
  Registrar
</button>

<!-- The Modal -->
<div class="modal" id="myModalR">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Proveedores</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="container">
        <div class="container">
        <form action="{{ route('proveedores.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="categoria">Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="form-control">

        <label for="descripcion">Telefono:</label>
        <input type="text" name="telefono" id="telefono" class="form-control">

        <label for="descripcion">RFC:</label>
        <input type="text" name="rfc" id="rfc" class="form-control">

        <label for="descripcion">Direccion:</label>
        <input type="text" name="direccion" id="direccion" class="form-control">
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