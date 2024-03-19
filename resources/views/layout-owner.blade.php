<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <header>
    <div id="app">
      <header-component/>
    </div>
  </header>
  
  <main>
    @yield('content')
  </main>

  <footer>

  </footer>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>