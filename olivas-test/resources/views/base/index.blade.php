<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="url" data-base-url="{{url('/')}}">
  <title>{{$title ?? 'Olá Mundo'}}</title>
  <!-- Bootstrap css cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">  
  <!-- Main css -->
  <link rel="stylesheet" href="css/app.css">
</head>

<body>
  @yield('content')

  <footer></footer>
  <!-- Bootstrap js cdn -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- App -->
  <script src="{{asset('js/app.js')}}"></script>
</body>

</html>