$(document).ready(function(){

    $('#select').click(function(){
        $('.select').show("slide");
        $('.create').hide("slide");
    });

    $('#create').click(function(){
        $('.create').show("slide");
        $('.select').hide("slide");
    });

    
});
