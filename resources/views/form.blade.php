@extends('layauts.index')
@section('title')
@section('content')

    <style>
        .linea {
            border-bottom: solid 1px black;
            width: 100%;
        }
    </style>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class=" p-5 " style="width: 500px">

            <div class="d-flex justify-content-center">
                <div class="image">
                    <img class="" width="75px"
                        src="https://logos-world.net/wp-content/uploads/2020/08/PayPal-Symbol.png" alt="">
                </div>

            </div>
            <form class="mt-5" action="{{ route('sistemas.store') }}" method="post">
                @csrf

                <div class="form-floating">
                    <input class="form-control" type="text" id="correo" name="correo"
                        placeholder="Correo electronico o numero de celular">
                    <label for="correo">Correo electronico o numero de celular</label>

                </div>

                <div class="form-floating my-3">
                    <input class="form-control" type="text" id="password" name="password" placeholder="Password">
                    <label for="password">Contraseña</label>

                </div>
                <div class="my-2">
                    <a class="fw-bold text-primary" style="text-decoration: none" href="">¿Ha olvidado su
                        contraseña?</a>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="mt-2">
                        <input class="btn  btn-lg  text-light" style="width: 350px;background:#142c8e;border-radius:20px"
                            value="Iniciar sesion" type="submit">

                    </div>

                </div>


                <div class="d-flex justify-content-center ">
                    <div class="linea">

                    </div>
                    <div>
                        o
                    </div>
                    <div class="linea">

                    </div>
                </div>
                <div class="text-center mt-4 ">

                    <a class="btn btn-outline-dark btn-lg w-75" style="border-radius: 20px">Registrarse</a>
                </div>

            </form>
        </div>
    </div>

    </div>



@endsection
