$(document).ready(function(){

    //Scroll de elemetnos del menu
    var about  = $('#about_area').offset().top,
        services = $('#services_area').offset().top,
        projects = $('#projects_area').offset().top,
        subscribe = $('#subscribe_area').offset().top;

    //About button
    $('#btn-about').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: about - 40
        });
    });

    //Services button
    $('#btn-services').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: services - 40
        });
    });

    //Proyects button
    $('#btn-proyects').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: projects - 40
        });
    });

    //Subscribe button
    $('#btn-subscribe').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: subscribe - 40
        });
    });

    
});