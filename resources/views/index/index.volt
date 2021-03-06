{% extends "layouts/public.volt" %}


        {% block topbar %}
        
        <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Phalcon Bootstrap Starter</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>

        <form class="navbar-form navbar-right">
          <div class="form-group">
            <input type="text" placeholder="Email" class="form-control">
          </div>
          <div class="form-group">
            <input type="password" placeholder="Password" class="form-control">
          </div>
          <button type="submit" class="btn btn-success">Sign in</button>
        </form>

      </div><!--/.nav-collapse -->
    </div>
  </nav>
                
        {% endblock %}

        {% block header %}
        <div class="jumbotron">
      <div class="container">
        <h1>Hello, Phalcon developers!</h1>
        <p>This is a starter kit for Phalcon 3 and Bootstrap 3. This can be used as a starting point for developing applications using Phalcon and Bootstrap, saving Phalcon configuration time.</p>
        <p><a class="btn btn-primary btn-lg" href="{{url('guest/login')}}" role="button">Learn more »</a></p>
      </div>
    </div>
        {% endblock %}


        {% block content %}
             
        {% endblock %}
