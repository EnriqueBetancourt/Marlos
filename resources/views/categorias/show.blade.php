<div class="container">
    <div class="table-responsive">
    <table class="table">
    <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>Descripcion</td>
        <td>-</td>
    </tr>
    @foreach ($categorias as $categoria)
        <tr>            
            <td>{{$categoria->id }}</td>
            <td>{{$categoria->categoria }}</td>
            <td>{{$categoria->descripcion }}</td>
            <td>
            <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
            <a href="{{ route('categorias.edit', $categoria->id)}}" type="button" class="btn btn-warning">
            Editar</a>
            </td>
        </tr>
    @endforeach    
</table>
</div>
</div>