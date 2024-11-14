"use strict";
const readline = require('readline');
const rl = readline.createInterface({input : process.stdin, output : process.stdout});

var number = '';
var power = '';
process.stdout.write("Input number: ");
rl.once("line", line1 => {
    process.stdout.write("Raise to a power: ");
    rl.once("line", line2 => {
        this.number = line1;
        this.power = line2;
        rl.close();
    })
});

rl.on('close',()=>{
    while(this.power != 1){
        this.number *= this.number;
        this.power--;
    }
    console.log('Result: ', this.number);
})
