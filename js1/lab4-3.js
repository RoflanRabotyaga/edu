"use strict";
const readline = require('readline');
const rl = readline.createInterface({input : process.stdin, output : process.stdout});

let nums = [5,2,4]
let squaresFor = [];
let squaresForIn = [];
nums[99] = 3;

for(let i = 0; i < nums.length; i++){
    squaresFor[i] = Math.pow(nums[i], 2);
}

for(let i in nums){
    squaresForIn.push(Math.pow(nums[i], 2));
}

console.log(squaresForIn, "\n"/*, squaresFor*/);

let min = Math.min.apply(Math, squaresForIn);
console.log(min);

rl.close();