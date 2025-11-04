var pessoais = document.getElementById("pessoais")
var contacto = document.getElementById("contacto")
var opcoes = document.getElementById("resto")
var senha = document.getElementById("senha")
var ReginForm = document.getElementById("ReginForm")
const loginForm = document.getElementById("loginForm")

const next1 = document.getElementById("next1")
const next2 = document.getElementById("next2")
const next3 = document.getElementById("next3")

const back = document.getElementById("back1")
const back2 = document.getElementById("back2")
const back3 = document.getElementById("back3")

function mostrarSecao(secao) {
  pessoais.style.display = "none"
  contacto.style.display = "none"
  opcoes.style.display = "none"
  senha.style.display = "none"

  switch (secao) {
    case "contacto":
      contacto.style.display = "block"
      break
    case "opcoes":
      opcoes.style.display = "block"
      break
    case "senha":
      senha.style.display = "block"
      break
    default:
      pessoais.style.display = "block"
  }
}

next1.addEventListener("click", function() {
  mostrarSecao("contacto")
})
next2.addEventListener("click", function() {
  mostrarSecao("opcoes")
})
next3.addEventListener("click", function() {
  mostrarSecao("senha")
})

function VoltarSecao(secao) {
  pessoais.style.display = "none"
  contacto.style.display = "none"
  opcoes.style.display = "none"
  senha.style.display = "none" 

  switch (secao) {
    case "pessoais":
      pessoais.style.display = "block"
      break
    case "contacto":
      contacto.style.display = "block"
      break
    case "opcoes":
      opcoes.style.display = "block"
      break
    default:
      console.log("não tenha para dizer")
  }
}

back.addEventListener("click", function() {
  VoltarSecao("pessoais")
})
back2.addEventListener("click", function() {
  VoltarSecao("contacto")
})
back3.addEventListener("click", function() {
  VoltarSecao("opcoes")
})
