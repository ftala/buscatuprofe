<!doctype html>
<html>
    <head>
        <title>Usuario1</title>


        <style type="text/css">


        	h1{
        		color:rgb(200,203,207);
        		font-family: tahoma;
        	}

        	h2{
        		color:rgb(200,203,207);
        		font-family: tahoma;

        	}

        </style>

    </head>
    <body style="background-color:rgb(20,93,133);">




        <h1>{{ $user->nombre }}</h1>

        <h2><font size="4">{{ $user->mail }} </font></h2>
    </body>
</html>