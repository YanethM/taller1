<!DOCTYPE html>
<html lang=”es”>
<head>

    <link type="text/css" rel="stylesheet" href="stylesheet.css"/>
    <title>Visualizador Hoja de Vida</title>
</head>
<body>
    <div id="encabezado">
        <p id="name">@yield('nombre')</p>
        <a href="@yield('email')" target="_blank"><p id="email">@yield('email')</p></a>
    </div>

    <section id="informacionacademica">
        <fieldset>
            <label for="universitario">Educación media: </label><h5>@yield('nivelEducativo1')</h5>
            <label for="universitario">Educación profesional: </label><h5>@yield('nivelEducativo2')</h5>
        </fieldset>
    </section>

    <br>
    <br>
    <a href="{!! url('TallerEstatico/index') !!}">Atras</a>

</body>
</html>


