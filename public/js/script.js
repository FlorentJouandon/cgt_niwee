$(document).ready(function(){

    // Détection formation écran, mis en cookie.
    if(screen.width <= 920){
        var media = "mobile";
    
    }else{
        var media = "desktop";
    }
    var cookie = document.cookie = 'media='+media+'; path=/';
    // console.log(cookie);
    // var cookies = document.cookie.indexOf('num'+'=');
    // console.log(cookies);

    // ADMIN  
    $('#create').click(function(){
        $('.select').hide("slide");
        $('.create').show("slide");
        $('.update').hide("slide");
    });
    
    $('#update').click(function(){
        $('.select').hide("slide");
        $('.create').hide("slide");
        $('.update').show("slide");
    });
    
    $('#select').click(function(){
        $('.select').show("slide");
        $('.create').hide("slide");
        $('.update').hide("slide");
    });

    // SCROLL horizontal
    var menu ={
        Accueil:{url:'Accueil', num:0},
        Publications:{url:'Nos_Publications', num:1},
        Nos_Droits:{url:'Nos_Droits', num:2},
        Collectif:{url:'Notre_Collectif', num:3},
        Formations:{url:'Nos_Formations', num:4},
        Contact:{url:'Contactez_Nous', num: 5},
        Se_Syndiquer:{url:'Se_Syndiquer', num:6}
    };

    // Récupération du dernier éléments de l'url
    var url = document.location.href.replace(/\/$/,"");
    var pathURL = url.substring(url.lastIndexOf("/")+1);


    if(pathURL === 'Accueil')
    $('.sRight').on("touchmove",function(){
        window.location.replace('Nos_Publications');
    });
    if(pathURL === 'Nos_Publications')
    $('.sRight').on("touchmove",function(){
        window.location.replace('Nos_Droits');
    });
    if(pathURL === 'Nos_Droits')
    $('.sRight').on("touchmove",function(){
        window.location.replace('Notre_Collectif');
    });
    if(pathURL === 'Notre_Collectif')
    $('.sRight').on("touchmove",function(){
        window.location.replace('Nos_Formations');
    });
    if(pathURL === 'Nos_Formations')
    $('.sRight').on("touchmove",function(){
        window.location.replace('Contactez_Nous');
    });
    if(pathURL === 'Contactez_Nous')
    $('.sRight').on("touchmove",function(){
        window.location.replace('Se_Syndiquer');
    });
    


      if(pathURL === 'Se_Syndiquer')
    $('.sLeft').on("touchmove",function(){
        window.location.replace('Contactez_Nous');
    });
    if(pathURL === 'Contactez_Nous')
    $('.sLeft').on("touchmove",function(){
        window.location.replace('Nos_Formations');
    });
    if(pathURL === 'Nos_Formations')
    $('.sLeft').on("touchmove",function(){
        window.location.replace('Notre_Collectif');
    });
    if(pathURL === 'Notre_Collectif')
    $('.sLeft').on("touchmove",function(){
        window.location.replace('Nos_Droits');
    });
    if(pathURL === 'Nos_Droits')
    $('.sLeft').on("touchmove",function(){
        window.location.replace('Nos_Publications');
    });
    if(pathURL === 'Nos_Publications')
    $('.sLeft').on("touchmove",function(){
        window.location.replace('Accueil');
    });  
    
});
