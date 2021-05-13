<!DOCTYPE html>
<html lang="es">
<head>
    <title>TITULO DE LA WEB </title>
    <meta charset="utf-8"/>
    <meta name="description" content="Lenguaje de programacion" />
    <link rel="stylesheet" href="estilos.css"/>
    <link rel="shortcut icon" href="/favicon.ico"/>
    <style>
        .actual {
            color: #1a202c;
            font-weight: bold;
        }
    </style>
</head>
<body style="background-color: #cbd5e0">
<nav>
    <a href="/ingreso-notas/1" class="actual">INGRESE NOTAS</a>
    <a href="/mostrar-notas">Ver NOTAS</a>

</nav>
<header>
    <h1>SISTEMA DE NOTAS UNIVERSIDAD DE HUANUCO</h1>

</header>
<section> @yield("contenido")</section>
</body>
</html>
