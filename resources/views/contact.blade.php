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

    </style>

</head>
<body style="background-color:rgb(20,93,133);">


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
    <pre>


    	    <h2>Envianos un mensaje:</h2>


		<center>

<!-- Do not change the code! -->
<a id="foxyform_embed_link_312955" href="http://es.foxyform.com/">foxyform</a>
<script type="text/javascript">
(function(d, t){
   var g = d.createElement(t),
       s = d.getElementsByTagName(t)[0];
   g.src = "http://es.foxyform.com/js.php?id=312955&sec_hash=ecbc2f65e78&width=350px";
   s.parentNode.insertBefore(g, s);
}(document, "script"));
</script>
<!-- Do not change the code! -->
	</center>
</pre>	
</body>
</html>