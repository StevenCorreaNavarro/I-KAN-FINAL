<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="shortcut icon" href="img/LOGOS BLANCO Y NEGRO/BLANCO.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/estilos_estilos_salidaamigos.css') }}">
    <title>I KAN</title>
</head>

<body
    style="
background: linear-gradient(#323534, #606161,#444847,#444847);
background-attachment: fixed;
background-size: cover;">
    @extends('layouts.app')

    <br><br><br><br>
    <center>
        <div class="">
            <div class=" columnas ">
                <div class="g-col-6 arreglo" style="background-color: #D4BBE2; width: 23%;">
                    {{-- <center> --}}
                    <img src="img/IMG ESTILOS/casual.jpg" alt="" style="width: 200px; ">
                    <div class="">
                        <h1>Casual</h1>
                        <h6> !Nos vestimos para impresionar a los demás o para sentirnos cómodos y seguros en nuestra
                            propia
                            piel!
                        </h6>

                        <button class="btn btn-dark">
                            {{-- **************** ruta laravel ******** --}}
                            <a href="estilocasual">
                                <h2> SELECCIONAR </h2>
                            </a>
                        </button>
                    </div>
                    {{-- </center> --}}
                </div>

                <div class="g-col-6  arreglo" style="background-color: #C9E5F6; width: 23%;">
                    {{-- <center> --}}
                    <img src="img/IMG ESTILOS/urbano (3).jpg" alt="" style="width: 200px; ; ">
                    <div class="">
                        <h1>Urbano</h1>
                        <h6> !Nos vestimos para impresionar a los demás o para sentirnos cómodos y seguros en nuestra
                            propia
                            piel!
                        </h6>

                        <button class="btn btn-dark">
                            {{-- **************** ruta laravel ******** --}}
                            <a href="estilourbano">
                                <h2> SELECCIONAR </h2>
                            </a>
                        </button>
                    </div>
                    {{-- </center> --}}
                </div>



                <div class="g-col-6  arreglo" style="background-color: #F8CBBF; width: 23%;">
                    {{-- <center> --}}
                    <img src="img/IMG ESTILOS/clasico.jpg" alt="" style="width: 200px;  ">
                    <div class="">
                        <h1>Clasico</h1>
                        <h6> !Nos vestimos para impresionar a los demás o para sentirnos cómodos y seguros en nuestra
                            propia
                            piel!
                        </h6>

                        <button class="btn btn-dark">
                            {{-- **************** ruta laravel ******** --}}
                            <a href="estiloclasico">
                                <h2> SELECCIONAR </h2>
                            </a>
                        </button>
                    </div>
                    {{-- </center> --}}
                </div>
            </div>
        </div>
    </center>
    <br><br><br><br>

    @extends('layouts.footer')

    {{-- 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script> --}}
</body>

</html>
