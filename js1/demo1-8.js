"use strict";
function sumOf(current, max, action){
    let result = 0;
    for(; current<max; current++)
        result += action(current);
    return result;
}
let sum = sumOf(1, 10, i => i);
let sumOfSquare = sumOf(1, 10, i => i*i);
let sumOfCube = sumOf(1, 10, i => i*i*i);
console.log(sum, sumOfSquare, sumOfCube);