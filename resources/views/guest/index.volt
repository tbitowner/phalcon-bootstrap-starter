{% extends "layouts/public.volt" %}


        {% block topbar %}

        {% endblock %}

        {% block content %}

       <div class="container">

      <form class="form-register">

        <h2 class="form-register-heading">Create An Account</h2>

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        
        <label for="confirmInputPassword" class="sr-only">Confirm Password</label>
        <input type="password" id="confirmInputPassword" class="form-control" placeholder="Confirm Password" required="">
        
        <div class="row">
          <div class="col-sm-6">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
          </div>
          
          <div class="col-sm-6">
              <a href="{{url('guest/login')}}" class="btn btn-link">Have an account?</a>
          </div>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Go!</button>
      </form>

    </div>

        {% endblock %}