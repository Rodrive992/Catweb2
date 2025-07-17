/***LOADING***/
var time;

function loading() {
    time = setTimeout(showPage, 1500);
}

function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("page").style.display = "block";
}

/***SERVICES MENU***/
function openServicesMenu() {
    document.querySelector('.services-modal').style.display = 'block';
    document.body.style.overflow = 'hidden';
}

function closeServicesMenu() {
    document.querySelector('.services-modal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

// Cerrar al hacer click fuera del modal
window.onclick = function(event) {
    const modal = document.querySelector('.services-modal');
    if (event.target == modal) {
        closeServicesMenu();
    }
}

// Cerrar con tecla ESC
document.onkeydown = function(evt) {
    evt = evt || window.event;
    if (evt.key === "Escape") {
        closeServicesMenu();
    }
};