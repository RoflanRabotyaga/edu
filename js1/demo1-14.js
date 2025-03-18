let y = 0;
let err = new Error("division by zero")
err.name = "MathError";
try{
    if(y == 0)
        throw err;
    var x = 10 / y;
    print(x);
}catch(e){
    console.log(e.name, e.message);
}
