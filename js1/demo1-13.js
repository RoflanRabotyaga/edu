let names = {
    list: [],
    add: function(s){
        this.list.push(s);
    },
    show: function(s){
        return this.list.join(", ");
    }
};
let users = ["John", "Mike", "Harry"];
users.forEach(names.add, names);
//or
users.forEach(names.add.bind(names));
console.log(names.list);