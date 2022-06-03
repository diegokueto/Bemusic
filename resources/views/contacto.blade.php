<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BeMusic</title>
    
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

        p{
            margin: 0 auto;
            width: 85%;
            max-width: 850px;

        }

        h1{
            text-align: center;
        }

        table{
            margin-top: 50px;
            caption-side: botton;
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
        }

        td{
            border: 2px solid black;
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 101px;
            padding-bottom: 100px;
        }
        
        .tecla{
            background-color: black;
            color: white;
        }

        </style>
    </head>
    <body class="antialiased">

            <h1>Contacto</h1>
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
<br>
<div class="parrafo">
    <b><p>Aqui encontrarás una lista de links de las páginas de contacto de diferentes tiendas tanto 
        fisicas como On-line. Ademas de esto tenemos contactos de algunos locales donde puedes 
        ensayar con tu grupo o incluso bares donde puedes ir a lucirte.En resumen todo los números 
        que necesitas para empezar a comprar tus instrumentos e ir abriendote camino como músico. </p>
    </b>
</div>
<br>
<h1><u>SERVICIOS</u></h1>
<div class="table">

    <table>
    <tr>
        <td class="tecla">TIENDAS DE MÚSICA</td>   
        <td></td>
        <td class="tecla">CLASES</td>
    </tr>
    <tr>
        <td></td>
        <td class="tecla">TOCAR EN LA CALLE</td>
        <td></td>
    </tr> 
    <tr>
        <td class="tecla">LOCALES DE ENSAYO</td>
        <td></td>
        <td class="tecla">BARES</td>
    </tr>
    <tr>
        <td></td>
        <td class="tecla">REDES SOCIALES</td>
        <td></td>
    </tr> 
</table>
</div>


</body>
</html>