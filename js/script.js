function alerta(){
    const alertas = document.querySelector('#alert');
    setTimeout(()=>{
        alertas.classList.add('d-none');
    },2000);
}

alerta();
