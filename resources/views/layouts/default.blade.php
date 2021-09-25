<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
</head>
<body>
    @section('sidebar')
      <ul>
          <li>Menu Principal 1</li>
          <li>Menu Principal 2</li>
          <li>Menu Principal 3</li>
      </ul>
    @show
    <br><br>
    @yield('content')

</body>
</html>