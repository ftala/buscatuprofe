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

        .fb-page{
            position: absolute;
            left: 0;
            top: 50%;
            width: 100%;
            font-size: 18px;
            text-align: center;
        }
    </style>
</head>
<body style="background-color:rgb(20,93,133);">

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.9";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div id="header">
    <ul class="nav">
        <li><font size="5"><a href="{{ url('/') }}" >Inicio</a></font></li>
        @if (Auth::check())
            <li><font size= "5" face="tahoma"><a href="{{ url('/home') }}">Cerrar Sesión</a></font></li>
        @else
            <li><font size= "5" face="tahoma"><a href="{{ url('/login') }}">Ingreso</a></font></li>
            <li><font size= "5" face="tahoma"><a href="{{ url('/register') }}">Registro</a></font></li>
        @endif
        <li><font size="5" ><a href="{{ url('/contact') }}" >Contáctanos</a></font></li>
        <li><font size="5" ><a href="{{ url('/about') }}" >¿Quienes Somos?</a></font></li>
        <li><font size="5" ><a href="{{ url('/social') }}" >Comparte en redes sociales</a></font></li>
    </ul>
</div>

<div class="fb-page" data-href="https://www.facebook.com/Buscatuprofe-822721104559924/" data-tabs="timeline" data-width="500" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
    <blockquote cite="https://www.facebook.com/Buscatuprofe-822721104559924/" class="fb-xfbml-parse-ignore">
        <a href="https://www.facebook.com/Buscatuprofe-822721104559924/">Buscatuprofe</a></blockquote></div>
</body>
</html>