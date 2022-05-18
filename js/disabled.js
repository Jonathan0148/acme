// Función para la vista option
$(document).ready(function(){
    $('#paass').hide();
    $('#img').hide();

    $("#click2").click(function(){
        $('#paass').hide();
        $('#img').show();
        $('#click2').attr('disabled', true);
        $('#click').attr('disabled', false);
        $('#img').css('margin-top', '-150px');


    });
    $("#click").click(function(){
        $('#img').hide();
        $('#paass').show();

        $('#click2').attr('disabled', false);

        $('#click').attr('disabled', true);

        $('#paass').css('margin-top', '70px');
        $('#paass').css('margin-bottom', '100px');  
    });
});