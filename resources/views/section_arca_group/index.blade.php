<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/LOGO_OFICIAL_ARCA.png" type="image/x-icon">
    <link rel="stylesheet" href="css/section_arca_group/web.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;1,300&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <title>Arca-Group</title>
</head>

<body>
    <header>
        <div>
            <a href="/">
                <img src="img/LOGO_OFICIAL_ARCA.png" width="auto" alt="" srcset="">
                <p>Arca Group</p>
            </a>
        </div>
        <div>
            <p>Somos una empresa de capital humano.</p>
            <p>"Historia de exíto fundada sobre la roca."</p>
        </div>
    </header>
    @if($errors->first())
    <div class="alert alert-red" style="text-align:center">

        <p>Error en el formulario</p>
    </div>
    @endif
     
    @if(Session::has('mensaje'))

    <div class="alert alert-success" style="text-align:center">

        {{ Session::get('mensaje') }}</div>

    @endif
    <section>
        <article>
            <h1>Servicios</h1>
            <div class="servicios">
                <div class="caja">

                    <!-- caja -->
                    <div class="tarjeta">
                        <div class="tarjeta-imagen">
                            <img src="img/section_arca_group/Captura de pantalla 2022-10-25 102939(1).png" height="100%" alt="" srcset="">
                        </div>
                        <div class="info">
                            <div class="vacio"></div>
                            <div class="lincks">
                                <h1>REDES DE RECLUTAMIENTO<br>Y SELECCIÓN</h1><button>Mas información.</button>
                            </div>
                        </div>
                    </div>
                    <div class="tarjeta">
                        <div class="tarjeta-imagen">
                            <img src="img/section_arca_group/upc(1).png" height="70%" alt="" srcset="">
                        </div>
                        <div class="info">
                            <div class="vacio"></div>
                            <div class="lincks">
                                <h1>NÓMINAS MAQUILA<br>Y PAY ROLL</h1><button>Mas información.</button>
                            </div>
                        </div>
                    </div>
                    <div class="tarjeta">
                        <div class="tarjeta-imagen">
                            <img src="img/section_arca_group/Logo_Prov_Trusty(1).png" height="100%" alt="" srcset="">
                        </div>
                        <div class="info">
                            <div class="vacio"></div>
                            <div class="lincks">
                                <h1>LA PRUEBA <br> PROV-TRUSTY®</h1><a href="http://prov-trusty.arcagroup.com.mx/"><button>Mas información.</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="caja">
                    <!-- caja -->
                    <div class="tarjeta">
                        <div class="tarjeta-imagen">
                            <img src="img/section_arca_group/Logo_Prov_Trusty(1).png" height="100%" alt="" srcset="">
                        </div>
                        <div class="info">
                            <div class="vacio"></div>
                            <div class="lincks">
                                <h1>UNIFORMES<br>INDUSTRIALES</h1><a href="#"><button>Mas información.</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="tarjeta">
                        <div class="tarjeta-imagen">
                            <img src="img/section_arca_group/tecnologia(1).png" height="70%" alt="" srcset="">
                        </div>
                        <div class="info">
                            <div class="vacio"></div>
                            <div class="lincks">
                                <h1>CONTROL DE<br>CONFIANZA</h1><button>Mas información.</button>
                            </div>
                        </div>
                    </div>
                    <div class="tarjeta">
                        <div class="tarjeta-imagen">
                            <img src="img/section_arca_group/Logo_Prov_Trusty(1).png" height="100%" alt="" srcset="">
                        </div>
                        <div class="info">
                            <div class="vacio"></div>
                            <div class="lincks">
                                <h1>SERVICIOS <br> ESPECIALIZADOS</h1><button>Mas información.</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <h1>Contactanos</h1>
            <div class="conten">
                <form action="contacto" method="Post">
                    {{csrf_field()}}

                    <div class="formulario">

                        <h3>Datos personales</h3>
                        <div class="caja-input-persona">
                            <div class="inputs-datos">
                                <input type="text" name="nombre" id="nombre" placeholder="Nombre*"
                                    value="{{ old('nombre') }}">
                                @if($errors->first('nombre'))
                                <p style="color: red">{{$errors->first('nombre')}}</p>
                                @endif
                            </div>
                            <div class="inputs-datos">
                                <input type="text" name="app" id="app" placeholder="Apellido Paterno*"
                                    value="{{ old('app') }}">
                                @if($errors->first('app'))
                                <p style="color: red">{{$errors->first('app')}}</p>
                                @endif

                            </div>
                            <div class="inputs-datos">
                                <input type="text" name="apm" id="apm" placeholder="Apellido Materno*"
                                    value="{{ old('apm') }}">
                                @if($errors->first('apm'))
                                <p style="color: red">{{$errors->first('apm')}}</p>
                                @endif
                            </div>
                            <div class="inputs-datos">
                                <input type="text" name="cargo" id="cargo" placeholder="Cargo*"
                                    value="{{ old('cargo') }}">
                                @if($errors->first('cargo'))
                                <p style="color: red">{{$errors->first('cargo')}}</p>
                                @endif
                            </div>
                        </div>
                        <h3>Datos de la empresa</h3>
                        <div class="caja-input-empresa">
                            <div class="inputs-datos">
                                <input type="text" name="empresa" id="empresa" placeholder="Empresa*"
                                    value="{{ old('empresa') }}">
                                @if($errors->first('empresa'))
                                <p style="color: red">{{$errors->first('empresa')}}</p>
                                @endif

                            </div>
                            <div class="inputs-datos">
                                <input type="email" name="email" id="email" placeholder="Correo*"
                                    value="{{ old('email') }}">
                                @if($errors->first('email'))
                                <p style="color: red">{{$errors->first('email')}}</p>
                                @endif

                            </div>
                            <div class="inputs-datos">
                                <input type="text" name="telefono" id="telefono" placeholder="Telefono*"
                                    value="{{ old('telefono') }}">
                                @if($errors->first('telefono'))
                                <p style="color: red">{{$errors->first('telefono')}}</p>
                                @endif

                            </div>
                            <div class="inputs-datos">
                                <input type="text" name="ubicacion" id="ubicacion" placeholder="Ubicación*"
                                    value="{{ old('ubicacion') }}">
                                @if($errors->first('ubicacion'))
                                <p style="color: red">{{$errors->first('ubicacion')}}</p>
                                @endif
                            </div>
                        </div>
                        <textarea name="info" id="info" placeholder="¿Cuáles son tus necesidades?*"></textarea>
                        @if($errors->first('info'))
                        <p style="color: red">{{$errors->first('info')}}</p>
                        @endif
                    </div>
                    <input type="submit" class="button" id="enviar" value="Enviar">
                    <div class="info-contacto">
                        <div class="telefonos">
                            <h5>Telefonos</h5>
                            <p>+52 1 722 684 5825</p>
                            <p>+52 1 554 564 3397</p>
                        </div>
                        <div class="Emails">
                            <h5>Email</h5>
                            <p>contacto@arcagroup.com.mx</p>
                        </div>
                        <div class="direcciones">
                            <h5>Dirección</h5>
                            <p>Paseo de los Sauses #3 Colonia
                                centro, Lerma de Villada, Edo.
                                Méx</p>
                        </div>
                    </div>
                </form>
            </div>
        </article>
    </section>

</body>

</html>