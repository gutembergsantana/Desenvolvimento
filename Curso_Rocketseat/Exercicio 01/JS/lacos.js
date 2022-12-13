//let nota = 65
//let scoreA >= 90 && scoreA <=100

function notafinal(nota){
    let resultado =""


if(nota >=90 && nota <=100){
    resultado = "A"
} else if(nota >=80 && nota <=89){
    resultado = "B"
} else if(nota >=70 && nota <=79){
    resultado = "C"
} else if(nota >=60 && nota <=69){
    resultado = "D"
} else if(nota < 60 && nota >=0){
    resultado = "F"
} else{
    resultado = "Nota inválida"
}
return resultado
}

console.log(notafinal(101))
console.log(notafinal(-1))
console.log(notafinal(95))
console.log(notafinal(85))
console.log(notafinal(75))
console.log(notafinal(65))

