"use strict";
const readline = require('readline');
const rl = readline.createInterface({input : process.stdin, output : process.stdout});

let book1 = {};
book1.title = "Tiger Trappers";
book1.pubYear = 1946;
book1.author = "Ivan Bahrianyi";

let book2 = {
    title: "Maria",
    pubYear: 1934,
    author: "Ulas Samchuk"
};
for(let key in book1){
    console.log(key, ":", book1[key]);
}
for(let key in book2){
    console.log(key, ":", book2[key]);
}