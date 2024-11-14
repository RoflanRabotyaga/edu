"use strict";
const readline = require('readline');
const rl = readline.createInterface({input : process.stdin, output : process.stdout});

var first = '';
var last = '';

process.stdout.write("Enter your name: ");
rl.once("line", line1 => {
    process.stdout.write("Enter your family name: ");
    rl.once("line", line2 => {
        this.first = line1;
        this.last = line2;
        rl.close();
    })
});

rl.on('close',()=>{
    console.log(`Hello, ${this.first} ${this.last}`);
})

