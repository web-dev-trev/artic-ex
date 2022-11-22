<!DOCTYPE html>
<html lang="en">
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" href={{asset('css/styles.css')}}>
            <title>ARTIC - Laravel Test</title>
        </head>
    <body>
    <nav>
        <div class="logo">
            <img src="https://i.ibb.co/7nCyyJd/unnamed.png" alt="ARTIC-logo" style="width: 100px; vertical-align: center;"/>
        </div>
        <div class="links">
            <div class="top-links">
                <a href="">Buy Tickets</a>
                <a href="">Become a Member</a>
                <a href="">Shop</a>
            </div>
            <div class="bottom-links">
                <a href="">Visit</a>
                <a href="#" style="color: #b50938">Exhibitions & Events</a>
                <a href="#">The Collection</a>
                <a href="#"><img src="https://i.ibb.co/ZhqTM9C/search-512.webp" width="16px" alt="search-icon"/></a>
            </div>
        </div>
    </nav>
    @yield('content')
    </body>
</html>
