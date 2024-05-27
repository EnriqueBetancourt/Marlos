<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModalR">
  Registrar
</button>

<!-- The Modal -->
<div class="modal" id="myModalR">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Ventas</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="container">
        <div class="container">
        <form action="{{ route('ventas.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="descripcion">Cantidad:</label>
        <input type="text" name="cantidad" id="cantidad" class="form-control">

        <label for="descripcion">Total Venta:</label>
        <label for="descripcion" ></label>

        <input type="hidden" name="producto_id" id="producto_id">
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
                <span>Producto seleccionado: </span> <span id="producto_nombre"></span>
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
        const buttons = document.querySelectorAll('.producto');
        buttons.forEach(button => {
            button.addEventListener('click', function () {
                const productoId = this.getAttribute('data-id');
                const productoNombre = this.getAttribute('data-name');
                document.getElementById('producto_id').value = productoId;
                document.getElementById('producto_nombre').textContent = productoNombre;
            });
        });
    });
</script>