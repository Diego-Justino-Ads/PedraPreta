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

function validation() {

  var Nome = '';
  var cpf = '';
  var end = '';
  var num = '';
  var cel = '';

  var Nome = document.getElementById('nome').value;
  var cpf = document.getElementById('ID').value;
  var end = document.getElementById('endereco').value;
  var num = document.getElementById('numero').value;
  var cel = document.getElementById('telCel').value;

  if ((nome == Nome) && (ID == cpf) && (endereco == end) && (numero == num) && (telCel == cel)) {
    alert("Os campos marcados com asterisco (*) são de preenchimento obrigatório");
  }
  else {
    alert("Salvo com sucesso");
  }
  return false;
}