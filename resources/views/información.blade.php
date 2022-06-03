<!DOCTYPE html>
<html>
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

            <h1>Información</h1>
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
        <br>
    <div class="contenedor">
    <img src="https://i0.wp.com/flautadepico.consev.es/wp-content/uploads/2014/06/modelos-de-flautas.jpg?fit=1000%2C372&ssl=1" height="350" width="50%">
    <h1><div class="centrado"><a href="">Flauta</a></div></h1>
    </div>
    <br>
    <br>
    <div class="contenedor">
    <img src="https://24b3f6.medialib.edu.glogster.com/NtN9vXn7h289lwMxFsLQ/media/99/99de4e7b2a84cab0063997ec4876c934f7516fcf/ukelele.png" height="350" width="50%">
    <h1><div class="centrado"><a href="">Ukelele</a></div></h1>
    </div>
    <br>
    <br>
    <div class="contenedor">
    <img src="https://www.casioteclados.com/wp-content/uploads/2020/12/pianos-hibridos.jpg" height="350" width="50%">
    <h1><div class="centrado"><a href="">Piano</a></div></h1>
    </div>
    <br>
    <br>
    <div class="contenedor">
    <img src="https://thumbs.dreamstime.com/b/un-m%C3%BAsico-que-toca-concierto-de-rock-la-guitarra-ac%C3%BAstica-bandera-horizontal-el-espacio-copia-su-texto-201901813.jpg" height="350" width="50%">
    <h1><div class="centrado"><a href="">Guitarra</a></div></h1>
    </div>
    <br>
    <br>
    <div class="contenedor">
    <img src="https://media.istockphoto.com/photos/closeup-of-a-violin-and-bow-horizontal-image-on-wooden-background-picture-id1126648957?k=20&m=1126648957&s=170667a&w=0&h=JU1bGfhPlDz34D0YCgTBc16kW_Ijw4kPX5UH9x20jLM=" height="350" width="50%">
    <h1><div class="centrado"><a href="">Violin</a></div></h1>
    </div>
    <br>
    <br>
    <div class="contenedor">
    <img src="https://www.fredyarmonica.net/wp-content/uploads/2019/04/armonica-partitura.jpg" height="350" width="50%">
    <h1><div class="centrado"><a href="">Armónica</a></div></h1>
    </div>
    <br>
    <br>
    <div class="contenedor">
    <img src="https://musicopolix.com/blog/wp-content/uploads/2014/08/tipo-flauta-instrumento-musical-1024x683.jpeg" height="350" width="50%">
    <h1><div class="centrado"><a href="">Flauta(travesera)</a></div></h1>
    </div>
    <br>
    <br>
    <div class="contenedor">
    <img src="https://cdn.pixabay.com/photo/2017/10/05/21/16/cello-2820989__340.jpg" height="350" width="50%">
    <h1><div class="centrado"><a href="">Chelo</a></div></h1>
    </div>
    <br>
    <br>
    </body>
</html>
