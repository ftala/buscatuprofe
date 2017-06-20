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

    <hr>
    <div id="header">
        <ul class="nav">
            <li><font size="5"><a href="{{ url('/') }}" >Inicio</a></font></li>
                    @if (Auth::check())
                <li><a href="{{ url('/home') }}">Home</a></li>
                    @else
                <li><font size= "5" face="tahoma"><a href="{{ url('/login') }}">Ingreso</a></font></li>
                <li><font size= "5" face="tahoma"><a href="{{ url('/register') }}">Registro</a></font></li>
                    @endif


            
            <li><font size="5" ><a href="{{ url('/contact') }}" >Contáctanos</a></font></li>
            
            <li><font size="5" ><a href="{{ url('/about') }}" >¿Quienes Somos?</a></font></li>
            <li><font size="5" ><a href="" >Comparte en redes sociales</a></font></li>
        
        </ul>
    
        </div>
            <table>
                <tr>
                    <td>
                        <pre>





             <IMG SRC="https://c1.staticflickr.com/5/4237/34454517884_c3fe1a44af_b.jpg" WIDTH=400 HEIGHT=400 ALT="Obra de K. Haring">
                        </pre>
                         

                    </td>
                    <td><font size="7" face="verdana">Bienvenidos al portal de Profesores particulares de la UAI!</font></td>
                </tr>
               

                
            </table>

        </pre>
        



   

</body>

</html> 