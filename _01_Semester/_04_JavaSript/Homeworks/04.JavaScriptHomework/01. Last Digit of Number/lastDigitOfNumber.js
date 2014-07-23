function lastDigitAsText(number) {
    var numberAsText = number.toString();
    var numberLength = numberAsText.length;
    var lastDigit = numberAsText.substring((numberLength - 1), numberLength);

    printDigitText(lastDigit);

    return false;
}

function printDigitText(digit) {
    var digitText = null;

    switch (parseInt(digit)) {
        case 1:
            digitText = "One";
            break;
        case 2:
            digitText = "Two";
            break;
        case 3:
            digitText = "Three";
            break;
        case 4:
            digitText = "Four";
            break;
        case 5:
            digitText = "Five";
            break;
        case 6:
            digitText = "Six";
            break;
        case 7:
            digitText = "Seven";
            break;
        case 8:
            digitText = "Eight";
            break;
        case 9:
            digitText = "Nine";
            break;
        case 0:
            digitText = "Zero";
            break;
    }

    if (digitText == null) {
        digitText = "Please enter a number!";
    }

    console.log(digitText);
}