<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModalR">
  Registrar
</button>

<!-- The Modal -->
<div class="modal" id="myModalR">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Inventario</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="container">
        <div class="container">
        <form action="{{ route('inventario.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="descripcion">Producto:</label>
        <input type="text" name="producto" id="producto" class="form-control">

        <label for="descripcion">Stock:</label>
        <input type="text" name="stock" id="stock" class="form-control">

        <label for="descripcion">Ultima Reposicion:</label>
        <input type="text" name="ultima_reposicion" id="ultima_reposicion" class="form-control">

        <input type="hidden" name="proveedor_id" id="proveedor_id">
    </div>
    <div class="table-responsive">
                <table class="table">
                  <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>-</td>
                  </tr>
                  @foreach ($proveedores as $proveedor)
                    <tr>            
                      <td>{{$proveedor->id }}</td>
                      <td>{{$proveedor->nombre }}</td>
                      <td><a href="#" class="proveedor" data-name = "{{$proveedor->nombre}}" data-id="{{$proveedor->id}}">Seleccionar</a></td>
                    </tr>
                  @endforeach    
                </table>
                <span>Proveedor seleccionado: </span> <span id="proveedor_nombre"></span>
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const buttons = document.querySelectorAll('.proveedor');
        buttons.forEach(button => {
            button.addEventListener('click', function () {
                const proveedorId = this.getAttribute('data-id');
                const proveedorNombre = this.getAttribute('data-name');
                document.getElementById('proveedor_id').value = proveedorId;
                document.getElementById('proveedor_nombre').textContent = proveedorNombre;
            });
        });
    });
</script>