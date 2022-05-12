$(document).ready(function() {

    $("#form-edit").submit(function(e) {

        e.preventDefault();

        var data = $(this).serializeArray();
        let lol = document.getElementById('test');
        let text = "Hola";

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

});
