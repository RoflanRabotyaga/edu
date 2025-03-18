"use strict";

let re = /([0-9]{1,2})-(\d{1,2})-([0-9]{4})/i;
let arr = ["25-02-2012", "25-2-2012", "01-12-2011", "2-12-1978", "02-june-2015"];
arr.forEach(function(currentValue){
    console.log(re.test(currentValue));
})