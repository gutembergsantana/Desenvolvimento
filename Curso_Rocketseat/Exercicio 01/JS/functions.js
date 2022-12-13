console.log('Aula sobre functions')

/*console.log("Estudar é muito bom")
console.log("Paciência e persistência são importante")
console.log("Revisão é a mãe do aprendizado")
*/
// criar frases motivacionais
// declaration - declaração da função
// function statment

function creatPhrases(){
    console.log("Estudar é muito bom")
    console.log("Paciência e persistência são importante")
    console.log("Revisão é a mãe do aprendizado")
}

// executar a função
// rodar, chamar, invocar
// execute, run, call, invoke

creatPhrases()

console.log("Fim do programa")
let phrase = "Eu quero viver o Amor"
console.log(phrase)
let myArray = phrase.split(" ")
console.log(myArray)
let phraseWithUnderscore = myArray.join("_")
console.log(phraseWithUnderscore.toLowerCase())

console.log(phrase.includes("Amor"))

// Criação de array

let myArray1 = ['a','b','c']
console.log(myArray1)

let myArray2 = new Array('q','w','e')
console.log(myArray2)

// Transformando uma cadeia de caracteres em array

let word = "manipulação"
console.log(Array.from(word))

// Manipulando Arrays
// adicionar um item no fim
let techs = ["html", "css", "js"]
console.log(techs)
techs.push("nodejs")

// adicionar item no começo
techs.unshift("sql")

// remover item do final
techs.pop()

// remover item do começo
techs.shift()

// pegar somente alguns elementos do Array
console.log(techs.slice(1,3))

// remover 1 ou mais item em qualquer posição
techs.splice(1,1)

// encontrar a posição de um elemento no Array
let index = techs.indexOf('css')
console.log(index)








console.log(techs)
