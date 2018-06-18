



$(document).ready(function(){

  
    // $("#zoom").imageLens();

    // $(".product").hide();
    $(".off-product").hide();

    //
    $(".off-product").click(function() {
        $(".on-product").show();
        $(".off-product").hide();
        $(".product").show('blind',600);
    });
    //

    $(".on-product").click(function() {
        $(".off-product").show();
        $(".product").hide('blind',600);
        $(".on-product").hide();
    });

    /**
     *
     */

    // $(".sizes_product").hide();
    $(".off-sizes").hide();

    $(".off-sizes").click(function() {
        $(".on-sizes").show();
        $(".off-sizes").hide();
        $(".sizes_product").show('blind',600);
    });

    $(".on-sizes").click(function() {
        $(".off-sizes").show();
        $(".sizes_product").hide('blind',600);
        $(".on-sizes").hide();
    });

    /**
     *
     */
    $(".filter_btn").on('click',function () {

        $.ajax({
            type: "GET",
            data: {
                'size_id': $(this).val(),
            },
            url: location,


            success: function (data) {
                $('.content').html(data);
                $(this).addClass('activeFilter ');
            },

        })
    })



    $(".typeClothes").on('click',function () {
        
        $.ajax({
            type: "GET",
            data: {
                'size_id': $(this).val(),
                'typeClothes': $(this).val(),
            },
            url: '/catalog',

            success: function (data) {
                $('.content').html(data);
                $(this).addClass('activeFilter ');
            },
            
        })
        
    })






    $(".filter_btn").on('click',function () {
        
        $.ajax({
            type: "GET",
            data: {
                'size_id': $(this).val(),
            },
            url: location,


            success: function (data) {
                $('.content').html(data);
                $(this).addClass('activeFilter ');
            },

        })
    })


    $(".ajax_item").on('click',function (event) {
        event.preventDefault();

        $.ajax({
            type: "GET",
            data: {
                'id': $(this).attr('href'),
            },

            url: "/tshirt/one/{id?}",

            success: function (data) {
                
                $(".content2").html(data);
                $(".content").hide();
                $(".filter").hide();
                $(".collapse-filter").hide();
                $("#back_to_catalog").show();
                // $(".content").show('slide');
            }
        })
    })

    $("#back_to_catalog").on('click', function (event) {
        event.preventDefault();

        // $.ajax({
        //     type: "GET",
        //     url: "/",
        //
        //     success: function (data) {
                $('.content2').empty();
                $('.content').show();
                $('.filter').show();
                 $(".collapse-filter").show();
                $("#back_to_catalog").hide();

                $(this).addClass('activeFilter ');
        //     },
        //
        // })
    })
    
})
