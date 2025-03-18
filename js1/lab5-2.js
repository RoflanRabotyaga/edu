"use strict";
class User{
    constructor(firstName, lastName, age) {
        this.firstName = firstName;
        this.lastName = lastName;
        this.age = age;
    }
    fullName(){
        console.log(this.firstName, this.lastName);
    }
}
let Johnny = new User("John", "Smith", 55);
Johnny.fullName();
class SuperUser extends User{
    constructor(firstName, lastName, age, role) {
        super(firstName, lastName, age);
        this.role = role;
    }
    AgeAndJob(){
        console.log("He is", this.age, "and he is working as an", this.role);
    }
}
let Timmy = new SuperUser("Tim", "Burton", "43", "admin");
Timmy.fullName();
Timmy.AgeAndJob();