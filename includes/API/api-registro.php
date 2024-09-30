<?php 


function plz_api_registro(){

    register_rest_route(
        "plz", //namespace es el nombre de la carpeta del plugin que contiene el archivo api-registro.php
        "registro", // ruta de la api que se va a llamar ej: http://localhost/wordpress/wp-json/plz/registro
        array( // array de opciones que se le pasan a la api los cuales tienen un metodo y un callback que es la funcion que se va a ejecutar cuando se llame a la api
            'methods' => 'POST', 
            'callback' => 'plz_registro_callback'
        )
        );
}

function plz_registro_callback($request){

    $is_user_exist = get_user_by("login",$request["name"]);
    $is_email_exist = get_user_by("email",$request["email"]);

    if($is_user_exist){
        return array('msg' => "Ese usuario ya exite");
    }elseif($is_email_exist){
        return array('msg' => "Ya existe un usuario con ese email");
    }

    $args = array(
        "user_login" => $request["name"],
        "user_pass"  => $request["password"],
        "user_email" => $request["email"],
        "role"       => "editor"
    );

   $user =  wp_insert_user($args);

    return  array("msg" => "El usuario se registro correctamente");
}
add_action("rest_api_init", "plz_api_registro");