$(document).ready(function(){
    // Affichage des blocs 
    $('#emailBtn').click(function(){
        $('.inscription-email').css('display', 'none');
        $('.inscription-date').css('display', 'flex');
    })
    $('#dateBtn').click(function(){
        $('.inscription-date').css('display', 'none');
        $('.inscription-password').css('display', 'flex');
    })

    // Animations sur les inputs
    $("#inscription_form_email, #login_form_email").keyup(function(){
        if(validateEmail()){
            $("#inscription_form_email, #login_form_email").css("box-shadow", "0 0 0px 3px rgba(9, 178, 24, 1");
            $("#emailMsg").html("<p class='text-danger'></p>");
            $('#emailBtn').addClass("opacity-100");
            $('#emailBtn').removeClass("opacity-25");
            $('#emailBtn').removeClass("disabled");
        }else{
            $("#inscription_form_email, #login_form_email").css("box-shadow", "0 0 0px 3px rgba(255, 54, 54, 0.7");
            $("#emailMsg").html("E-mail invalide");
            $('#emailBtn').addClass("opacity-25");
            $('#emailBtn').removeClass("opacity-100");
            $('#emailBtn').addClass("disabled");
        }
    })

    $("#inscription_form_plainPassword").keyup(function(){
        if(validatePassword()){
            $("#inscription_form_plainPassword").css("box-shadow", "0 0 0px 3px rgba(9, 178, 24, 1");
            $("#passwordMsg").html("<p class='text-danger'></p>");
            $('#passwordBtn').addClass("opacity-100");
            $('#passwordBtn').removeClass("opacity-25");
            $('#passwordBtn').removeClass("disabled");
        }else{
            $("#inscription_form_plainPassword").css("box-shadow", "0 0 0px 3px rgba(255, 54, 54, 0.7");
            $("#passwordMsg").html("Le mot de passe doit faire au moins 6 caractères.");
            $('#passwordBtn').addClass("opacity-25");
            $('#passwordBtn').removeClass("opacity-100");
            $('#passwordBtn').addClass("disabled");
        }
    })

    // Verifications sur les emails
    function validateEmail(){
        var email=$("#inscription_form_email").val();
        var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
        if(reg.test(email)){
            return true;
        }else{
            return false;
        }
    }
    // Verification sur les mots de passe
    function validatePassword(){
		var pass=$("#inscription_form_plainPassword").val();
		if(pass.length > 5){
			return true;
		}else{
			return false;
		}
    }

    // Changement de couleurs des barres de réputation
    


    // if($(".progress-bar").width() < 100 && $(".progress-bar").width() >= 75 ){
    //     $(".progress-bar").css('background-color', '#8dd100');
    // }

    // if($(".progress-bar").width() < 75 && $(".progress-bar").width() >= 50 ){
    //     $(".progress-bar").css('background-color', '#FECE00');
    // }

    // if($(".progress-bar").width() < 50 && $(".progress-bar").width() >= 25 ){
    //     $(".progress-bar").css('background-color', '#FE9900');
    // }

    // if($(".progress-bar").width() < 25 ){
    //     $(".progress-bar").css('background-color', '#FF3200');
    // }

    // Affiche le menu au chargement de la page 
    $('#offcanvasScrolling').addClass('show');

    // Affichage de la date pendant 2 sec (mode mobile)
    $('#navTopDate').click(function(){
        $('#dateClick').show().delay(2000).fadeOut();
    })

    // Animations sous les onglets de la page Recherche
    $('.table-display:first').show();
    $('.onglets-recherche li:first').addClass('border-bottom border-danger rounded-0');

    $('.onglets-recherche li').click(function(event){
        index = $(this).index();
        $('.onglets-recherche li').removeClass('border-bottom');
        $(this).addClass('border-bottom border-danger rounded-0');
        $('.table-display').hide();
        $('.table-display').eq(index).show();
    })

    // RESPONSIVE
        // N'affiche pas le menu au chargement de la page 
        if (window.matchMedia("(max-width: 1200px)").matches) {
            $('#offcanvasScrolling').removeClass('show');
        }

        if (window.matchMedia("(max-width: 1200px)").matches) {
            $('.test').removeClass('w-50');
            $('.test').addClass('w-100 p-3');
            $('.res-navsearch').removeClass('w-50');
        }

        if (window.matchMedia("(max-width: 576px)").matches) {
            $('#liDropup').addClass('dropup');
        }
})