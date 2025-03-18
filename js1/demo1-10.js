"use strict";
function setup(list){
    let i = 0;
    return () => list[i++];
}
let next = setup(["a", "b", "c", "d"]);
console.log(next());
console.log(next());
console.log(next());