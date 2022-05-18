const a = document.querySelector('#link');

document.addEventListener('DOMContentLoaded', linkhrefs);


function linkhrefs(){
    if(screen.width < 996){
        a.setAttribute('href', 'home.php');
    }else if(screen.width > 996){
        a.setAttribute('href', 'leerqr.php');
    }
}



window.addEventListener("resize", () => {
    linkhrefs();
});