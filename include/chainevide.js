function champvide() {

    var str = document.forms['comment'].pseudo.value;
    var str2 = document.forms['comment'].email.value;
    var str3 = document.forms['comment'].texte.value;


    //    /\s+/, '' pour éviter les espaces
    if (!str.replace(/\s+/, '').length) {
        alert("Veuillez renseigner votre pseudo");
        return false;
    }

    if (!str2.replace(/\s+/, '').length) {
        alert("Veuillez renseigner votre email");
        return false;
    }

    if (!str3.replace(/\s+/, '').length) {
        alert("Veuillez renseigner un commentaire");
        return false;
    }

}