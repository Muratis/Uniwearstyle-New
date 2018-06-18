
$(document).ready(function(){

    $("#carousel").carousel();
    


        $(".scroll-js[href*=#]").on("click", function (event) {
            //отменяем стандартную обработку нажатия по ссылке
            event.preventDefault();

            //забираем идентификатор блока с атрибута href
            var id  = $(this).attr('href').slice(),

            //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;

            //анимируем переход на расстояние - top за 1500 мс
            $('body,html').animate({scrollTop: top}, 1000);
        });

    $(".button_catalog button[value*=#]").on("click", function (event) {
        //отменяем стандартную обработку нажатия по ссылке


        //забираем идентификатор блока с атрибута href
        var id  = $(this).attr('value').slice(),

        //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;

        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1000);
    });


})