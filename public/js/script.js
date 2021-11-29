$(document).ready(function(){

    $('#select').click(function(){
        $('.select').show("slide");
        $('.create').hide("slide");
    });

    $('#create').click(function(){
        $('.create').show("slide");
        $('.select').hide("slide");
    });

    // $('#update').click(function(){

    // })

    // $('#delete').click(function(){
    //     if(confirm("Êtes vous sûr de vouloir supprimer cette article")){
            
    //     }
    // })
});
