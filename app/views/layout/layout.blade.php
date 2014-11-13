<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <!-- Bootstrap -->
    {{ HTML::style('css/vendor/bootstrap.min.css') }}
    {{ HTML::style('css/vendor/bootstrap-theme.min.css') }}
    {{ HTML::style('css/main.css') }}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
        @include('layout._navigation')
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="container text-center stripe-xxl">
            <div class="row">
                <div class="col-md-3 col-md-offset-9">
                    <h4 class="stripe-sm">&copy;CodeStyx 2014</h4>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{ HTML::script('js/vendor/bootstrap.min.js'); }}
    {{ HTML::script('js/main.js'); }}
  </body>
</html>