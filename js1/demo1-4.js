"use strict";
const readline = require('readline');
const rl = readline.createInterface({input : process.stdin, output : process.stdout});

var posNum;
function waitForUserInput() {
    rl.question("Enter positive number: ", function(answer) {
        if (answer > 0){
            posNum = answer;
            console.log((answer % 2 == 0) ? 'Number is even' : 'Number is odd');
            rl.close();
        } else {
            waitForUserInput();
        }
    });
}
waitForUserInput();