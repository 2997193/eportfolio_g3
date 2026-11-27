<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $titulo ?? 'ePortfolio' }}</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('sendit/imgs/favico.png') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
    rel="stylesheet">
  <style>
    .inter {
      font-family: "Inter", serif;
      font-weight: 400;
      font-style: normal;
    }
  </style>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-sendit.header :titulo0="$titulo0" :titulo1="$titulo1" :titulo2="$titulo2" :titulo3="$titulo3"/>
    <x-sendit.main>
        {{ $slot }}
    </x-sendit.main>
    <x-sendit.footer />
</body>
</html>