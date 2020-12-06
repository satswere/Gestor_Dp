eventListeners();


console.log("ola mundo");

function eventListeners(){
  document.querySelector('#formulario_comida').addEventListener('submit',formulario_comida);
}

function formulario_comida(e){
    e.preventDefault();
    const name = document.querySelector('#name').value,
        price = document.querySelector('#price').value,
        picture = document.querySelector('#picture').files[0],
        description = document.querySelector('#description').value,
        tipo = "ingresar_comida";
/////////llamada de ajax
var datos = new FormData();
datos.append('name',name);
datos.append('price', price);
datos.append('picture', picture.name);
datos.append('description',description);
datos.append('accion', tipo);
var xhr = new XMLHttpRequest();
xhr.open('POST','modelos/modelo_comida.php', true);
xhr.onload = function(){
            if(this.status === 200) {
                const respuesta = JSON.parse(xhr.responseText);
                console.log(respuesta);

//if(respuesta.tipo === 'login'){  // opciones de login
//}
}     //fin de la instruccion 36 (this.status === 200)
}     //fin de la instruccion de la linea 36 xhr.onload
//enviar la petecion
xhr.send(datos);



}




