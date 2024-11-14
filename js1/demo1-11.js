"use strict";
function foo(){
    let arr = [];

    for(var i= 0; i<3; i++)
        (function (i){
            arr[i] = function(){return i};
        })(i);
    return arr;
}
let next = foo();
console.log(next[0]());
console.log(next[1]());
console.log(next[2]());