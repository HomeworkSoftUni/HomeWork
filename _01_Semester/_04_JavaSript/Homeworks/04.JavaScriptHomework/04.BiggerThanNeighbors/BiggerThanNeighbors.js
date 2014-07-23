function biggerThanNeighbors(index, arr) {
    var result = "";
    var bigNum = 0;
    if (index > arr.length - 1) {
        return "invalid index";
    }
    if (index == 0) {
        return "only one neighbor";
    }
    for (i = 0; i < arr.length; i++) {
        if (bigNum < arr[i]) {
            bigNum = arr[i];
        }
    }
    if (bigNum == arr[index]) {
        result = "bigger";
    }
    else{
        result = "not bigger";
    }
    
    return result;
}

console.log(biggerThanNeighbors(2, [1, 2, 3, 3, 5]));
console.log(biggerThanNeighbors(2, [1, 2, 5, 3, 4]));
console.log(biggerThanNeighbors(5, [1, 2, 5, 3, 4]));
console.log(biggerThanNeighbors(0, [1, 2, 5, 3, 4]));