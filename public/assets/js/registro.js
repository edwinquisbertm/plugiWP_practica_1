window.addEventListener("DOMContentLoaded",function(){
    
    let $form = document.querySelector("#signup"); // Formulario de registro de usuario en la página de registro de usuario en la página de registro
    let $msg = document.querySelector(".msg"); // Mensaje de respuesta del servidor al enviar el formulario de registro
    $form.addEventListener("submit",function(e){
        e.preventDefault();

        let datos = new FormData($form);
        let datosParse = new URLSearchParams(datos); // Convertir los datos del formulario en un objeto que se pueda enviar por fetch a través del body de la petición

        fetch(`${plz.rest_url}/registro`,
        {
            method: "POST",
            body: datosParse
        }
        )
        .then(res=>res.json())
        .then(json=>{
            console.log(json)
            $msg.innerHTML = json?.msg // Si el objeto json tiene una propiedad msg, se la asigna al innerHTML del elemento $msg (mensaje de respuesta del servidor) el innerHTML sirve para mostrar el mensaje en la página de registro de usuario
        })
        .catch(err=>{
            console.log(`Hay un error: ${err}`)
        })

    })

    
})