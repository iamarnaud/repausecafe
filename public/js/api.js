$(document).ready(function($) {
let $resultatDiv = $('#resultatApi');
let $btnAmis = $('#btnAmis');
let url = 'https://randomuser.me/api/?results=5';
let tabResult = null;


function traitement(url) {
    $.ajax(url).done(function (data) {
        tabResult = data.results;
        tabResult.forEach(function(element){
            let str = '<div><img src="'+element.picture.large+'"><p class="'+element.gender+'">'+element.name.first+'</p></div>'
            $resultatDiv.append(str)
        })

    });
};

$btnAmis.on('click',function() {
    $resultatDiv.children().remove();
    traitement(url);
});

traitement(url);
});