// Selectionner le bouton :
mybutton = document.getElementById("myBtnTop");



// Lorsque l'utilisateur fait défiler 20px du haut du document vers le bas, affichez le bouton
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}



// Lorsque l'utilisateur clique sur le bouton, faites défiler vers le haut du document

function topFunction() {
    document.body.scrollTop = 0; // Pour safari
    document.documentElement.scrollTop = 0; // Pour Chrome, Firefox, IE et Opera

}

