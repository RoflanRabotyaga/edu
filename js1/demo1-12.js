let x = 10;
function foo(){
    let x = 20;
    function bar(){
        console.log(this.x);
    }
    bar();
}
foo();