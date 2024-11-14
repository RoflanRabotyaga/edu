"use strict";
const readline = require('readline');
const rl = readline.createInterface({input : process.stdin, output : process.stdout});

function power(num, pow){
    for (var i = 1; i < pow; i++){
        num *= num;
    }
    return num;
}
process.stdout.write("Input number: ");
rl.once("line", line1 => {
    process.stdout.write("Raise to a power: ");
    rl.once("line", line2 => {
        console.log(power(line1, line2));
        rl.close();
    })
});

