$(document).ready(function(){

    /*
    CLIENTES
     */
   $('#clientes_one').on('click',function()
   {
       $('.clientes_content1').removeClass('hidden');
       $('.clientes_content2').addClass('hidden');
       $(this).addClass('border-p');
       $('#clientes_two').removeClass('border-p');
   });

    $('#clientes_two').on('click',function()
    {
        $('.clientes_content2').removeClass('hidden');
        $('.clientes_content1').addClass('hidden');
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

    /*
    POP UP DEL PORTAFOLIO
     */

    $(".close_pop_up").on('click',function()
    {
       $(".portafolio_pop_up").addClass("hidden");
    });

    $(".portafolio_pop_up_numeros p").eq(0).on('click',function()
    {
        $(".screen").addClass("hidden");
        $(".screen1").removeClass("hidden");
    });

    $(".portafolio_pop_up_numeros p").eq(1).on('click',function()
    {
        $(".screen").addClass("hidden");
        $(".screen2").removeClass("hidden");
    });
    $(".portafolio_pop_up_numeros p").eq(2).on('click',function()
    {
        $(".screen").addClass("hidden");
        $(".screen3").removeClass("hidden");
    });
    $(".portafolio_pop_up_numeros p").eq(3).on('click',function()
    {
        $(".screen").addClass("hidden");
        $(".screen4").removeClass("hidden");
    });
    $(".portafolio_pop_up_numeros p").eq(4).on('click',function()
    {
        $(".screen").addClass("hidden");
        $(".screen5").removeClass("hidden");
    });
});