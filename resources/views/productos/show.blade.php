<div class="container">
    
    <div class="table-responsive">
    <table class="table">
    <tr>
        <td>ID</td>
        <td>ID Categoria</td>
        <td>Nombre</td>
        <td>Cantidad</td>
        <td>Cantidad_minima</td>
        <td>Impuesto</td>
        <td>Precio</td>
        <td>Costo</td>
        <td>-</td>
    </tr>
    @foreach ($productos as $producto)
        <tr>            
            <td>{{$producto->id }}</td>
            <td>{{$producto->categoria_id}}</td>
            <td>{{$producto->nombre }}</td>
            <td>{{$producto->cantidad }}</td>
            <td>{{$producto->cantidad_minima }}</td>
            <td>{{$producto->impuesto }}</td>
            <td>{{$producto->precio }}</td>
            <td>{{$producto->costo }}</td>
            <td>
            <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"> Eliminar</button>
            </form>
            <a href="{{ route('productos.edit', $producto->id)}}" type="button" class="btn btn-warning">
            Editar</a>
            </td>
        </tr>
    @endforeach    
</table>
</div>

</div>