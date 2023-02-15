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
	<title>Reporte Productos PDF</title>
</head>
<body>

<div class="alert alert-primary" role="alert">

  </div>
	<img src="sipro.jpg" width="80" height="70"></img>
	&nbsp;&nbsp;<h1 align="center">REPORTE DE PRODUCTOS</h1>&nbsp;&nbsp;
	<b>{{ date('d/m/Y')}}<!--fecha--></b>
	<hr /> <!--Linea de separación-->
<table border="1" align="center">
                                        <thead>
                                            <tr>
                                                <th>Producto</th>
                                                <th>Serie</th>
                                                <th>Caracteristica</th>
                                                <th>Falla</th>
                                                <th>Cantidad</th>
                                                <th>Precio</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach ($productos as $pro)


                                            <tr>
                                              <td>{{$pro->producto}}</td>
                                               <td>{{$pro->serie}}</td>
                                            <td>{{$pro->caracteristicas}}</td>
                                            <td>{{$pro->falla}}</td>
                                            <td>{{$pro->cantidad}}</td>
                                            <td>{{$pro->precio}}</td>


                                             </tr>
                                              @endforeach
                                        </tbody>
                                    </table>

</body>
</html>
