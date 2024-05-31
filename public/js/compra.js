const compra = new Carrito();
const listaCompra = document.querySelector('#lista-compra tbody');
const carrito2 = document.getElementById('carrito');
const procesarCompraBtn = document.getElementById('procesar-compra');
const cliente = document.getElementById('cliente');
const correo = document.getElementById('correo');

cargarEventos();

function cargarEventos(){
    document.addEventListener('DOMContentLoaded', compra.leerLocalStorageCompra());
    carrito2.addEventListener('click', (e)=>{compra.eliminarProducto(e)});
    compra.calcularTotal();
    procesarCompraBtn.addEventListener('click', procesarCompra);
}

function procesarCompra(e){
    //e.preventDefault();
    if(compra.obtenerProductosLocalStorage().length === 0){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'No hay productos, selecciona alguno',
            timer: 2500,
            showConfirmButton: false
          }).then(function(){
              window.location = "{{route('productos')}}";
          })
    }
    else if(cliente.value === '' || correo.value === '' || telefono.value === '' || fecha_entrega.value === '' || hora_recogida.value === '' || observaciones.value === ''){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Ingrese todos los campos requeridos',
            timer: 2500,
            showConfirmButton: false
          })
    }
    else{
        emailjs.init('user_hx2rYaxbexZ0qlT8bs771')

        const btn = document.getElementById('procesar-compra');

        document.getElementById('procesar-pago')
        .addEventListener('submit', function(event) {
        event.preventDefault();

        const serviceID = 'default_service';
        const templateID = 'template_rtfpoq5';

        emailjs.sendForm(serviceID, templateID, this)
            .then(() => {
            
                    cargandoGif.style.display = 'none';
                    document.querySelector('#loaders').appendChild(enviado);
                    setTimeout(() => {
                        enviado.remove();
                        compra.vaciarLocalStorage();
                        window.location = "{{route('productos')}}";
                    }, 2500);

            });
        });

    }
}
