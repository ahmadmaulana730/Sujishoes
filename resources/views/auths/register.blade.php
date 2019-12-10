<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.6">
        <title>Register</title>


        <!-- Bootstrap core CSS -->
        <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
        <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
        <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
        <meta name="theme-color" content="#563d7c">


        <style>
          .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
          }

          @media (min-width: 768px) {
            .bd-placeholder-img-lg {
              font-size: 3.5rem;
            }
          }
        </style>

        <!-- Custom styles for this template -->
        <link href="https://getbootstrap.com/docs/4.4/examples/sign-in/signin.css" rel="stylesheet">
    </head>

    <body class="text-center">
        <div class="container">
            <form class="form-signin" method="POST" action="{{ route('register') }}">
                  {{ csrf_field() }}
                  <h1 class="h3 mb-3 font-weight-normal">Register Sujishoes</h1>
                  <label for="inputUsername" class="sr-only">Username</label>
                  <input type="username" name="username" id="inputUsername" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Masukkan Username" value="{{old('name')}}" required autofocus>
                  <br>
                  @if($errors->has('name'))
                      <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                      </div>
                  @endif

                  <label for="inputPassword" class="sr-only">Password</label>
                  <input type="password" name="password" id="inputPassword" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Masukkan Password" required>
                  <br>
                  @if($errors->has('password'))
                      <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                      </div>
                  @endif

                  <label for="inputPassword" class="sr-only">Konfirmasi Password</label>
                  <input type="password" name="password-confirmation" id="inputPassword" class="form-control {{ $errors->has('password-confirmation') ? 'is-invalid' : '' }}" placeholder="Masukkan Konfirmasi Password" required>
                  @if($errors->has('password_confirmation'))
                      <div class="invalid-feedback">
                        {{ $errors->first('password_confirmation') }}
                      </div>
                  @endif

                 <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
                 <a href="{{url ('/login')}}" class="badge badge-info">Log in</a>
                 <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
            </form>
        </div>
    </body>
</html>
 