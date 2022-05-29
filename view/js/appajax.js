$(document).ready(function () {

    $("#form-edit").submit(function (e) {

        e.preventDefault();

        var data = $(this).serializeArray();

        $.ajax({
            type: "post",
            url: "../controller/action/actModifyUser.php",
            data: data,
            dataType: "json",
            success: function (result) {
                succes.classList.toggle("close");
                menuEdit.classList.toggle("close");
            }
        });

    });

    var upImage = document.querySelector('#send-image');

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
            }
        });

    })
});