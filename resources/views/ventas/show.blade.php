<div class="container">
    <div class="table-responsive">
    <table class="table">
    <tr>
        <td>ID</td>
        <td>ID Productos</td>
        <td>Cantidad</td>
        <td>Fecha</td>
        <td>Total Venta</td>
    </tr>
    @foreach ($ventas as $venta)
        <tr>            
            <td>{{$venta->id }}</td>
            <td>{{$venta->productos_id }}</td>
            <td>{{$venta->cantidad }}</td>
            <td>{{$venta->fecha }}</td>
            <td>{{$venta->total_venta }}</td>
        </tr>
    @endforeach    
</table>
</div>
</div>