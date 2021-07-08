const showNavbar = (toggleId, navId, bodyId, headerId)=>{
    const toogle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId);

    if(toogle && nav && bodypd && headerpd){
        toogle.addEventListener('click',()=>{
            nav.classList.toggle('show');

            toogle.classList.toggle('bx-x');

            bodypd.classList.toggle('body-pd');

            headerpd.classList.toggle('body-pd');
        });
    }
};

showNavbar('header-toggle','nav-bar','body-pd','header');


const linkColor = document.querySelectorAll('.nav_link');

function colorLink(){
    if(linkColor){
        linkColor.forEach(l => l.classList.remove('active'));
        this.classList.add('active');
    }
}

linkColor.forEach(l => l.addEventListener('click',colorLink));