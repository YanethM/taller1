<!DOCTYPE html> <html>
<head>
    <link type="text/css" rel="stylesheet" href="stylesheet.css"/>
    <title></title>
</head>
<body>
    @yield('contenido')
    <div id="encabezado">
        <p id="name">Carlos Garces Alvarez</p>
        <a href="eduard.alvarez@hotmail.com" target="_blank"><p id="email">eduard.alvarez@hotmail.com</p></a>
    </div>
    <div class="izquierda">
        <div class="info">
            <ol class="">
                <li id="margen-top"><a href=""><span>Acerca de mí</span></a></li>
                <li id="margen-top"><a href=""><span>Empresa</span></a></li>
                <li id="margen-top"><a href=""><span>Estudios</span></a></li>
                <li id="margen-top"><a href=""><span>Proyectos</span></a></li>
                <li id="margen-top"><a href=""><span>Contacto</span></a></li>
                <li id="margen-top"><a href=""><span>Social Media</span></a></li>
            </ol>
        </div>
    </div>
    <div class="derecha">
        <div class="content">
            <h4>Objetivo</h4>
            <p>Posicionarme como Ingeniero de sistemas.</p>
            <h4>Experiencia</h4>
            <p>Desarrollador Junior, Empresa de Software (2012 - 2013)</p>
            <ul>
                <li>Diseñé e implemente funcionalidades para usuarios finales para Producto Líder</li>
                <li>Escribí bibliotecas JavaScript y Ruby de terceros</li>
            </ul>
            <h4>Habilidades</h4>
            <p>Lenguajes: <span>JavaScript</span>, <span>Python</span>, <span>Ruby</span> </p>
        </div>
    </div>
    <div id="pie">
        <p id="direccion">Calle 10 B SUR # 52 B 34, <span>Medellín</span> 12345-6789 | Tel: <span>(555) 555-5555</span></p>
    </div>
    @yield('contenido2')
</body>
</html>
