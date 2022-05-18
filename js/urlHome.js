const linkHome = document.querySelector('#card-link');

document.addEventListener('DOMContentLoaded', linkhrefs);


function linkhrefs(){
    if(screen.width < 996){
        linkHome.setAttribute('href', 'leerqrCamera.php');
    }else if(screen.width > 996){
        linkHome.setAttribute('href', 'leerqr.php');
    }
}



window.addEventListener("resize", () => {
    linkhrefs();
});