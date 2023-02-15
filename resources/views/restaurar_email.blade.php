<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
    <link rel="stylesheet" href="css/master1.css">
  </head>
  <body>

    <div class="login-box">
      <img src="img/logo.png" class="avatar" alt="Avatar Image">
      <h1>Recuperar Contraseña</h1>
      <br><br>

      @if (Session::has('no'))
      <div>{{ Session::get('no') }}</div> <br>
      @endif
      
      <form action="{{route('restaurar')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <!-- USERNAME INPUT -->
        <label>Correo Electronico</label>
        <input type="text" name="email">
        <input type="submit" value="Recuperar Contraseña">
      </form>
    </div>
  </body>
</html>