<div class="container">
    <div class="table-responsive">
    <table class="table">
    <tr>
        <td>ID</td>
        <td>ID Proveedor</td>
        <td>Producto</td>
        <td>Stock</td>
        <td>Ultima Reposicion</td>
        <td>-</td>
    </tr>
    @foreach ($inventario as $in)
        <tr>            
            <td>{{$in->id }}</td>
            <td>{{$in->proveedor_id }}</td>
            <td>{{$in->producto }}</td>
            <td>{{$in->stock }}</td>
            <td>{{$in->ultima_reposicion }}</td>
            <td>
            <form action="{{ route('inventario.destroy', $in->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
            <a href="{{ route('inventario.edit', $in->id)}}" type="button" class="btn btn-warning">
            Editar</a>
            </td>
        </tr>
    @endforeach    
</table>
</div>
</div>