<?php
/**
 * Plugin Name:       Formulario de Login
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.0
 * Requires at least: 5.0
 * Requires PHP:      7.0
 * Author:            edwin
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 * Requires Plugins:  yard sales
 */


 /**ejemplo
 function plz_test(){
     echo "<h1>hola mundo</h1>"; // esta funcion se ejecuta en el head de la pagina web
 }

 add_action('wp_head','plz_test'); // esta funcion se ejecuta en el head de la pagina web
 */

 require_once plugin_dir_path(__FILE__)."/public/shortcode/form-registro.php"; // se incluye el archivo form-registro.php que se encuentra en la carpeta public/shortcode del plugin