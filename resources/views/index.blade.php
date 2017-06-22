<!doctype html>
<html>
<head>
    <title>BuscaTuProfe!</title>
    <style type="text/css">
    	html, body{
            font-family: tahoma;
            color: rgb(200,203,207);
    	}

        *{
            padding:0;
        }

        #header{
            width: 1072px;
            margin: 0 auto;
        }

        ul,ol{
            list-style:none;
        }
        .nav li a{
            background-color: rgb(20,93,133);
            color: rgb(200,203,207);
            text-decoration: none;
            padding:10px 20px;
            display:inline;
        }
        .nav li a:hover{
            background-color:rgb(0,166,242);

        }
        .nav > li{
            float:left;
        }
        .nav li ul{
            display:inline;
            position: absolute;
            min-width: 140px;
        }
        .nav li:hover > ul{
            display: inline;
        }
        img{
            border:none;
        }
        h3{
        	font-family: verdana;
        }
        h2{
        	font-family: tahoma;
        }
    </style>
</head>
<body style="background-color:rgb(20,93,133);">

    <div id="header">
        <ul class="nav">
            <li><font size="5"><a href="{{ url('/') }}" >Inicio</a></font></li>
                    @if (Auth::check())
                <li><font size= "5" face="tahoma"><a href="{{ url('/home') }}">Cerrar Sesión</a></font>/li>
                    @else
                <li><font size= "5" face="tahoma"><a href="{{ url('/login') }}">Ingreso</a></font></li>
                <li><font size= "5" face="tahoma"><a href="{{ url('/register') }}">Registro</a></font></li>
                    @endif
                <li><font size="5" ><a href="{{ url('/contact') }}" >Contáctanos</a></font></li>
                <li><font size="5" ><a href="{{ url('/about') }}" >¿Quienes Somos?</a></font></li>
                <li><font size="5" ><a href="{{ url('/social') }}" >Comparte en redes sociales</a></font></li>
        </ul>
    </div>
            <table>
                <tr>
                    <td>
                        <pre>





             <IMG SRC="https://preview.ibb.co/jvbO3Q/Busca_Tu_Profe_Logo.png" WIDTH=400 HEIGHT=400 ALT="BuscaTuProfe!">
                        </pre>
                         

                    </td>
                    <td><font size="7" face="verdana">Bienvenidos al portal de Profesores particulares de la UAI!</font></td>
                </tr>
               

                
            </table>

        </pre>
        



   

</body>

</html> 