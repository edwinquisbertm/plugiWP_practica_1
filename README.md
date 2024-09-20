# pluginWordpress
Apuntes del Curso de Creación de Plugin con Wordpress

# Documentacion para estructura de presentación del Plugin
https://developer.wordpress.org/plugins/plugin-basics/header-requirements/

# Estructura de carpetas
- admin
- include 
- public -> shortcode

# enrutamiento principal
Dentro del archivo plugin_* es donde se debe referenciar todas las rutas de los archivos para que puedan funcionar, en caso de no encontrarse no se procesaran.

# Observaciones
si los parametros de HTML se encuentran entre comillados dobles ("h1") entonces deberemos utilizar comillas simples ('html') para englobarlas sin que aparezca ningun error.
- para utilizar el shorcode que creamos en el formulario de registro debemos utilizar una pagina o entrada y agregar entre [shorcode] para que se renderice en este caso el formulario.

