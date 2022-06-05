/* === FOCUS ===*/
const inputs =document.querySelectorAll(".form_input")
const btnSendEmail = document.getElementById('btn-send-email');

/* === Add focus ===*/
function addfocus(){
    let parent =this.parentNode.parentNode
    parent.classList.add("focus")
}
/* === Remove focus ===*/
function remfocus(){
    let parent =this.parentNode.parentNode
    if(this.value == ""){
        parent.classList.remove("focus")
    }
}
/* === to call function===*/
inputs.forEach(input=>{
    input.addEventListener("focus", addfocus)
    input.addEventListener("blur", remfocus)
})

$('#form-email').hide();

btnSendEmail.addEventListener('click', () => {
    $('#form-email').show();
    $('#form-login').hide();
});