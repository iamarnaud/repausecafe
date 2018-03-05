$(document).ready(function() {

    let $latitude;
    let $longitude;

    if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(function(position) {
            do_something(position.coords.latitude, position.coords.longitude);
        });
    } else {
        alert("Le service de géolocalisation n'est pas disponible sur votre ordinateur.");
    }

    function do_something(latitude,longitude) {
        $latitude = latitude;
        $longitude = longitude;
    }


    $('#font-inscription').on('submit', mafonction);
    $('#font-index').on('submit', mafonction);

        function mafonction() {
            sessionStorage.clear();
            if($(this).attr("id") === "font-inscription"){
                let $user = $('#utilisateur').val();
                let $fullname = $('#nomComplet').val();
                let $pays = $('#pays').val();
                let $email = $('#user-email').val();
                let $pass  = $('#pass_confirmation').val();

                sessionStorage.setItem('user', $user);
                sessionStorage.setItem('nomComplet', $fullname);
                sessionStorage.setItem('pays', $pays);
                sessionStorage.setItem('email', $email);
                sessionStorage.setItem('pass', $pass);

            }else {
                let $user = $('#utilisateur').val();
                let $pass  = $('#pass_confirmation').val();
                sessionStorage.setItem('user', $user);
                sessionStorage.setItem('pass', $pass);
            }


            sessionStorage.setItem('latitude', $latitude);
            sessionStorage.setItem('longitude', $longitude);

        }


});