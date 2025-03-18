"use strict";
const readline = require('readline');
const rl = readline.createInterface({input : process.stdin, output : process.stdout});

var start = '';
var end = '';
process.stdout.write("Sum of even numbers from: ");
rl.once("line", line1 => {
    process.stdout.write("to: ");
    rl.once("line", line2 => {
        this.start = +line1;
        this.end = +line2;
        this.start -= this.start % 1;
        this.end -= this.end % 1;
        rl.close();
    })
});

rl.on('close',()=>{
    var result = 0;
    for(var i=this.start; i <= this.end; i++){
        if((i % 2) == 0)
            result += i;
    }
    console.log('Result: ', result);
})
