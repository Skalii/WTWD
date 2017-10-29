function setCheck(nameElement) {
    if (document.form2[nameElement].checked) {
        document.form2.textCheck.value = 'Выбран ' + document.form2[nameElement].parentNode.textContent;
    } else document.form2.textCheck.value = '';
}

function setRadio(idElement) {
    document.form3.textRadio.value = 'Выбран ' + document.form3.elements.namedItem(idElement).parentNode.textContent;
}

function setArea() {
    document.form4.textResult.value = Math.pow(document.form4.side.value, 2);
}