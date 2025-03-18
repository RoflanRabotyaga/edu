"use strict";
const readline = require('readline');
const rl = readline.createInterface({input : process.stdin, output : process.stdout});

function twoLargest(num1,num2,num3){
    let sortArr = [num1,num2,num3];
    for(let j = 0; j < 3; j++)
        for(let i = 1; i < 3; i++)
            if(sortArr[i] > sortArr[i - 1]){
                let temp = sortArr[i];
                sortArr[i] = sortArr[i - 1];
                sortArr[i - 1] = temp;
            }
    sortArr.pop();
    return sortArr;
}
function calc(n1, n2, op){
    return op(n1, n2);
}
function power(num, pow){
    for (let i = 1; i < pow; i++)
        num *= num;
    return num;
}
function largestTwoSquareSum(n1, n2, n3){
    let arr = twoLargest(n1,n2,n3);
    return calc(calc(arr[0], 2, power), calc(arr[1], 2, power), (a, b) => a + b);
}

process.stdout.write("Input first number: ");
rl.once("line", line1 => {
    process.stdout.write("Input second number: ");
    rl.once("line", line2 => {
        process.stdout.write("Input third number: ");
        rl.once("line", line3 => {
            console.log(largestTwoSquareSum(line1, line2, line3));
            rl.close();
        })
    })
});

