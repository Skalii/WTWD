function max(numOne, numTwo) {
    return numOne > numTwo ? numOne : numTwo;
}

function test() {
    var result = (confirm("alert() - это модальное окно?") ? 1 : 0)
        + (confirm("В JavaScript примитивных типов 4?") ? 0 : 1)
        + (confirm("Одно из первых названий JavaScript - LiveScript?") ? 1 : 0)
        + (confirm("Объекты в JavaScript можно создавать только через new Object()?") ? 1 : 0)
        + (confirm("Функции в JavaScript возвращают результат только тогда, " +
            "когда было указано ключевое слово 'return'?") ? 1 : 0);
    return result;
}