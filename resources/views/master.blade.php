
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Sidebars · Bootstrap v5.3</title>

    <!-- Favicons -->


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

<meta name="theme-color" content="#1e293b">
@vite(['resources/scss/app.scss', 'resources/js/app.js'])

  </head>
  <body style="background:#1e293b">

    
    


<main class="d-flex  flex-row flex-wrap">

  @include('src.sidebar')
  
  <header class="p-3 text-bg-dark w-100" style="position:fixed;top:0;z-index:90">
    <div class="container">
      @include('src.header')
    </div>
  </header>


  <div class="row content pt-3" style="width: calc(100% - 4.5rem); margin-left:4.5rem;margin-top:4.5rem;">
    <div class="col-12 content main-content" id="full-width">
      @yield('content')
    </div>
    <div class="col-3">
      @include('src.rightbar')
    
    </div>
  </div>

  @include('src.footer')

</main>


      <script src="sidebars.js"></script>
  </body>
</html>
