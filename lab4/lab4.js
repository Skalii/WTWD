function multiplicationWhile() {
    var multiplicand = 2, factor = 1;

    while (multiplicand <= 10) {
        if (factor === 1)
            console.log("   " + multiplicand + ": ");
        console.log(multiplicand + " * " + ++factor + " = " + (multiplicand * factor));
        if (factor === 10) {
            ++multiplicand;
            factor = 1;
        }
    }
}

    /* for (var i = 1, factor = 2; i <= 8; i++, factor++) {
         for (var multiplicand = 2; multiplicand <= 10; multiplicand++)
             console.log(factor + " × " + multiplicand + " = " + (factor * multiplicand));
         console.log("\n");
     }*/

multiplicationWhile();

function sum() {
    document.write("<h3>Сумма чисел от 1 до 10</h3>");
    var sum = 0;
    for (var i = 1; i <= 10; i++) {
        sum += i;
        if (i === 10) document.write(i + ' = ');
        else document.write(i + ' + ');
    }
    document.write(sum + "<br><br>");
}

function multiplicationTable() {
    document.write("<h3>Таблица умножения</h3>" +
        "<table border='1px'>");
    for (var multiplicand = 2; multiplicand <= 10; multiplicand++) {

        document.write("<tr align='center' style='height: 6ex'>");

        for (var factor = 2; factor <= 9; factor++)

            document.write(
                "<td style='width: 12ex'>" + factor + " × " + multiplicand + " = " + (factor * multiplicand) + "</td>");

        document.write("</tr>");
    }
    document.write("</table>");
}