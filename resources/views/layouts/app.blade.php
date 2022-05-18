<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Laravel App</title>
    
    <!-- Tailwind CSS Link -->
    <script src={{ asset('js/app.js') }} ></script>
    <link href={{ asset('css/app.css') }} rel="stylesheet">
 -
  </head>
  <body class="bg-gray-100 text-gray-800">

@yield('content')

  </body>
</html>