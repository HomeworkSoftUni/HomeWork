function reverseWordsInString(str){
    var arr = str.split(" ");
    var result = "";
    var word = "";
    for (i = 0; i < arr.length; i++) {
        str = arr[i];
        for (j = 1; j <= str.length; j++) {
            word = word + str[str.length - j];
        }
        result = result + word + " ";
        word = "";
    }
    return result;
}



console.log(reverseWordsInString("Hello, how are you."));
console.log(reverseWordsInString("Life is pretty good, isn’t it?"));