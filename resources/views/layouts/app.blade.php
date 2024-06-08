<!DOCTYPE html>
<html lang="en">

   <head>

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Laravel Boolando</title>

      <!-- Link inclusione assets con la direttiva Vite -->
      @vite('resources/js/app.js')

   </head>

   <body>

      @include('partials.header')

      @yield('content')

   </body>

</html>
