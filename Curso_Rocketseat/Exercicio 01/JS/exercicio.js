var weight
console.log(typeof weight)
let nome = "Gutemberg"
let age = 63
let stars = 25.50
let isSubscribed = true
console.log (nome)
let student = {
    nome:"Gutemberg",
    age:63,
    weihtg:69.5,
    isSubscribed:true, 
}
console.log (typeof student)
console.log (`${student.nome}  com ${student.age} anos de idade pesa ${student.weihtg} Kg.`)

let students = []

students = [
    student
]
//console.log(students)
console.log(students[0])

const john = {
    nome:"John",
    age: 23,
    weight: 74.8,
    isSubscribed: true,
}

students = [
    student,
    john
]

console.log(students)

const santana = {
    nome:"Santana",
    age: 64,
    weight: 69.8,
    isSubscribed: true,
}
 students[2]= santana

 console.log(students)