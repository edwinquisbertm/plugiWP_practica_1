# pluginWordpress Platzi
Apuntes del Curso de Creación de Plugin con Wordpress

para colocar el nombre del archivo principal se debe colocar de la siguiente manera:
plugin-nameplugin.php

Ahora en base a la estructura de wordpress para agregar la información del plugin

## Documentacion para estructura de presentación del Plugin
https://developer.wordpress.org/plugins/plugin-basics/header-requirements/

# Estructura de carpetas
admin: Codigo para las funcionabilidades del administrador
include: Codigo que extra como API REST
public: Codigo para las funcionabilidades generales
- admin
- include
- public -> shortcode

En cada carpeta debemos crear un index.php en el cual solo colocaremos:

<?php
// Silence is golden

para temas de seguridad simplemente.

## Uso de Prefijos
es muy importante tener un prefijo delante de cada variable, funcion o clase para evitar tener comflictos con otros plugins o wordpress

# shortcode
para integrar elementos dentro de diferentes paginas o entradas en wordpress debemos colocarlos dentro de shorcode.

- Luego debemos enrutarlo al archivo principal.

# enrutamiento principal
Dentro del archivo plugin_* es donde se debe referenciar todas las rutas de los archivos para que puedan funcionar, en caso de no encontrarse no se procesaran.

# Observaciones
si los parametros de HTML se encuentran entre comillados dobles ("h1") entonces deberemos utilizar comillas simples ('html') para englobarlas sin que aparezca ningun error.

- para utilizar el shorcode que creamos en el formulario de registro debemos utilizar una pagina o entrada y agregar entre [shorcode] para que se renderice en este caso el formulario.

# API REST de WORDPRESS
Para acceder a los datos JSON generados por wordpress debemos ingresar a la dirección: http://yardsales.local/wp-json

para ver los datos se puede utilizar: https://chromewebstore.google.com/detail/json-viewer/gbmdgpbipfallnflgajpaliibnhdgobh

- crear un API Rest
para esto tiene los siguientes metodos:
-- namespace: es el nombre de la carpeta del plugin que contiene el archivo api-registro.php
-- route: ruta de la api que se va a llamar ej: http://localhost/wordpress/wp-json/plz/registro
-- args: array de opciones que se le pasan a la api los cuales tienen un metodo y un callback que es la funcion que se va a ejecutar cuando se llame a la api
# Manejo de Roles
https://developer.wordpress.org/plugins/users/roles-and-capabilities/

https://developer.wordpress.org/plugins/plugin-basics/activation-deactivation-hooks/
