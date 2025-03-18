"use strict";

function User(firstName, lastName, age){
    this.firstName = firstName;
    this.lastName = lastName;
    this.age = age;
}
User.prototype.fullName = function(){
    console.log(this.firstName, this.lastName);
}
let Johnny = new User("John", "Smith", 55);
Johnny.fullName();