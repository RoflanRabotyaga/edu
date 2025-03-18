"use strict";
function foo(x){
    return (a, b) => (a + b) * x;
}
let f1 = foo(10);
console.log(f1(2,3));
console.log(f1(3,5));
let f05 = foo(5);
console.log(f05(2,3));
console.log(f05(3,5));