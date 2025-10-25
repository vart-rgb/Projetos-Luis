var loginBtn = document.getElementById("loginbtn")
var regiBtn = document.getElementById("regibtn")
var loginForm = document.getElementById("loginForm")
var regiForm = document.getElementById("regiForm")
var cada = document.getElementById("cada")
const login = document.getElementById("login")
const regi = document.getElementById("regi")


regiBtn.addEventListener("click", function() {
  login.style.display = "block"
  regiForm.style.display = "block"
  regi.style.display = "none"
})

loginBtn.addEventListener("click", function() {
  regi.style.display = "block"
  loginForm.style.display = "block"
  regiForm.style.display = "none"
  login.style.display = "none"
})

cada.addEventListener("click", function() {
  login.style.display = "block"
  regiForm.style.display = "block"
  regi.style.display = "none"
})
