//uma simples validação de formulario
document.addEventListener('DOMContentLoaded', () => {
  let pessoais = document.getElementById("pessoais")
  let contacto = document.getElementById("contacto")
  let opcoes = document.getElementById("resto")
  let senha = document.getElementById("senha")
  let Regin = document.getElementById("Regiform")

  const next1 = document.getElementById("next1")
  const next2 = document.getElementById("next2")
  const next3 = document.getElementById("next3")

  const back = document.getElementById("back1")
  const back2 = document.getElementById("back2")
  const back3 = document.getElementById("back3")

  const firstname_error = document.getElementById("firstname_error")
  const lastname_error = document.getElementById("lastname_error")
  const fathername_error = document.getElementById("fathername_error")
  const mothername_error = document.getElementById("mothername_error")
  const nature_error = document.getElementById("nature_error")
  const number_error = document.getElementById("number_error")
  const email_error = document.getElementById("email_error")
  const passwd_error = document.getElementById("senha_error")
  const confirm_passwd_error = document.getElementById("confirm_senha_error")

  var birthday = document.getElementById("date")
  var curso = document.getElementById("curso")
  var turno = document.getElementById("turno")
  var location = document.getElementById("location")
  var classe = document.getElementById("classe")
  var firstName = document.getElementById("FirstName")
  var lastName = document.getElementById("LastName")
  var fatherName = document.getElementById("FatherName")
  var motherName = document.getElementById("MotherName")
  var nature = document.getElementById("nature")
  var number = document.getElementById("number")
  var email = document.getElementById("email")
  var passwd = document.getElementById("INP_senha")
  var confirm_passwd = document.getElementById("INP_confirm_senha")

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

  function input_firstName() {
    if (firstName.value.length < 3) {
      firstName.style.border = "1px solid red"
      firstname_error.style.display = "block"
      firstname_error.innerHTML = "precisa ter 3 caracteres no minimo"

    } else {
      firstName.style.border = "1px solid yellowgreen"
      firstname_error.style.display = "none"

    }
  }

  function input_lastName() {
    if (lastName.value.length < 3) {
      lastName.style.border = "1px solid red"
      lastname_error.style.display = "block"
      lastname_error.innerHTML = "precisa ter 3 caracteres no minimo"

    } else {
      lastName.style.border = "1px solid yellowgreen"
      lastname_error.style.display = "none"

    }
  }

  function input_fatherName() {
    if (fatherName.value.length < 3) {
      fatherName.style.border = "1px solid red"
      fathername_error.style.display = "block"
      fathername_error.innerHTML = "precisa ter 3 caracteres no minimo"

    } else {
      fatherName.style.border = "1px solid yellowgreen"
      fathername_error.style.display = "none"

    }
  }

  function input_motherName() {
    if (motherName.value.length < 3) {
      motherName.style.border = "1px solid red"
      mothername_error.style.display = "block"
      mothername_error.innerHTML = "precisa ter 3 caracteres no minimo"

    }
    else {
      motherName.style.border = "1px solid yellowgreen"
      mothername_error.style.display = "none"

    }
  }

  function input_nature() {
    const array = [
      "Luanda", "Huambo", "Benguela", "Cuando Cubango",
      "Uige", "Malanje", "Kuanza sul", "Kuanza norte",
      "Lunda sul", "Cunene", "Huíla", "Namibe",
      "Luanda norte", "Bié", "Zaire", "Bengo", "Moxiko"
    ]
    if (array.includes(nature.value.trim())) {
      nature.style.border = "1px solid yellowgreen"
      nature_error.style.display = "none"

    } else {
      nature_error.style.display = "block"
      nature_error.innerHTML = "Esta Província não existe"
      nature.style.border = "1px solid red"

    }
  }

  function input_number() {
    if (number.value[0] == 9) {
      if (number.value.length < 9 || number.value.length > 9) {
        number_error.style.display = "block"
        number.style.border = "1px solid red"
        number_error.innerHTML = "precisa de 9 digitos apenas!"
      } else {
        number_error.style.display = "none"
        number.style.border = "1px solid yellowgreen"
      }
    }
    else {
      number_error.style.display = "block"
      number.style.border = "1px solid red"
      number_error.innerHTML = "o primeiro digito deve ser 9"
    }
  }

  function input_email() {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let teste = regex.test(email.value);
    if (teste) {
      email.style.border = "1px solid yellowgreen"
      email_error.style.display = "none"

    } else {
      email_error.style.display = "block"
      email_error.innerHTML = "E-mail invalido"
      email.style.border = "1px solid red"

    }
  }
  function input_password() {
    if (passwd.value.length < 8) {
      passwd_error.style.display = "block"
      passwd_error.innerHTML = "para uma senha mais segura, use 8 digitos"
      passwd.style.border = "1px solid red"

    }
    else {
      passwd.style.border = "1px solid yellowgreen"
      passwd_error.style.display = "none"
    }
  }
  function input_confirm_password() {
    if (confirm_passwd.value != passwd.value) {
      confirm_passwd.style.border = "1px solid red"
      confirm_passwd_error.style.display = "block"
      confirm_passwd_error.innerHTML = "a senha introduzida não condiz com anterior"

    } else {
      confirm_passwd.style.border = "1px solid yellowgreen"
      confirm_passwd_error.style.display = "none"

    }
  }
  firstName.addEventListener("input", input_firstName);
  lastName.addEventListener("input", input_lastName);
  fatherName.addEventListener("input", input_fatherName);
  motherName.addEventListener("input", input_motherName);
  nature.addEventListener("input", input_nature);
  number.addEventListener("input", input_number);
  email.addEventListener("blur", input_email);
  passwd.addEventListener("input", input_password);
  confirm_passwd.addEventListener("input", input_confirm_password);
  Regin.addEventListener("submit", (event) => {
    const isValidate_firstName = input_firstName();
    const isValidate_lastName = input_lastName();
    const isValidate_fatherName = input_fatherName();
    const isValidate_motherName = input_motherName();
    const isValidate_nature = input_nature();
    const isValidate_number = input_number();
    const isValidate_email = input_email();
    const isValidate_password = input_password();
    const isValidate_confirm_password = input_confirm_password();

    if (isValidate_firstName && isValidate_lastName && isValidate_fatherName && isValidate_motherName && isValidate_nature && isValidate_number && isValidate_email && isValidate_password && isValidate_confirm_password) {
      event.preventDefault();
    } else {
      event.preventDefault();
      // para ter certeza que os dados estao certos
      // objecto que vai se transformar em um arquivo JSON
      const object = {
        firstname: firstName.value.trim(), lastname: lastName.value.trim(),
        fathername: fatherName.value.trim(), mothername: motherName.value.trim(),
        provincia: nature.value.trim(), number: number.value.trim(),
        email: email.value.trim(), passwd: passwd.value.trim(), confirm_passwd: confirm_passwd.value.trim(),
        birthday: birthday.value.trim(), address: location.value.trim(),
        grade: classe.value.trim(), curso: curso.value.trim(), periodo: turno.value.trim()
      }
      // conexao e envio de dados do formulario com API
      // e retorno de resposta da API
      fetch("back/API.php", {   // ← ajuste o caminho se necessário
        method: "POST",
        headers: {
          "Content-Type": "application/json; charset=utf-8"
        },
        body: JSON.stringify(object)
      })
        .then(resposta => {
          if (resposta.ok) {
            return resposta.json();
          } else {
            console.log('Erro na requisição POST!');
          }
        })
        .then(json => console.log(json))
        .catch(erro => console.log('Erro de conexão:', erro));

    }
  });
});
