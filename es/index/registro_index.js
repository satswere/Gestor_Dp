const lista_menu = document.querySelector('#lista_menu');
        pagar_contenido = document.querySelector('#envio_pagar');
let articulosCarrito = [];

cargarEventListeners();
function cargarEventListeners() {
    // Cuando agregas un curso presionando "Agregar al Carrito"
    lista_menu.addEventListener('click', agregar_articulo);
    pagar_contenido.addEventListener('click', pagar_cambio);

//    document.querySelector('#pagar').addEventListener('click', pagar_cambio);
/*
    // Elimina cursos del carrito
    carrito.addEventListener('click', eliminarCurso);


    // Vaciar el carrito 
    vaciarCarritoBtn.addEventListener('click', () => {
        articulosCarrito = []; // reseteamos el arreglo

        limpiarHTML(); // Eliminamos todo el HTML
    })*/
}
function pagar_cambio(){
    var now = new Date();
    console.log(now);
    tiempo = now.toString();
    console.log(tiempo);
    const nombre = document.querySelector('#nombre_cliente').value,
            direccion = document.querySelector('#direccion_cliente').value,
            total = document.querySelector('#total_cliente').value,
            accion = "pagar_productos";
            id_venta =  document.querySelector('#actual_venta').value;
    var datos = new FormData();
    datos.append('nombre',nombre);
    datos.append('direccion', direccion);
    datos.append('total', total);
    datos.append('fecha', now);
    datos.append('accion', accion);
    datos.append('id_venta',id_venta);
    
    var xhr = new XMLHttpRequest();
    xhr.open('POST','es/index/modelo_carrito.php', true);
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
function agregar_articulo(e) {
    e.preventDefault();
    if( e.target.classList.contains('agregar_carrito') ) {
        const articulo_seleccionado = e.target.parentElement.parentElement;
        console.log(articulo_seleccionado);
        leer_datos(articulo_seleccionado);
    }    
}

function leer_datos(articulo) {
    // console.log(curso);
/*
    // Crear un objeto con el contenido del curso actual
    const info_articulo = {
        id: articulo.querySelector('a').getAttribute('data-id'),
        nombre: articulo.querySelector('#name').value,
        precio: articulo.querySelector('#price').value,
        descripcion : articulo.querySelector('#description').value,
        imagen: articulo.querySelector('img').src,
        cantidad: 1
    }
    // Revisa si un elemento ya existe en el carrito
        // Agrega elementos al arreglo de carrito
        articulosCarrito = [...articulosCarrito, info_articulo];

    console.log(articulosCarrito);
    carritoHTML();*/
    const  id=  articulo.querySelector('a').getAttribute('data-id'),
    nombre =  articulo.querySelector('#name').value,
    precio = articulo.querySelector('#price').value,
    descripcion = articulo.querySelector('#description').value,
    imagen = articulo.querySelector('img').src,
    cantidad = 1;
    accion ="agregar_carrito";
    id_venta =  document.querySelector('#actual_venta').value;

    var datos = new FormData();
    datos.append('id',id);
    datos.append('nombre', nombre);
    datos.append('precio', precio);
    datos.append('cantidad', cantidad);
    datos.append('accion', accion);
    datos.append('id_venta', id_venta);

    var xhr = new XMLHttpRequest();
    xhr.open('POST','es/index/modelo_carrito.php', true);
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


console.log("hola mundo desde registro_Index");