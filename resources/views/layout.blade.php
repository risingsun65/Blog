
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>Blog Template for Bootstrap</title>

    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="/css/blog.css" rel="stylesheet">


  </head>

  <body>

    @include('layouts.nav')

    <div class="container">

   		@include('layouts.header')

   		<div class="row">
        
   			@yield('content')

   			@include('layouts.sidebar')

   		</div>

    	@include('layouts.footer')

    </div>

  </body>


   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
</html>
