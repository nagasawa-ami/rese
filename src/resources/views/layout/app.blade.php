<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RESE</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
  @yield('css')

</head>
<body>
    <header class="header">
        <div class="header__container">
           <button class="header__menu-icon"></button>
           <span class="icon"></span>
           <span class="icon"></span>
           <span class="icon"></span>
           <div class="header__logo">Rese</div>
        </div>
        

        @yield('searchbar')
    </header>

    <main>
        @yield('content')
    </main>



</body>
</html>