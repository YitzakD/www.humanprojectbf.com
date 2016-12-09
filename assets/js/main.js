/**
 * Created by Yitzak DEKPEMOU on 16/03/2016.
 */

$(document).ready(function(){

    // MAIN

    /* About scrollers -> qui affiche les scrollers adaptés */
    $("body").niceScroll({styler:"fb", cursorcolor:"#B6B6B4", cursorborder:"#B6B6B4", zindex:"300", cursorborderradius:"3px"});

    /* About Flash Notifs -> Pour la fermeture de pop-ups des alertes */
    $(".dot-close").click(function() {

        $(this).parent().fadeOut(700);

        return false;

    });

    /*  Slide  */
    var slideIndex = 1;
    var myIndex = 0;

    showDivs(slideIndex);
    carousel();

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("slide");

        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}

        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }

        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" sl-hp", "");
        }

        x[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " sl-hp";
    }

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("slide");

        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
            dots[i].className = dots[i].className.replace(" sl-hp", "");
        }

        myIndex++;

        if (myIndex > x.length) {myIndex = 1}

        x[myIndex-1].style.display = "block";

        dots[myIndex-1].className += " sl-hp";

        setTimeout(carousel, 7000);
    }


    /* About Elastic Area -> A propos des textareas qui ont l'ID 'elasticarea' */
    $('#elasticarea').elastic().css("height","160px");
    jQuery('#elasticarea').trigger('update');
    // END MAIN

    // ABOUT US - PAGE

    /* Gère le smooth scrolling au niveau des différents liens */
    $(function() {

        $('a[href*="#"]:not([href="#"])').click(function() {

            if(location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

                var target = $(this.hash);

                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

                if(target.length) {

                    $('html, body').animate({

                        scrollTop: target.offset().top

                    }, 700);

                    return false;

                }

            }

        });

    });
    // END ABOUT US - PAGE

    /* About BBcode -> A propos de texarea qui sert à faire du BBcode */
    /*$('#bbcodearea').markItUp(mySettings);*/

});
