"use strict";

let s = "We know that monochrome is a gradation of grey color . I like googlechrome .";
let txt = "chrome";
let word = [];

word = (function(string, substring){
    let result = [];
    let myArray = string.split(" ");
    myArray.forEach(function(currentValue){
        if(currentValue.search(substring) != -1){
            result.push(currentValue);
        }
    })
    return result;
})(s, txt);
console.log(word);