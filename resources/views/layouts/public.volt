<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link href="/assets/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel='stylesheet' type='text/css'>
    <link href="/assets/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel='stylesheet' type='text/css'>
  </head>

  <body>
  {% block topbar %}

  {% endblock %}

  <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
      </div>
    </div>


        {% block content %}

        {% endblock %}

        {% block errorcontent %}

        {% endblock %}

    
  </body>
</html>
