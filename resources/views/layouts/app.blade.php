<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title Página Blade>{{ config('app.name', 'Laravel') }}</title>

    </head>
    <body>>

    <header>
        <h1>Actividad 2 UT 5</h1>
    </header>

    <nav>
        <a href="/">Inicio</a>
        <a href="/">Contacto</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Copyright © 2026 Mi Sitio Web.</p>
    </footer>
    </body>