<!doctype html>
<html>
<head>
    <title>Perfil de {{ $user ->name }}</title>
    <style type="text/css">
        html, body{
            font-family: tahoma;
            color: rgb(200,203,207);
        }
        h1{
            font-family: tahoma;
            font-size: 7;
        }
        
        *{
            padding:0px;
            margin 0px;  
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
            <li><font size="5"><a href="{{ url('/') }}" >Inicio</a></font></li>
                    @if (Auth::check())
                <li><a href="{{ url('/home') }}">Home</a></li>
                    @else
                <li><font size= "5" face="tahoma"><a href="{{ url('/login') }}">Login</a></font></li>
                <li><font size= "5" face="tahoma"><a href="{{ url('/register') }}">Register</a></font></li>
                    @endif


            
            <li><font size="5" ><a href="" >Contáctanos</a></font></li>
            
            <li><font size="5" ><a href="" >¿Quienes Somos?</a></font></li>
            <li><font size="5" ><a href="" >Comparte en redes sociales</a></font></li>
        
        </ul>
    
        </div>
        <table>
            <ul>
                <pre>




                    <h1>Bienvenido {{ $user->name }}!</h1>

                </pre>
                
            </ul>

            <ul><h2>{{$user->email}}</h2>
            </ul>

        </table>





    
</body>
</html>
