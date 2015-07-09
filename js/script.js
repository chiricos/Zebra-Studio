$(document).ready(function(){
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
});