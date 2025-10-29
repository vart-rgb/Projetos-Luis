var pessoais = document.getElementById("pessoais")
var contacto = document.getElementById("contacto")
var opcoes = document.getElementById("resto")
var password = document.getElementById("senha")
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
  password.style.display = "none"

  switch (secao) {
    case "contacto":
      contacto.style.display = "block"
      break
    case "opcoes":
      opcoes.style.display = "block"
      break
    case "password":
      password.style.display = "block"
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
  mostrarSecao("password")
})

function VoltarSecao(secao) {
  pessoais.style.display = "none"
  contacto.style.display = "none"
  opcoes.style.display = "none"
  password.style.display = "none"

  switch (secao) {
    case "pessoais":
      pessoais.style.display = "none"
      break
    case "contacto":
      contacto.style.display = "none"
      break
    case "opcoes":
      opcoes.style.display = "none"
      break
    default:
      password.style.display ="block"
  }
}

next1.addEventListener("click", function() {
  mostrarSecao("pessoais")
})
next2.addEventListener("click", function() {
  mostrarSecao("contacto")
})
next3.addEventListener("click", function() {
  mostrarSecao("opcoes")
})
