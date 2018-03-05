//http://www.formvalidator.net/
//http://dimsemenov.com/plugins/magnific-popup/
function addition(a, b) {
    return a +b;
}


function jeLike () {
    ////////////////////FUNCTION LIKABLE///////////////////////////////
    /**INFO
     *
     * Modifier par Eric le 20/01
     */
    var $iconEye = $('.likable');                                      // Recuparération des icons eye de la page.
    var $pageID  = $('div[data-value-pageID]').data("valuePageid");   //Récupération de l'ID de la page courante.


    $iconEye.each(function(idx) {                     // On applique la méthode each(function(callback))
        var storage = "like_" + idx + $pageID;          // Déclaration d'une variable storage ex: Like_0Hydhzydf
        var  like = sessionStorage.getItem(storage);    // Declaration de la variable like avec récupération des données dans sessionStorage
        var compteur = like;                            // Declaration de la variable compteur , on lui assigne la valeur de like.
        var str =  "";                                  // Declaration d'une chaine de caractère vide

        if (like == null){                              //Si nombre de like est null
            str = "<span>0</span>";                       //
            $(this).append(str);                          //Ajoute l'element <span> et son contenu au DOM
        }

        if (like != null ) {                             // Si Nombre de like non null
            compteur =  sessionStorage.getItem(storage) ;  //compteur prends la valeur de storage dans LocalStorage
            str = "<span>" + compteur + "</span>";         //
            $(this).append(str);                           //Ajoute l'element <span> et son contenu au DOM
        }

        $(this).on('click', function () {                //Au clique sur l'element
            $(this).children().remove();                   //  On supprime le <span>
            compteur++;                                    // on incrémente de 1 le compteur
            sessionStorage.setItem(storage, compteur);     // on met à jour la valeur de storage dans le LocalStorage
            str = "<span>" + compteur + "</span>";
            $(this).append(str);                           //Ajoute l'element <span> et son contenu au DOM
        });
    });
////////////////////FUNCTION LIKABLE solution alternative by cess 20 01 18///////////////////////////////
// let $iconEye = $('.likable'); // On selectionne tous les elements de la page resultats

// $iconEye.each(function (idx, element) {


//     let like = localStorage.getItem("like_" + idx);

    
        
//     let like = sessionStorage.getItem("like_" + idx);
   
//     let compteur = like;
//     let storage = "like_" + idx; //on initialise le compteur de chaque elements
//     $(this).on('click', function () { //Sur chaque elements on ecoute le click
//         $(this).children().remove();

//         compteur++; // on incrémente le compteur
//         sessionStorage[storage] = compteur;
//         str = "<span>" + compteur + "</span>";
//         $(this).append(str); // On ajoute notre String "str"
//     });
//     //pour afficher chaque compteur au changement de page.
//     //compteru==null pour afficher 0 si compteur est null sinon on affiche le compteur
//     if(compteur==null){
//         $(this).append('<span>0</span>');
//     }
//     else{
//   $(this).append('<span>'+compteur+'</span>');}

// });


// let $iconEyeVisit = $('.likableVisiteur'); // On selectionne tous les elements de la page profil visiteur

// $iconEyeVisit.each(function (idx, element) {


//     let like = localStorage.getItem("likeVisit_" + idx);

    
    
//     let like = sessionStorage.getItem("likeVisit_" + idx);
    
//     let compteur = like;
//     let storage = "likeVisit_" + idx; //on initialise le compteur de chaque elements
//     $(this).on('click', function () { //Sur chaque elements on ecoute le click
//         $(this).children().remove();

//         compteur++; // on incrémente le compteur
//         sessionStorage[storage] = compteur;
//         str = "<span>" + compteur + "</span>";
//         $(this).append(str); // On ajoute notre String "str"
//     });
//     if(compteur==null){
//         $(this).append('<span>0</span>');
//     }
//     else{
//   $(this).append('<span>'+compteur+'</span>');}

// });

// let $iconEyePrinc = $('.likablePrinc'); // On selectionne tous les elements de la page principale

// $iconEyePrinc.each(function (idx, element) {



//     let like = localStorage.getItem("likePrinc_" + idx);
   
  
    
//     let like = sessionStorage.getItem("likePrinc_" + idx);
//     let compteur = like;
//     let storage = "likePrinc_" + idx; //on initialise le compteur de chaque elements

//     $(this).on('click', function () { //Sur chaque elements on ecoute le click
//         $(this).children().remove();

//         compteur++; // on incrémente le compteur
//         sessionStorage[storage] = compteur;
//         str = "<span>" + compteur + "</span>";
//         $(this).append(str); // On ajoute notre String "str"
//     });
//     if(compteur==null){
//         $(this).append('<span>0</span>');
//     }
//     else{
//   $(this).append('<span>'+compteur+'</span>');}
//   });


// let $iconEyeMonPro = $('.likableMonPro'); // On selectionne tous les elements de la page principale

// $iconEyeMonPro.each(function (idx, element) {



//     let like = localStorage.getItem("likeVisit_" + idx);
   
  
    
//     let like = sessionStorage.getItem("likeVisit_" + idx);
//     let compteur = like;
//     let storage = "likeVisit_" + idx; //on initialise le compteur de chaque elements

//     if(compteur==null){
//         $(this).append('<span>0</span>');
//     }
//     else{
//   $(this).append('<span>'+compteur+'</span>');}
// });

//////////////////////////////////////////////////////////////////fin alternative

////////////////////////////////
}
//////////////////////////////////
jeLike();
$(function () {
    $.validate({
        form: '#font-inscription,#form-recherche,#font-index,#formparametre,#form-message,#form_interests,#form-profil,#form-recherche2',
        modules: 'security,file',
        lang: 'fr',
        validateOnBlur: true, // desactive la validation apres sortie du focus
        validateOnEvent: true, //autorise les evenements (eexemple keyup)
    });

    $('#description').restrictLength($('#max-length-element'));
    $('#commentaire').restrictLength($('#max-length-element2')); //on limite le nombre de caractères avec un compteur

    /////////////////////////////////////////////////////MAGIC POPUP//////////////////////////////////////////////////

    let $imageSite = $('.photosPlug  img');
    let $hashtag = null;
    $imageSite.each(function (idx) {
        $(this).wrap(`<a class="img-pop" href="${$(this).attr('src')}" title="${$(`.hashtag:nth(${idx})`).text()}"></a>`);
    });

    $('.img-pop').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: true,
        fixedContentPos: true,
        zoom: {
            enabled: true,
            duration: 500
        }
    });
    /////////////////////////////////////////////////////MAGIC POPUP//////////////////////////////////////////////////


    ///////////////////////////// JCROP ///////////////////////////////////////////////////////////

    function showCoords(c) {
        // variables can be accessed here as
        // c.x, c.y, c.x2, c.y2, c.w, c.h
    }

    $(function () {
        $('#target').Jcrop({
            onSelect: showCoords,
            bgColor: 'black',
            bgOpacity: .4,
            setSelect: [200, 200, 100, 100],
            aspectRatio: 3 / 2
        });
    });

    ///////////////////////////// JCROP ///////////////////////////////////////////////////////////

    ///////////////////////////// ICHECK PAGE PARAMETRE ///////////////////////////////////////////////////////////
    $('input').iCheck({
        checkboxClass: 'icheckbox_flat-grey',
        radioClass: 'iradio_flat'
    });
    ///////////////////////////// ICHECK PAGE PARAMETRE ///////////////////////////////////////////////////////////

});
// FIN DOCUMENT READY