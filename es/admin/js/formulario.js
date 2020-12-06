eventListeners();


console.log("ola mundo");

function eventListeners(){
  document.querySelector('#formulario_comida').addEventListener('submit',formulario);
}

function formulario(e){
    e.preventDefault();
    const name = document.querySelector('#name').value,
        price = document.querySelector('#price').value,
        picture = document.querySelector('#picture').files[0],
        description = document.querySelector('#description').value;
        console.log(`el nombre del producto es : ${name} con un precio de ${price}`);
      //  console.log(picture.name); el nombre de la imagen 
        console.log(description);
/////////llamada de ajax

var datos = new FormData(); //datos que se envian al servidor
/*datos.append('correo',correo);
datos.append('usuario', usuario);
datos.append('password', password);
datos.append('pass',repassword);
datos.append('accion', tipo);  */ //agregar una segunda contraseña

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




