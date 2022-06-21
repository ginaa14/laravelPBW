<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>LOGIN</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.2/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
      <main class="form-signin w-100 m-auto">
        @if (session('flash'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('flash') }}</strong>
        </div>
        @endif

        @if (session('error'))
     <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
         </button>
    </div>
@endif
        <form action="/users/ceklogin" method="POST" >
        @csrf
            <img class="mb-4" src="https://w7.pngwing.com/pngs/854/610/png-transparent-computer-icons-login-user-gestures-miscellaneous-monochrome-account-thumbnail.png" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Login</h1>

            <div class="form-floating">
            <input type="teks" name ="nik_user" class="form-control" id="floatingInput" placeholder="72200000" required>
            <label for="floatingInput">NIK</label>
            </div>
            <div class="form-floating">
            <input type="password" name ="password" class="form-control" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
            </div>

            @if (session('alertg'))
                    <div class="alert alert-warning alert-dismissible fade show text-danger" role="alert">
                        <strong>{{session('alertg')}}</strong>
                        </button>
                    </div>
            @elseif(session('alertb'))
            <div class="alert alert-info alert-dismissible fade show text-danger" role="alert">
                        <strong>{{session('alertb')}}</strong>
                        </button>
                    </div>
                    @endif
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; MANGAT YOKK MANGAT :)</p>
        </form>
        
        </main>
  </body>
</html>