<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link href="/assets/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel='stylesheet' type='text/css'>
    <link href="/assets/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel='stylesheet' type='text/css'>
    <link href="/assets/css/signin.css" rel='stylesheet' type='text/css'>
  </head>

  <body>
  

        

  

        


        

        <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        <div class="row">
        
            <div class="col-sm-6">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="remember-me"> Remember me
                  </label>
                </div>
            </div>

            <div class="col-sm-6">
                <a href="<?php echo $this->url->get('guest/index'); ?>" class="btn btn-link">Need an account?</a>
            </div>

        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div>

        

        

        

    
  </body>
</html>
