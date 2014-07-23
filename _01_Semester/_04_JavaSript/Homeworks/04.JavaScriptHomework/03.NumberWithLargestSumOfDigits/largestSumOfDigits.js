function findLargestBySumOfDigits(nums){
    var result = "";
    var arr = arguments;
    var str = "";
    var sum = 0;
    var sum2 = 0;
    var strTo = "";
    for (i = 0; i < arr.length; i++) {
        str = arr[i];
        if (str != parseInt(str)) {
            return "undefined";
        }
        if (str < 0) {
            str = str * -1;
        }
        strTo = str.toString();
        for (j = 0; j < strTo.length; j++) {
            sum = sum + parseInt(strTo[j]);
        }
        if (sum >= sum2) {
            sum2 = sum;
            result = arr[i];
        }
        sum = 0;
    }
    return result;
}

console.log(findLargestBySumOfDigits(5, 10, 15, 111));
console.log(findLargestBySumOfDigits(33, 44, -99, 0, 20));
console.log(findLargestBySumOfDigits('hello'));
console.log(findLargestBySumOfDigits(5, 3.3));



