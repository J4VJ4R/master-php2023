'uses strict'

function Person(age, weight, size){
    this.age = age
    this.weight = weight
    this.size = size

    this.walk = ()=>{
        console.log('Person walking')
    }

    this.sitdown = ()=>{
        console.log('Person sitdown')
    }
}

var javi = new Person(39, 62, 1.60)
var Ana = new Person(22, 66, 1.55)
console.log(javi.sitdown())
console.log('Ana is ' + Ana.age + ' years old ' + 'and is a')