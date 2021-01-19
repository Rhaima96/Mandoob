$(window).on("scroll", function() {
    if ($(window).scrollTop() > 70) {
        $(".navbar").addClass("active");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
        $(".navbar").removeClass("active");
    }
});

function surligne(champ, erreur) {
    if (erreur) {
        champ.style.backgroundColor = "#fba";
        document.getElementById("msgerror").innerHTML = "  Please enter a correct email address.";
    } else
        champ.style.backgroundColor = "";
}

function verifMail(champ) {
    var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
    if (!regex.test(champ.value)) {
        surligne(champ, true);
        return false;
    } else {
        surligne(champ, false);
        return true;
    }

}