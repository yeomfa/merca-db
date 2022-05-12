var body = document.querySelector("body"),
    menuEdit = document.querySelector(".container-edits"),
    warning = document.querySelector(".warning"),
    succes = document.querySelector(".succes"),
    error = document.querySelector(".error"),
    toggle = document.querySelector(".btn-modify"),
    btnDelete = document.querySelector(".btn-delete"),
    btnCancel = document.querySelector(".btn-cancel"),
    btnAct = document.querySelector(".btn-act"),
    btnAcept = document.querySelector(".btn-acept"),
    toggleClose = document.getElementById('btnClose');

    btnDelete.addEventListener('click', () => {
        warning.classList.toggle("close");
    });

    btnCancel.addEventListener('click', () => {
        warning.classList.toggle("close");
    });

    btnAcept.addEventListener('click', () => {
        succes.classList.toggle("close");
    });

    toggle.addEventListener("click", () => {
        menuEdit.classList.toggle("close");
    });

    toggleClose.addEventListener('click', () => {
        menuEdit.classList.toggle("close");
    });