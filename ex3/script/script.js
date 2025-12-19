let pessoais = document.getElementById("pessoais")
let contacto = document.getElementById("contacto")
let opcoes = document.getElementById("resto")
let senha = document.getElementById("senha")
let ReginForm = document.getElementById("ReginForm")
const loginForm = document.getElementById("loginForm")

const next1 = document.getElementById("next1")
const next2 = document.getElementById("next2")
const next3 = document.getElementById("next3")

const back = document.getElementById("back1")
const back2 = document.getElementById("back2")
const back3 = document.getElementById("back3")

const input_firstname_error = document.getElementById("firstname_error")
const input_lastname_error = document.getElementById("lastname_error")
const input_fathername_error = document.getElementById("fathername_error")
const input_mothername_error = document.getElementById("mothername_error")
const input_nature_error = document.getElementById("nature_error")
const input_number_error = document.getElementById("number_error")
const input_email_error = document.getElementById("email_error")
const input_location_error = document.getElementById("location_error")
const input_password_error = document.getElementById("senha_error")
const input_confirm_password_error = document.getElementById("confirm_senha_error")

var input_firstName = document.getElementById("FirstName")
var input_lastName = document.getElementById("LastName")
var input_fatherName = document.getElementById("FatherName")
var input_motherName = document.getElementById("MotherName")
var input_nature = document.getElementById("nature")
var input_number = document.getElementById("number")
var input_email = document.getElementById("email")
var input_location = document.getElementById("location")
var input_password = document.getElementById("INP_senha")
var input_confirm_password = document.getElementById("INP_confirm_senha")

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

next1.addEventListener("click", () => {
  mostrarSecao("contacto")
})
next2.addEventListener("click", () => {
  mostrarSecao("opcoes")
})
next3.addEventListener("click", () => {
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

back.addEventListener("click", () => {
  VoltarSecao("pessoais")
})
back2.addEventListener("click", () => {
  VoltarSecao("contacto")
})
back3.addEventListener("click", () => {
  VoltarSecao("opcoes")
})

function ValidateCamp() {
  input_firstName.addEventListener("input", () => {
    input_firstName.style.border = "1px solid yellowgreen"
    input_firstname_error.style.display = "none"
    if (input_firstName.value.length < 3) {
      input_firstName.style.border = "1px solid red"
      input_firstname_error.style.display = "block"
      input_firstname_error.innerHTML = "precisa ter 3 caracteres no minimo"
    }
  });
  input_lastName.addEventListener("input", () => {
    input_lastName.style.border = "1px solid yellowgreen"
    input_lastname_error.style.display = "none"
    if (input_lastName.value.length < 3) {
      input_lastName.style.border = "1px solid red"
      input_lastname_error.style.display = "block"
      input_lastname_error.innerHTML = "precisa ter 3 caracteres no minimo"
    }
  });
  input_fatherName.addEventListener("input", () => {
    if (input_fatherName.value.length < 3) {
      input_fatherName.style.border = "1px solid red"
      input_fathername_error.style.display = "block"
      input_fathername_error.innerHTML = "precisa ter 3 caracteres no minimo"
    } else {
      input_fatherName.style.border = "1px solid yellowgreen"
      input_fathername_error.style.display = "none"
    }
  });
  input_motherName.addEventListener("input", () => {
    input_motherName.style.border = "1px solid yellowgreen"
    input_mothername_error.style.display = "none"
    if (input_motherName.value.length < 3) {
      input_motherName.style.border = "1px solid red"
      input_mothername_error.style.display = "block"
      input_mothername_error.innerHTML = "precisa ter 3 caracteres no minimo"
    }
  });

  input_nature.addEventListener("input", (event) => {
    const array = [
      "Luanda", "Huambo", "Benguela", "Cuando Cubango",
      "Uige", "Malanje", "Kuanza sul", "Kuanza norte",
      "Lunda sul", "Cunene", "Huíla", "Namibe",
      "Luanda norte", "Bié", "Zaire", "Bengo", "Moxiko"
    ]
    let value = event.target.value.trim()
    if (array.includes(value)) {
      input_nature.style.border = "1px solid yellowgreen"
      input_nature_error.style.display = "none"
    } else {
      input_nature_error.style.display = "block"
      input_nature_error.innerHTML = "Esta Província não existe"
      input_nature.style.border = "1px solid red"
    }
  });

  input_number.addEventListener("input", (event) => {
    let number = event.target.value.trim()
    if (number[0] == 9) {
      if (number.length < 9 || number.length > 9) {
        input_number_error.style.display = "block"
        input_number.style.border = "1px solid red"
        input_number_error.innerHTML = "precisa de 9 digitos apenas!"
      } else {
        input_number_error.style.display = "none"
        input_number.style.border = "1px solid yellowgreen"
      }
    } else {
      input_number_error.style.display = "block"
      input_number.style.border = "1px solid red"
      input_number_error.innerHTML = "o primeiro digito deve ser 9"
    }
  });
  input_email.addEventListener("input", (event) => {
    let value = event.target.value
    if (value.includes("@")) {
      input_email.style.border = "1px solid yellowgreen"
      input_email_error.style.display = "none"
    } else {
      input_email_error.style.display = "block"
      input_email_error.innerHTML = "falta o '@' no seu endereço"
      input_email.style.border = "1px solid red"
    }
  });
  input_password.addEventListener("keyup", (event) => {
    let passwd = event.target.value
    if (passwd.length < 8) {
      input_password_error.style.display = "block"
      input_password_error.innerHTML = "para uma senha mais segura, use 8 digitos"
      input_password.style.border = "1px solid red"
    }
    else {
      input_password.style.border = "1px solid yellowgreen"
      input_password_error.style.display = "none"
    }
  });
  input_confirm_password.addEventListener("keyup", () => {
    if (input_confirm_password.value != input_password.value) {
      input_confirm_password.style.border = "1px solid red"
      input_confirm_password_error.style.display = "block"
      input_confirm_password_error.innerHTML = "a senha introduzida não condiz com anterior"
    } else {
      input_confirm_password.style.border = "1px solid yellowgreen"
      input_confirm_password_error.style.display = "none"
    }
  });
}

ValidateCamp()
