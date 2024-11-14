"use strict";
let arr = ["25-02-2012", "25-2-2012", "01-12-2011", "2-12-1978"];
let getDate = function(stringDate){
    return new Date(stringDate);
}
//stackoverflow convert date to US format
/*function convertDate(regdate) {
    return regdate.replace(/(\d+)-(\d+)-(\d+)\s+(\d+):(\d+):(\d+)/,
        function(m, v1, v2, v3, v4, v5, v6) {
            let hour24 = parseInt(v4, 10);
            let hour12 = hour24 % 12 || 12;
            let ampm = hour24 < 12 ? "AM" : "PM";
            return `${v2}/${v1}/${v3} ${hour12}:${v5}:${v6} ${ampm}`;
        });
}*/
arr.forEach(function(currentValue){console.log(getDate(/*convertDate*/(currentValue)))});