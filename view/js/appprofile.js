var body = document.querySelector("body"),
    menuEdit = document.querySelector(".container-edits"),
    warning = document.querySelector(".warning"),
    succes = document.querySelector(".succes"),
    error = document.querySelector(".error"),
    select = document.querySelector(".select"),
    toggle = document.querySelector(".btn-modify"),
    btnDelete = document.querySelector(".btn-delete"),
    btnCancel = document.querySelector(".btn-cancel"),
    btnAct = document.querySelector(".btn-act"),
    btnAcept = document.querySelector(".btn-acept"),
    toggleClose = document.getElementById('btnClose'),
    toggleCloseSelect = document.getElementById('btnClose-select'),
    inputFileImg = document.querySelector('.select-file'),
    selectPhoto = document.querySelector('.up-image')
preImgChange = document.getElementById('pre-img'),
    sendImg = document.getElementById('send-image');

/*** BORRAR CUENTA ***/
btnDelete.addEventListener('click', () => {
    warning.classList.toggle("close");
});

btnCancel.addEventListener('click', () => {
    warning.classList.toggle("close");
});

/*** ACTUALIZAR DATOS ***/
btnAcept.addEventListener('click', () => {
    succes.classList.toggle("close");
});

toggle.addEventListener("click", () => {
    menuEdit.classList.toggle("close");
});

toggleClose.addEventListener('click', () => {
    menuEdit.classList.toggle("close");
});

/*** ACTUALIZAR FOTO DE PERFIL ***/

sendImg.addEventListener('click', () => {
    setTimeout('location.reload()', 500);
});

selectPhoto.addEventListener('click', () => {
    select.classList.toggle("close");
});

toggleCloseSelect.addEventListener('click', () => {
    select.classList.toggle("close");
});

inputFileImg.addEventListener('change', () => {
    const file = inputFileImg.files;
    const firstImg = URL.createObjectURL(file[0]);
    preImgChange.src = firstImg;
});