"use strict";
const readline = require('readline');
const rl = readline.createInterface({input : process.stdin, output : process.stdout});

let user = {
    name: "John",
    say: function(word){
        console.log(this.name, "said", word);
    }
}
user.say("hello");
rl.close();