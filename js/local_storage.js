'use strict'

if(typeof(localStorage)){
    console.log('posible')
}else{
    console.log('not posible')
}

var person = localStorage.setItem('Name', 'Siri')
var peopleData = {
    name: 'Sonia',
    lastN: 'Serin'
}
var saveDataPeople = localStorage.setItem('dataPeople', JSON.stringify(peopleData))

var dataServer = JSON.parse(localStorage.getItem('dataPeople'))

console.log(dataServer.name)
