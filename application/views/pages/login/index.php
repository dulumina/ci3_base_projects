<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="<?= base_url();?>">

    

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url();?>/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?= base_url();?>/assets/dist/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-4">  
          <div class="card">
          <div class="card-body">
            <main class="form-signin">
              <form autocomplete="off" method="post" action="<?= base_url('/Login/prc'); ?>">
                <img class="mb-4" src="<?= base_url();?>/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                <h1 id=""><?= $_ENV['app_name']; ?></h1>
                <h3 class="h3 mb-3 fw-normal">Please sign in</h3>
                <div class="form-floating">
                  <input type="text" class="form-control" name="uname" id="username" placeholder="Username">
                  <label for="username">Email address</label>
                </div>
                <div class="form-floating">
                  <input type="password" class="form-control" name="upass" id="password" placeholder="Password">
                  <label for="password">Password</label>
                </div>
            
                <div class="checkbox mb-3">
                  <label>
                    <input type="checkbox" value="remember-me"> Remember me
                  </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
              </form>
            </main>
          </div>
        </div>
        </div>
      </div>
    </div>
  </body>
</html>
