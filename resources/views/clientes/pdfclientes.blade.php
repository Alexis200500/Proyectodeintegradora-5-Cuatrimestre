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
</style>
<center><br><br><br>

<head>
	<title>Reporte Clientes PDF</title>
</head>
<body>

<div class="alert alert-primary" role="alert">

  </div>
	<img src="sipro.jpg" width="80" height="70"></img>
	&nbsp;&nbsp;<h1 align="center">REPORTE DE CLIENTES</h1>&nbsp;&nbsp;
	<b>{{ date('d/m/Y')}}<!--fecha--></b>
	<hr /> <!--Linea de separación-->
<table border="1" align="center">
                                        <thead>
                                            <tr>

                                                <th>Nombre</th>
                                                <th>A. Paterno</th>
                                                <th>A. Materno</th>
                                                <th>Email</th>
                                                <th>Telefono</th>
                                                <th>Dirección</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach ($clientes as $cli)


                                            <tr>
                                            <td>{{$cli->nombre}}</td>
                                            <td>{{$cli->appaterno}}</td>
                                            <td>{{$cli->apmaterno}}</td>
                                            <td>{{$cli->email}}</td>
                                            <td>{{$cli->telefono}}</td>
                                            <td>{{$cli->direccion}}</td>


                                             </tr>
                                              @endforeach
                                        </tbody>
                                    </table>
</body>
</html>
