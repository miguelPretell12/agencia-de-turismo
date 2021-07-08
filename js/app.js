const hamb = document.querySelector('.icono-hamb');
const num1 = document.querySelector('.num-1');
const num2 = document.querySelector('.num-2');
const num3 = document.querySelector('.num-3');
const num4 = document.querySelector('.num-4');
const num5 = document.querySelector('.num-5');
const num6 = document.querySelector('.num-6');
const num7 = document.querySelector('.num-7');
const btnform = document.querySelector('.btn-form');
eventListeners();

function eventListeners(){
    hamb.addEventListener('click',ocultarMostrar);
    num1.addEventListener('change',validarNumero);
    num2.addEventListener('change',validarNumero);
    num3.addEventListener('change',validarNumero);
    num4.addEventListener('change',validarNumero);
    num5.addEventListener('change',validarNumero);
    num6.addEventListener('change',validarNumero);
    num7.addEventListener('change',validarNumero);
}

function validarNumero(e){
    if(e.target.value >= 0 && e.target.value <=20 ){
        e.target.classList.add('borde-verde');
        e.target.classList.remove('borde-rojo');
        btnform.disabled=false;
    }else {
        e.target.classList.add('borde-rojo');
        e.target.classList.remove('borde-verde');
        btnform.disabled=true;
    }
}

function ocultarMostrar(){
    const nav = document.querySelector('.bar-lista');
    const cont = document.querySelector('.contenido-general');
    if(nav.classList.contains('l-0') && cont.classList.contains('pl-245')){
        cont.classList.remove('pl-245');
        nav.classList.remove('l-0');
        nav.classList.add('l-235');
        cont.classList.add('p-0');
    } else {
        cont.classList.remove('p-0');
        nav.classList.remove('l-235');
        cont.classList.add('pl-245');
        nav.classList.add('l-0');
    }
}

function alerta(){
    const alertas = document.querySelector('#alert');
    setTimeout(()=>{
        alertas.classList.add('d-none');
    },2000);
}

alerta();

