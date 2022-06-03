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

       .Lista{
           padding-top: 20px;
           column-count: 3;
       }

       </style>
    </head>
    <body class="antialiased">

            <h1>Instrumentos</h1>
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
    <h1><u>Orden Alfabético</u></h1>
    <br>

    <div class="Lista">
        <p><b><u>Instrumentos Musicales con A</u></b></p>
            <p>acordeón</p>
            <p>agogô</p>
            <p>ajaeng</p>
            <p>albogue</p>
            <p>almirez</p>
            <p>angklung</p>
            <p>antara</p>
            <p>arco de diddley</p>
            <p>arco percutor</p>
            <p>ardin</p>
            <p>armónica</p>
            <p>armonio</p>
            <p>armonio de fuelle manual</p>
            <p>arpa</p>
            <p>arpa jarocha</p>
            <p>arpa llanera</p>
            <p>arpa paraguaya</p>
            <p>arrabel</p>
            <p>ashiko</p>
            <p>asor</p>
            <p>atabaque</p>
            <p>ayotl</p>
            <p>azusayumi</p>
    
            <p><b><u>Instrumentos Musicales con B</u></b></p>
           <p>bachi</p>
           <p>bağlama</p>
           <p>baglamás</p>
           <p>bajo</p>
           <p>bajo sexto</p>
           <p>balafón</p>
           <p>balalaika</p>
           <p>bamboula</p>
           <p>bandola</p>
           <p>bandola andina colombiana</p>
           <p>bandolín tachirense</p>
           <p>bandolón</p>
           <p>bandura</p>
           <p>bandurria</p>
           <p>banja</p>
           <p>bansuri</p>
           <p>banyo</p>
           <p>barril de bomba</p>
           <p>batá</p>
           <p>batería</p>
           <p>begena</p>
           <p>bendir</p>
           <p>berimbáu</p>
           <p>bianqing</p>
           <p>bianzhong</p>
           <p>bianzhong del marqués de Yi de zeng</p>
           <p>binzasara</p>
           <p>birimbao</p>
           <p>binioù o gaita bretona</p>
           <p>biwa</p>
           <p>bodhrán o pandero irlandés</p>
           <p>bolon</p>
           <p>bombo</p>
           <p>bombo legüero</p>
           <p>bongo</p>
           <p>botella de anís</p>
           <p>bougarabou</p>
           <p>buk</p>
           <p>bulbul tarang</p>
           <p>buzuk</p>
           <p>buzuki</p>
    
            <p><b><u>Instrumentos Musicales con C</u></b></p>
            <p>cacalachtli</p>
            <p>caja</p>
            <p>caja rítmica afroperuana</p>
            <p>caja vallenata</p>
            <p>cajón</p>
            <p>cajón de rumba</p>
            <p>calabaza  o calabash o shekeré</p>
            <p>campana</p>
            <p>campanas tubulares</p>
            <p>cantaro</p>
            <p>caña de millo</p>
            <p>capador</p>
            <p>carcabas</p>
            <p>carraca</p>
            <p>carrillón</p>
            <p>cartonal</p>
            <p>castañuelas</p>
            <p>cataquí</p>
            <p>cavaquiño</p>
            <p>celesta</p>
            <p>cencerro</p>
            <p>chajchas</p>
            <p>chande</p>
            <p>chapareque</p>
            <p>charango</p>
            <p>checo</p>
            <p>chequeré</p>
            <p>chenda</p>
            <p>chinesco, cevgen o cresciente turco</p>
            <p>cimbalom o címbalo húngaro</p>
            <p>cítara</p>
            <p>clarin</p>
            <p>clarin cajamarquino</p>
            <p>clarinete</p>
            <p>clarinete bajo</p>
            <p>clarinete en si bemol</p>
            <p>clave</p>
            <p>clavecin</p>
            <p>clavicordio</p>
            <p>conga</p>
            <p>contrabajo</p>
            <p>cordófonos concheros</p>
            <p>corneta</p>
            <p>corneta china</p>
            <p>corno inglés</p>
            <p>crótalos</p>
            <p>cuatro puertoriqueño</p>
            <p>cuatro venezolano</p>
            <p>cuchara</p>
            <p>cuica</p>
            <p>cumbús</p>

    </div>

</body>
</html>