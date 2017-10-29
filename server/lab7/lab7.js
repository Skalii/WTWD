function checkForm(form) {
    var name = checkElem(form.name),
        email = checkElem(form.email),
        password1 = checkElem(form.password1),
        password2 = checkElem(form.password2),
        pass = checkPassword(form.password1, form.password2),
        message = checkElem(form.message);

    return name && email && password1 && password2 && pass && message;

}

function checkElem(elem) {
    if (elem.parentNode.lastChild.className === "error")
        elem.parentNode.removeChild(elem.parentNode.lastChild);

    if (!elem.value) {
        elem.style.borderColor = 'red';

        var elemError = document.createElement("span");
        elemError.className = "error";
        elemError.innerHTML = "Поле пустое";
        elem.parentNode.appendChild(elemError);
        return false;
    }
    elem.style.borderColor = 'green';
    return true;
}

function checkPassword(elem1, elem2) {
    if (elem1.parentNode.lastChild.className === "errorPass")
        elem1.parentNode.removeChild(elem1.parentNode.lastChild);

    if (!!(elem1.value) === !!(elem2.value)) {
        if (elem1.value !== elem2.value) {
            elem1.style.borderColor = 'red';
            elem2.style.borderColor = 'red';

            var elemError = document.createElement("span");
            elemError.className = "errorPass";
            elemError.innerHTML = "Пароли не совпадают";
            elem1.parentNode.appendChild(elemError);
            return false;
        }
        return true;
    }
    return false;
}

function display(elem) {
    if (document.getElementById(elem).style.display === 'none')
        document.getElementById(elem).style.display = 'block';
    else document.getElementById(elem).style.display = 'none';
}
