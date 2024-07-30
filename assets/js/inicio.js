/*Barra de Desplazamiento del menu*/
const menu = document.querySelector('.hamburguesa');
const navegacion = document.querySelector('.navegacion');
/*Cuando vayamos bajando van cargando las imagenes*/
const imagenes = document.querySelectorAll('img');

/*El desplazamiento de la barra de menu va a ser un evento*/
document.addEventListener('DOMContentLoaded',()=>{
    eventos();
});

const eventos = () =>{
    menu.addEventListener('click',abrirMenu);
}
/*Mostramos el menu que esta dentro de la hamburguesa y llamamos el boton de cerrar*/
const abrirMenu = () =>{
     navegacion.classList.remove('ocultar');
     botonCerrar();
}
/*Realizamos el boton de cerrar y hacemos que el fondo del menu se note un poco opaco*/
const botonCerrar = () =>{
    const btnCerrar = document.createElement('p');
    const overlay  = document.createElement('div');
    overlay.classList.add('pantalla-completa');
    const body = document.querySelector('body');
    if(document.querySelectorAll('.pantalla-completa').length > 0) return;
    body.appendChild(overlay);
    btnCerrar.textContent = 'x';
    btnCerrar.classList.add('btn-cerrar');
    navegacion.appendChild(btnCerrar);   
    cerrarMenu(btnCerrar,overlay);
    
}

/*Cuando bajemos se van a ir cargando las imagenes*/
const observer = new IntersectionObserver((entries, observer)=>{
        entries.forEach(entry=>{
            if(entry.isIntersecting){
                const imagen = entry.target;
                imagen.src = imagen.dataset.src;
                observer.unobserve(imagen);
            }
        }); 
});

/*Se van ejecutando las imagenes en orden*/
imagenes.forEach(imagen=>{
   
    observer.observe(imagen);
});

/*Al hacer click cierra el menu*/
const cerrarMenu = (boton, overlay) =>{
    boton.addEventListener('click',()=>{
        navegacion.classList.add('ocultar');
        overlay.remove();
        boton.remove();
    });

    overlay.onclick = function(){
        overlay.remove();
        navegacion.classList.add('ocultar');  
        boton.remove();
    }
}
/*No permite que se creen mas div dentro de la pagina web*/
const limpiarHtml = (contenedor) =>{
    while(contenedor.firstChild){
        contenedor.removeChild(contenedor.firstChild);
    }
}

