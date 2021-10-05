<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
      <!-- back to top button -->
      <button onclick="topFunction()"id="myBtn" title="Go to top"><i class="far fa-arrow-alt-circle-up fa-2x"></i></button>
      <!-- back to the top button end -->
        <div>
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header>
                <div>
                    {{ $header ?? '' }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            <footer>
              <div id="" class="footdiv">
                <div id="footer-icon1" class="footdiv-icon">
                  <i class="fab fa-linkedin"></i>
                </div>
                <div id="footer-icon2" class="footdiv-icon">
                  <i class="fab fa-stack-overflow"></i>
                </div>
                <div id="footer-icon3" class="footdiv-icon">
                  <i class="fab fa-instagram-square"></i>
                </div>
                <div id="footer-icon4" class="footdiv-icon">
                  <i class="fab fa-reddit-square"></i>
                </div>
              </div>
              <div class="container text-center">
                  <h6>© 2021 by Sumi Kaurca</h6>

              </div>
            </footer>
        </div>
    </body>
    <script src="js/backTopBtn.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
