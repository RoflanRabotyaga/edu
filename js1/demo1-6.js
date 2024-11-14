"use strict";

function Rectangle(w, h){
    this.width = w;
    this.height = h;
    this.color = "white";
}
let r1 = new Rectangle(100, 200);
let r2 = new r1.constructor(200, 300);

console.log(r1.color);
r2.color = "black";
console.log(r2.color);
console.log(r2.constructor);
