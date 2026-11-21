<!DOCTYPE html>
<html lang="es">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title Página Blade></title>

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
        <!-- Marca donde se muestra el contenido de la sección 'content' -->
        @yield('content')
    </main>

    <footer>
        <p>Copyright © 2026 Mi Sitio Web.</p>
    </footer>
    </body>