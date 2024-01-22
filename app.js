function validarForm() {
    const formName = document.querySelector("#formName");
    const formEmail = document.querySelector("#formEmail");
    const formMessage = document.querySelector("#formMessage");
    const formNewsletter = document.querySelector("#formNewsletter");

    const formNameVal = formName.value;
    const formEmailVal = formEmail.value;
    const formMessageVal = formMessage.value;
    const formNewsletterVal = formNewsletter.value;

    let flagFocus = false;
    let textoErro = "";

    if (formEmailVal == "") {
        textoErro += "Falta preencher o email";
        formEmail.classList.add("input-vermelho");
        formEmail.focus();
        flagFocus=true;
    } else {
        formEmail.classList.remove("input-vermelho");
    }
    if (formMessageVal == "") {
        textoErro += "\nFalta preencher a mensagem";
        formMessage.classList.add("input-vermelho");
        if (!flagFocus) {
            formMessage.focus();
            flagFocus = true;
        }
    } else if (formMessageVal.length < 10) {
        textoErro += "\nMensagem deve conter 10 ou mais caracteres";
        if (!flagFocus) {
            formMessage.focus();
            flagFocus = true;
        }
    } else {
        formMessage.classList.remove("input-vermelho");
    }
    if (textoErro != "") {
        alert(textoErro);
        return false;
    }
}