
let registrarse=document.querySelector('#register');
registrarse.addEventListener('click', function(){
    const nombre = document.querySelector('#name');
    const correo= document.querySelector('#email');
    const password = document.querySelector('#password');
    console.log(`Registro exitoso: ${nombre}, ${correo}, ${password}`);
    realizaProceso(nombre, correo, password);
});
function realizaProceso(nombre, correo, password){
    const datos="name="+nombre+"&email="+correo+"&password="+password;

        $.ajax({
                data:  datos, //datos que se envian a traves de ajax
                url:   '../controller/action/actSignup.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve

                }
        });
}
