<nav>
    <pre> {{  dump(request()->path()) }} </pre>
       <ul>
        <li class="{{ seleccionado('inicio') }}">
            <a href="/">Inicio</a></li>
        <li class="{{ seleccionado('acercade') }}">
            <a href="acercade">Acerca de...</a></li>
        <li class="{{ seleccionado('productos.*') }}">
            <a href="catalogo">Catálogo</a></li>
        <li class="{{ seleccionado('contacto') }}">
            <a href="contacto">Contacto</a></li>
       </ul>
   </nav>