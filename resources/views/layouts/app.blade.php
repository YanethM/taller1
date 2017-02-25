<!DOCTYPE html>
<html lang=”es”>
<head>
    <meta charset=”UTF-8″ />

    <title>Hoja de vida</title>
    <link href=”formularioContacto.css” rel=”stylesheet” type=”text/css” media=”screen” />
</head>
<body>
    @yield('contenido')
    <section id=”Formulario”>
    <h1>Enviar mensaje</h1>
    <form action=” method=”post” enctype=”multipart/form-data” name=”formu”>
    <fieldset>
    <label for=”nombre”>Nombre: </label>
    <br>

    <label for=”correo”>Correo: </label>
<br>
    <label for=”mensaje”>Mensaje: </label>
        <br>
    <input type=”submit” value=”Enviar mensaje” />

    </fieldset>
    </form>
    </section>

</body>
</html>


