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
	<title>Reporte EMPLEADOS PDF</title>
</head>
<body>

<div class="alert alert-primary" role="alert">

  </div>
	<img src="sipro.jpg" width="80" height="70"></img>
	&nbsp;&nbsp;<h1 align="center">REPORTE DE EMPLEADOS</h1>&nbsp;&nbsp;
	<b>{{ date('d/m/Y')}}<!--fecha--></b>
	<hr /> <!--Linea de separación-->
<table border="1" align="center">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>A. Paterno</th>
                                                <th>A. Materno</th>
                                                <th>Telefono</th>
                                                <th>Direccion</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach ($empleados as $emp)


                                            <tr>
                                              <td>{{$emp->idemp}}</td>
                                            <td>{{$emp->nombre}}</td>
                                            <td>{{$emp->appat}}</td>
                                            <td>{{$emp->apmat}}</td>
                                            <td>{{$emp->telefono}}</td>
                                            <td>{{$emp->direccion}}</td>


                                             </tr>
                                              @endforeach
                                        </tbody>
                                    </table>

</body>
</html>
