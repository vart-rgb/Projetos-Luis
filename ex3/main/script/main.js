const file_emark = document.getElementById("file-earmark")
const envelope = document.getElementById("envelope")

file_emark.addEventListener("click", function() {
  alert("funcionalidade em breve")
})

envelope.addEventListener("click", function() {
  alert("funcionalidade em breve")
})

const info = document.getElementsByClassName("info")
const main = document.getElementById("main")
const moon = document.getElementById("moon")
const sun = document.getElementById("sun")
const body = document.getElementById("body")
const circle = document.getElementById("perfil")

moon.addEventListener("click", () => {
  body.style.background = "black"
  body.style.color = "white"
  body.style.transition = "1s ease-in-out"
  sun.style.display = "block"
  main.style.border = "1px solid white"
  main.style.transition = "1s ease-in-out"
  info.style.borderBottom = "1px solid white"
  moon.style.display = "none"
  envelope.style.color = "white"
  envelope.style.border = "1px solid white"
  file_emark.style.color = "white"
  file_emark.style.border = "1px solid white"
  circle.style.border = "3px solid red"
})

sun.addEventListener("click", () => {
  body.style.background = "white"
  body.style.transition = "1s ease-in-out"
  moon.style.display = "block"
  sun.style.display = "none"
  main.style.border = "1px solid black"
  main.style.color = "black"
  main.style.transition = "1s ease-in-out"
})
