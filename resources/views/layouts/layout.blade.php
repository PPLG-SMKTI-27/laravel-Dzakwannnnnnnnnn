<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Muhammad Dzakwan</title>
  @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>

<body>
  <x-nav />

  <main class="main-content">
    @yield('content')
  </main>

  <x-footer />
</body>

</html>