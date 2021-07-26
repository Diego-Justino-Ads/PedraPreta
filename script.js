const open = document.getElementById('open');
const modal_container = document.getElementById('modal_container');
const close = document.getElementById('close');

open.addEventListener('click', () => {
    modal_container.classList.add('show');
});

close.addEventListener('click', () => {
    modal_container.classList.remove('show');
});

/*function validate() {
    let x = document.forms["myForm"]["nome"].value;
    if (x == "") {
      alert("Nome deve ser preenchido");
      return false;
    }
}*/