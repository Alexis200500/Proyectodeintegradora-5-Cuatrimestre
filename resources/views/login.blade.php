<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>

    <div class="login-box">
      <img src="img/logo.png" class="avatar" alt="Avatar Image">
      <h1>Login</h1> <br><br>

      
      @if (Session::has('cambio'))
      <div>{{ Session::get('cambio') }}</div> <br>
      @endif
      
      <form action="{{route('valida')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <!-- USERNAME INPUT -->


        <label>Correo Electronico</label>
        <input type="text" name="email">
        <!-- PASSWORD INPUT -->
        <label>Password</label>
        <input type="password" name="password">
        <input type="submit" value="Ingresar">

                            @if (Session::has('error'))
                                    <div>{{ Session::get('error') }}</div> <br>
                                    
                            @endif
        <a href="{{route('recuperar')}}">Recuperar Contraseña</a><br>    
      </form>
    </div>
  </body>
</html>