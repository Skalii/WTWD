function checkForm(form) {
    var bool = 0;

    for (var i = 1; i < arguments.length; i++)
        bool += +checkElem(form[arguments[i]]);

    return (bool === arguments.length - 1);
}

function checkElem(elem) {
    if (elem.parentNode.lastChild.className === "error")
        elem.parentNode.removeChild(elem.parentNode.lastChild);

    if (!elem.value) {
        elem.style.borderColor = 'red';

        var elemError = document.createElement("span");
        elemError.className = "error";
        elemError.innerHTML = "Поле пустое";
        elemError.style.color = 'red';
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
            elemError.style.color = 'red';
            elem1.parentNode.appendChild(elemError);
            return false;
        }
        return true;
    }
    return false;
}