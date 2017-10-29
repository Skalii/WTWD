function checkDiv(divId, elem, prop, message) {
    var elements = document.infoUser.elements,
        idDiv = document.getElementById(divId);

    if (idDiv.lastChild.className === "error")
        idDiv.removeChild(idDiv.lastChild);

    if (!elements[elem][prop]) {
        var span = document.createElement("span");
        span.className = "error";
        span.innerHTML = "<br><br>" + message;
        idDiv.appendChild(span);
        return false;
    }
    return true;
}

function checkData() {
    var textName = checkDiv("divName", "textName", "value", "    Введите имя"),
        radioOS = checkDiv("divOS", "radioOS", "value", "    Выберите ОС"),
        checkClient = checkDiv("divClient", "checkClient", "checked", "Выберите пользователя")
            || checkDiv("divClient", "checkClient[2]", "checked", "Выберите пользователя")
            || checkDiv("divClient", "checkClient[3]", "checked", "Выберите пользователя")
            || checkDiv("divClient", "checkClient[4]", "checked", "Выберите пользователя"),
        selectRelease = checkDiv("divRelease", "selectRelease", "value", "Выберите версию продукта");

    return textName && radioOS && checkClient && selectRelease;
}