<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/css/app.css','resources/js/app.js'])

    <title>LivewireH67</title>

    @livewireStyles
  </head>
  <body>
        <x-navbar/>
      
        <h1>Livewire H67</h1>

        {{$slot}}

        @livewireScripts
  </body>
</html>