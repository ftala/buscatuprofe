<!doctype html>
<html>
<head>
    <title>BuscaTuProfe!</title>
    <link rel="stylesheet" type="text/css" href="Fuentes/fuentes.css"/>
    <style type="text/css">
    	html, body{
    		font-family: verdana;
    	}
        
        *{
            padding:0px;
            margin:0px;
        }
        #header{
            
            margin:auto;
        }
        
        ul,ol{
            list-style:none;
        }
        .nav li a{
            background-color: rgb(20,93,133);
            color:rgb(200,203,207);
            text-decoration: none;
            padding:10px 20px;
            display:block;
        }
        .nav li a:hover{
            background-color:rgb(0,166,242);
            
        }
        .nav > li{
            float:left;
        }
        .nav li ul{
            display:none;
            position: absolute;
            min-width: 140px;
        }
        .nav li:hover > ul{
            display: block;
        }
        img{
            border:rgb(200,203,207) 4px solid;
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
            <li><font size="5"><a href="" >Inicio</a></font></li>
                    @if (Auth::check())
                <li><a href="{{ url('/home') }}">Home</a></li>
                    @else
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
                    @endif


            
            <li><font size="5" ><a href="" >Contáctanos</a></font></li>
            
            <li><font size="5" ><a href="" >¿Quienes Somos?</a></font></li>
            <li><font size="5" ><a href="" >Comparte en redes sociales</a></font></li>
        
        </ul>
    
        </div>
        <table> 
            <tr>
            <td>
                <pre>
             <pre>  
                <img src="https://c1.staticflickr.com/5/4237/34454517884_c3fe1a44af_n.jpg">
            </pre>
                </pre>
             </td>
            <td>
                <pre>
                    <h2 style="color:rgb(200,203,207)">
                    <font size="10">        
                    
      ¡Bienvenidos al portal 
      de profesores
      particulares de la UAI!
                    </font>
                    </h2>

                    <h3><font size="5"><center><a href="{{ url('/register') }}" style="text-decoration:none;color:rgb(200,203,207)" >¡Registrate ya!</a></center></font></h3>

                </pre>
                
            </td>
            </tr>  
    
        </table>
   

</body>

</html> 