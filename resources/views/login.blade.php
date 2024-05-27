<!doctype html>
<html lang="es">
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/carrucel.css')}}">
    <link rel="stylesheet" href="{{asset('css/general.css')}}">
</head>
<body>
    @include('general.header')

    <div class="container mt-4 px-2 main" >
    <section class="">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="{{asset('img/logo.jpeg')}}"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
    
      <form method="POST" id="formulario" action="{{ route('login') }}">
        @csrf
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Iniciar con </p>
            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">O</p>
          </div>

          <div>
            <x-input-label class="form-label" for="email" :value="__('Email')" />
            <x-text-input id="email" class="form-control form-control-lg"
              placeholder="Ingresa tu correo"  name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="form-control form-control-lg"
              placeholder="Ingresa tu contraseña"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

          <div class="text-center text-lg-start mt-4 pt-2">
          <x-primary-button class="btn btn-primary btn-lg">
                {{ __('Log in') }}
            </x-primary-button>
          </div>
        </form>
        <div id="mensaje-error" class="mt-3" style="color: red;"></div>
      </div>
    </div>
  </div>
</div>
</section>
    </div>
    @include('general.footer')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a904d9ef4d.js" crossorigin="anonymous"></script>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
                <script>
                    $(document).ready(function () {
                        $('#formulario').submit(function (event) {
                            var constraints = {
                                email: {
                                    presence: true,
                                    email: {
                                        message: "No es un formato de correo electrónico válido"
                                    },
                                    format: {
                                        pattern: /^[^0-9][a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/,
                                        message: "Debe ser un correo electrónico válido"
                                    }
                                },
                                password: {
                                    presence: true,
                                    length: {
                                        minimum: 8,
                                        message: "Contraseña minimo de 8 caracteres"
                                    }
                                }
                            };

                            var formData = {
                                email: $('#email').val(),
                                password: $('#password').val()
                            };

                            var errors = validate(formData, constraints);
                            if (errors) {
                                event.preventDefault();
                                var errorMessage = '';
                                if (errors.email) {
                                    errorMessage += errors.email.join('<br>');
                                }
                                if (errors.password) {
                                    errorMessage += '<br>' + errors.password.join('<br>');
                                }
                                $('#mensaje-error').html(errorMessage);
                            } else {
                                $('#mensaje-error').html('');
                            }
                        });
                    });
                </script>

</body>
</html>
