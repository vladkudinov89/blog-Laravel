<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Регистрация</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/signin/">

    <!-- Bootstrap core CSS -->
      {{--
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      --}}
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post">
        {!! csrf_field() !!}
        <h2 class="form-signin-heading">Регистрация</h2>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required autofocus>
        <label for="inputPassword" class="sr-only">Пароль</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Пароль" required>
        <label for="inputPassword" class="sr-only">Повторите Пароль</label>
        <input type="password" id="inputPassword" name="password_confirmation" class="form-control" placeholder="Повторите Пароль" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="remember" value="remember-me"> Запомнить меня
</label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Регистрация</button>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
