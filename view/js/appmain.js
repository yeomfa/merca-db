/* MENÚ HAMBURSQUESA */

const body = document.querySelector("body"),
    menuBar = document.querySelector(".bar-menu"),
    toggle = document.querySelector(".bar-toggle");
    searchBtn = document.querySelector(".bar-search");


    toggle.addEventListener("click", () => {
        menuBar.classList.toggle("close");
    });

    seeProducts();

/* SCROLL ACTIVE*/

const sections = document.querySelectorAll('section[id]')

function scrollActive(){
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight,
              sectionTop = current.offsetTop - 110,
              sectionId = current.getAttribute('id')

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav__list a[href*=' + sectionId + ']').classList.add('active-op')
        }else{
            document.querySelector('.nav__list a[href*=' + sectionId + ']').classList.remove('active-op')
        }
    })
}
window.addEventListener('scroll', scrollActive)

//Cargar productos

function seeProducts(){
    $.ajax({
        url: "../controller/action/actSeeProducts.php",
        success: function(result){
            insertProducts(JSON.parse(result));
        },
        error: function(xhr){
            $('#alert-error').show();
        }});
}

function insertProducts(result){
    let j = 1;
    $.each(result, function(i) {
        if(i==5){
            j = 2;
        }else if(i == 10){
            j = 3;
        }
        $('#container'+j).append(`<a href="#">
    <div class="cont-producto">
        <div class="contenedor-favorite">
            <i class='bx bx-heart icon-favorite'></i>
        </div>
        <div class="contenedor-photo">
            <img class="producto-img" src="img/photosProducts/${result[i].photoProduct}" alt="No hay producto">
        </div>
        <div class="contenedor-info-producto">
            <div class="contenedor-price">
                $${result[i].priceProduct}
            </div>
            <div class="contenedor-title">
            ${result[i].nameProduct}
            </div>
        </div>
    </div>
    </a>`);
    });

}

