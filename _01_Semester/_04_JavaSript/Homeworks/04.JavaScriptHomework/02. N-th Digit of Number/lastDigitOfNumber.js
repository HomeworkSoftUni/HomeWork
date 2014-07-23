function findNthDigit(arr) {
    var number = arr[1];
    var offset = arr[0];

    if (!isInt(number)) {
        number *= 100;
    }

    if (number < 0) {
        number *= -1;
    }

    var numberAsString = number.toString().trim();
    var start = (numberAsString.length - offset);

    if (start < 0) {
        return "The number doesn’t have " + offset + " digits<br>";
    }

    return numberAsString.substr(start, 1) + "<br>";
}

function isInt(n) {
    return n % 1 === 0;
}