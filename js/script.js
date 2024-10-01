const cadastrarButton = document.querySelector("#cadastrar");
const closeModalButton = document.querySelector("#close-modal");
const modal = document.querySelector("#modal");
const fade = document.querySelector("#fade");

const toggleModal = () =>{
 [modal, fade].forEach((el) => el.classList.toggle("hide"));
}

[cadastrarButton, closeModalButton].forEach((el) => {
  el.addEventListener("click", () => toggleModal());
});