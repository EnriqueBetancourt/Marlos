<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">

    @include('general.header')
    <div class="container main mt-4">
        <h2>Productos</h2>
       <div class="container mt-4 mb-4">
       @include('productos.create')
       </div>

       <div class="container">
       @include('productos.show')
       </div>
    </div>

    @include('general.footer')
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const buttons = document.querySelectorAll('.categoria');
        buttons.forEach(button => {
            button.addEventListener('click', function () {
                const categoriaId = this.getAttribute('data-id');
                const categoriaNombre = this.getAttribute('data-name');
                document.getElementById('categoria_id').value = categoriaId;
                document.getElementById('categoria_nombre').textContent = categoriaNombre;
            });
        });
    });
</script>
</body>
</html>