const open = document.getElementById('open');
const modal_container = document.getElementById('modal_container');
const close = document.getElementById('close');

open.addEventListener('click', () => {
    modal_container.classList.add('show');
});

close.addEventListener('click', () => {
    modal_container.classList.remove('show');
});

/*Não permitir números em um input*/

var inputNome = document.querySelector("#nome");
nome.addEventListener("keypress", function(e) {
    var keyCode = (e.keyCode ? e.keyCode : e.which);
  
  if (keyCode > 47 && keyCode < 58) {
    e.preventDefault();
  }
});

/*Não permitir números em um input*/

var input = document.querySelector("#CPF");
input.addEventListener("keypress", function(e) {
    if(!checkChar(e)) {
      e.preventDefault();
  }
});

var input = document.querySelector("#CEP");
input.addEventListener("keypress", function(e) {
    if(!checkChar(e)) {
      e.preventDefault();
  }
});

var input = document.querySelector("#telCel");
input.addEventListener("keypress", function(e) {
    if(!checkChar(e)) {
      e.preventDefault();
  }
});

var input = document.querySelector("#telFixo");
input.addEventListener("keypress", function(e) {
    if(!checkChar(e)) {
      e.preventDefault();
  }
});

function checkChar(e) {
    var char = String.fromCharCode(e.keyCode);
  
  console.log(char);
    var pattern = '[0-9]';
    if (char.match(pattern)) {
      return true;
  }
}