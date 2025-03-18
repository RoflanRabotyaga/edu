"use strict";
const readline = require('readline');
const rl = readline.createInterface({input : process.stdin, output : process.stdout});

var age = 0;
function isNaturalNumber(n) {
    n = n.toString(); // force the value incase it is not
    var n1 = Math.abs(n),
        n2 = parseInt(n, 10);
    return !isNaN(n1) && n2 === n1 && n1.toString() === n;
}
function waitForUserInput() {
    rl.question("Enter your age (natural number): ", function(answer) {
        if (isNaturalNumber(answer)){
            age = answer;
            rl.close();
        } else {
            waitForUserInput();
        }
    });
}

waitForUserInput();
rl.on('close',()=> {
    if(age <= 17)
        console.log('Study');
    else if(age <= 59)
        console.log('Work');
    else
        console.log('Retire');
})