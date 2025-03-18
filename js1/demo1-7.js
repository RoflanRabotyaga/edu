"use strict";
function Rectangle(w, h){
    this.width = w;
    this.height = h;
}
Rectangle.prototype.toString = function(){
    return "I am a rectangle";
};
Rectangle.prototype.area = function(){
    return this.width * this.height;
};
//console.log(r.toString());
// console.log(r.area());
// console.log(r instanceof Rectangle);
/////////////////////////////////
function Square(side){
    Rectangle.call(this, side, side);
}
Square.prototype = Rectangle.prototype;
Square.prototype.constructor = Square;
Square.prototype.toString = function(){
    return "I am a square";
};
let s = new Square(100);
console.log(s.width, s.height);
console.log(s.toString());
console.log(s.area());
console.log(s instanceof Square);
console.log(s.constructor);