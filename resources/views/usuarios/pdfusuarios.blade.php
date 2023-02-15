<!DOCTYPE html>
<html>
<style>
table{

	background: #26de81;
	color: #ff3838;
	font-family: 'Cinzel', serif;
	width: 90%;
		}

	th{
		background: #e84118;
		color: white;
	}
	td{
		background: #f5f6fa;
		color: black;
	}
	body{
		background-image: url("sipro.jpg");
		opacity: 0.5;
	}
	hr{
		height: 3px;
background-color: red;
	}

	img{
		opacity: 1.0;
	}
</style>
<head>
	<title>Reporte USUARIOS PDF</title>
</head>
<body>

<div class="alert alert-primary" role="alert">

  </div>
	<img src="sipro.jpg" width="80" height="70"></img>
	&nbsp;&nbsp;<h1 align="center">REPORTE DE USUARIOS</h1>&nbsp;&nbsp;
	<b>{{ date('d/m/Y')}}<!--fecha--></b>
	<hr /> <!--Linea de separación-->
<body>



            <table border="1" align="center">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Usuario</th>
                                                <th>Email</th>
                                                <th>Password</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach ($usuarios as $usu)


                                            <tr>
                                              <td>{{$usu->idusuario}}</td>
                                            <td>{{$usu->nombre}}</td>
                                            <td>{{$usu->usuario}}</td>
                                            <td>{{$usu->email}}</td>
                                            <td>{{$usu->password}}</td>


                                             </tr>
                                              @endforeach
                                        </tbody>
                                    </table>
</body>
</html>
