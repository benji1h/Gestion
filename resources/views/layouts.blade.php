<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Mon site</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  @include('top')

  @yield('content')

  @include('footer')
</body>
</html>
