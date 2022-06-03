<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bemusic</title>
        
        <style type="text/css">
            
            body{
            object-fit: cover;
            background-size: cover;
            color: rgb(0, 0, 0);
            height: 800px;
            background-size: cover;
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
            margin: 0%;
            text-align: center;
        }

        /*Coloca la lista del menú en horizontal, Añade el colo de fondo, centra el menu y
        ajusta los márgenes*/
        .menu ul{
            display:flex;
            list-style:none;
            padding:0;
            text-align: center; 
            background-color: rgb(255, 217, 0);
                
        }

        /*Ajusta el menu al monitor*/
        .menu ul li{
          width:100%;
        }
        
        /*Crea un efecto de transición y ajusta el texto al ancho del menu*/
        .menu ul li a{
            text-decoration:none;
            padding:2em;
            border-color:#000000;
            color:rgb(0, 0, 0);
            display: block; 
            -webkit-transition: background-color 0.4s linear;
            transition: background-color 0.4s linear;   
        }

        /*Asigna el color al que cambia al poner el ratón*/
        .menu ul li a:hover{
            background-color: rgb(255, 255, 255);
        }

        </style>
    </head>
    <body class="antialiased">

            <h1>Servicios</h1>
    <br>
    <nav class="menu ul">
        <ul> 
            <li><b><a class="navbar-brand" href="{{ url('/') }}">Inicio</a></b></li>
            <li><b><a class="navbar-brand" href="{{ url('/buscar') }}">Buscar</a></b></li>
            <li><b><a class="navbar-brand" href="{{ url('/contacto') }}">Contacto</a></b></li>
            <li><b>
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Usuario</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Iniciar sesión</a>

                        @if (Route::has('Registrarse'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif
            </a></b></li>
            <li><b><a class="navbar-brand" href="{{ url('/instrumentos') }}">Mis instrumentos</a></b></li>
        </ul>
    </nav>
    
    <div class="contenedor">
      <img src="https://www.semana.com/resizer/CHWAm8KSlfr1Qbqvv6XJ-4QMXXs=/1200x675/filters:format(jpg):quality(50)//cloudfront-us-east-1.images.arcpublishing.com/semana/BNZ4D7SPLFEITNV4US3O6XVUAA.jpg" height="450" width="60%">
        <h1><div class="centrado"><a href="">Instrumentos</a></div></h1>
      </div>
    <br>    
      <div class="contenedor">
      <img src="https://www.cocktailband.es/wp-content/uploads/2020/11/COMO-ENCONTRAR-LAS-MEJORES-BANDAS-DE-JAZZ-PARA-BODAS-Y-EVENTOS-1200x675.jpg" height="450" width="60%">
        <h1><div class="centrado"><a href="">Grupos</a></div></h1>
      </div>
    <br>
    <div class="contenedor">
        <img src="https://mixo.com.mx/wp-content/uploads/2021/03/pexels-torsten-dettlaff-2876659-1200x675.jpg" height="450" width="60%">
            <h1>    <div style="color: rgb(0, 0, 0);" class="centrado" href="">Clases</div></h1>
          </div>
        <br>
        
          <div class="contenedor">
          <img src="https://www.videoson.es/wp-content/uploads/2018/04/grabacion-sonido-alta-calidad.jpg" height="450" width="60%">
            <h1><div class="centrado"><a href="">Equipo</a></div></h1>
          </div>
        <br>
        <div class="contenedor">
            <img src="https://www.elregalomusical.com/wp-content/uploads/2018/02/como-hacer-una-web-para-musicos.jpg" height="450" width="60%">
                <h1>    <div style="color: rgb(0, 0, 0);" class="centrado" href="">Musicos</div></h1>
              </div>
            <br>  

    </body>
</html>
