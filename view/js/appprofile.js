var body = document.querySelector("body");
let warning = document.querySelector(".warning");
let error = document.querySelector(".error");
let select = document.querySelector(".select");
let toggle = document.querySelector(".btn-modify");
let btnDelete = document.querySelector(".btn-delete");
let btnCancel = document.querySelector(".btn-cancel");
let btnAct = document.querySelector(".btn-act");
let toggleCloseSelect = document.getElementById('btnClose-select');
let inputFileImg = document.querySelector('.select-file');
let selectPhoto = document.querySelector('.up-image')
let preImgChange = document.getElementById('pre-img');
let sendImg = document.getElementById('send-image');
    
var upImage = document.querySelector('#send-image');

// Cargar usuario

loadUser();

/*** BORRAR CUENTA ***/
btnDelete.addEventListener('click', () => {
    warning.classList.toggle("close");
});

btnCancel.addEventListener('click', () => {
    warning.classList.toggle("close");
});

/*** ACTUALIZAR DATOS ***/

$('#modal-act').hide();
$('#alert-success').hide();

$('#btn-acept').click(function(){
    $('#alert-success').hide();
});

$('#btnClose').click(function(){
    $('#modal-act').hide();
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

$('#btn-modify').click(function(){
    let idUser = $('#id-user').val();

    let link = '../controller/action/actSeeUser.php?idUser='+ idUser;

    $.ajax({
        url: link,
        data: idUser,
        success: function(data){
            let aux = JSON.parse(data);
            $('#modal-act').show();
            $('#modal-act input[name=idUser]').val(aux.id);
            $('#modal-act input[name=newname]').val(aux.name);
            $('#modal-act input[name=newemail]').val(aux.email);
            $('#modal-act input[name=newphone]').val(aux.phone);
            $('#modal-act input[name=newdir]').val(aux.dir);
            $('#modal-act input[name=newpass]').val(aux.password);
        }
    });
});

$('#form-edit').submit(function(e){

    e.preventDefault();

    var data = $(this).serializeArray();

    $.ajax({
        type: "post",
        url: "../controller/action/actModifyUser.php",
        data: data,
        dataType: "json",
        success: function (result) {
            $('#modal-act').hide();
            $('#alert-success').show();
            loadUser();
        }
    });

});

// Cargar datos del usuario

function loadUser(){
    
    let idUser = $('#id-user').val();
    let link = '../controller/action/actSeeUser.php?idUser='+ idUser;
    $.ajax({
        url: link,
        data: idUser,
        success: function(data){
            let aux = JSON.parse(data);
            $('#name-user').text(aux.name);
            $('#email-user').text(aux.email);
            $('#phone-user').text(aux.phone);
            $('#dir-user').text(aux.dir);
            $('#password-user').text(aux.password);
            let src = 'img/ppUser/'+aux.photo;
            document.getElementById('img-user').src = src;
        }
    });


}

// Subir foto

    upImage.addEventListener('click', function () {

        var data = new FormData();
        var file = $('#img')[0].files[0];
        data.append('img', file);

        $.ajax({
            type: "post",
            url: "../controller/action/actUpdatePhoto.php",
            data: data,
            contentType: false,
            processData: false,
            success: function (result) {
                loadUser();
            }
        });

    });