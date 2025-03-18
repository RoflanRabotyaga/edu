"use strict";
const readline = require('readline');
const rl = readline.createInterface({input : process.stdin, output : process.stdout});

var first = '';
var second = '';

/*
    process.stdout.write("Input first number: ");
    rl.once("line", line1 => {
        process.stdout.write("Input second number: ");
        rl.once("line", line2 => {
            this.first = line1;
            this.second = line2;
            rl.close();
        })
    });

    rl.on('close',()=>{
        console.log('Result: ', this.first + this.second);
    })
*/
var i = 0;
while(i<5){
    console.log(++i);
}
