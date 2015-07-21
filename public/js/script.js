$(document).ready(function(){

    /*
    CLIENTES
     */
   $('#clientes_one').on('click',function()
   {
       $('.clientes_content1').removeClass('border-p');
       $('.clientes_content2').addClass('border-p');
       $(this).addClass('border-p');
       $('#clientes_two').removeClass('border-p');
   });

    $('#clientes_two').on('click',function()
    {
        $('.clientes_content2').removeClass('border-p');
        $('.clientes_content1').addClass('border-p');
        $(this).addClass('border-p');
        $('#clientes_one').removeClass('border-p');
    })
    /*
    PORTAFOLIO
     */

    $(".portafolio_one").click(function () {
        $(".portafolio_two").removeClass("border-p");
        $(".portafolio_three").removeClass("border-p");
        $(this).addClass("border-p");
        $(".section_portafolio").addClass("hidden");
        $(".section_portafolio").eq(0).removeClass("hidden");
    });
    $(".portafolio_two").click(function () {
        $(".portafolio_one").removeClass("border-p");
        $(".portafolio_three").removeClass("border-p");
        $(this).addClass("border-p");
        $(".section_portafolio").addClass("hidden");
        $(".section_portafolio").eq(1).removeClass("hidden");
    });
    $(".portafolio_three").click(function () {
        $(".portafolio_two").removeClass("border-p");
        $(".portafolio_one").removeClass("border-p");
        $(this).addClass("border-p");
        $(".section_portafolio").addClass("hidden");
        $(".section_portafolio").eq(2).removeClass("hidden");
    });
});