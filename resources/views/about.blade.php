<!doctype html>
<html>
	<head>
		<title>¿Quienes Somos?</title>
		<style type="text/css">

			html, body{
				font-family: verdana;
				font-size: 15px;
				color: rgb(200,203,207);
			}
			h1{
				font-family: tahoma;
			}

			h2{
				font-family: verdana;
				font-size: 5;

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


            
            <li><font size="5" ><a href="{{ url('/contact') }}" >Contáctanos</a></font></li>
            
            <li><font size="5" ><a href="{{ url('/about') }}" >¿Quienes Somos?</a></font></li>
            <li><font size="5" ><a href="" >Comparte en redes sociales</a></font></li>
        
        </ul>
    
        </div>

        <pre>




           
        	<h1>
              BuscaTuProfe nace con la intención de ayudar a los alumnos
              de la Univesidad Adolfo Ibañez a buscar ayuda con sus mismos
              compañeros, fomentando así:
              <font size="5" face="tahoma">

              		   - Facilitar el sistema de pagos entre quienes utilizen el sistema.

              		   - Encontrar de manera rápida y eficiente la ayuda necesaria.

              		   - Ubicar a aquellos profesores que tienen la disponibilidad requerida.
              </font>
        	</h1>
        	<h2>
      			<a href="{{ url('/register') }}" style="text-decoration:none;color:rgb(200,203,207)">

      	       <center>Registrate Aquí!</center>

      			</a>
            
        	</h2>
      
        </pre>

	</body>
</html>
