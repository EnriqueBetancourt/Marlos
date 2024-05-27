<div class="container">
    <div class="table-responsive">
    <table class="table">
    <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>Telefono</td>
        <td>RFC</td>
        <td>Direccion</td>
        <td>-</td>
    </tr>
    @foreach ($proveedores as $proveedor)
        <tr>            
            <td>{{$proveedor->id }}</td>
            <td>{{$proveedor->nombre }}</td>
            <td>{{$proveedor->telefono }}</td>
            <td>{{$proveedor->rfc }}</td>
            <td>{{$proveedor->direccion }}</td>
            <td>
            <form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
            <a href="{{ route('proveedores.edit', $proveedor->id)}}" type="button" class="btn btn-warning">
            Editar</a>
            </td>
        </tr>
    @endforeach    
</table>
    </div>
    </div>