<!doctype html>
<html>
	<head>
		<title>Perfil</title>
		<style type="text/css">

			html, body{
				font-family: tahoma;
				background-color: rgb(20,93,133);
				color: rgb(200,203,207);
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
        </style>
	</head>
	<body style="background-color:rgb(20,93,133);">


		 <div id="header">
        	<ul class="nav">
            	<li><font size="5"><a href="" >Inicio</a></font></li>
            
            	<li><font size="5"><a href="" >Cuenta</a></font>
                	<ul>
                    	<li><font size="4" ><a href="" >Acceso Profesores</a></font></li>
                    	<li><font size="4"><a href="" >Acceso Alumno</a></font></li>
                    	<li><font size="4"><a href="" >Usuario nuevo</a></font></li>
                
                
                	</ul>
            	</li>
            
            	<li><font size="5" ><a href="" >Contáctanos</a></font></li>
            
            	<li><font size="5" ><a href="" >¿Quienes Somos?</a></font></li>
            	<li><font size="5" ><a href="" >Comparte en redes sociales</a></font></li>
        
        	</ul>
    
        </div>

        <pre>







        	<table>
        		<ul>
        			<li>
        				<font size="4" face="verdana">
        	<li>Los datos del usuario son:</li>
        				</font>
        			</li>
        			<li>
        				<font size="4" face="verdana">

        	@foreach ($usuario as $user)

        		<li>{{ $user->nombre }}</li>

        	@endforeach

        
        				</font>

        			</li>

        		</ul>

        	</table>
    	</pre>



	</body>
</html>