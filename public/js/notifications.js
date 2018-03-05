$(document).ready(function () {
  ///////////////////////////// NOTIFICATION AMARANJS///////////////////////////////////////////////////////////
//AJOUT DE NOTIFICATION
// notification amaran un message s'affiche on click sur la la page
//car pour le moment pas d'action utilisateur à lier...
//on crée une fonction random pour que le message s'affiche n'importe où sur  mla page
  var random = function (items) {
    return items[Math.floor(Math.random() * items.length)];
  };
  var inEffects = ['slideRight', 'slideLeft', 'slideBottom', 'slideTop'];
  var positions = ['top left', 'top right', 'bottom right', 'bottom left'];
  // var aValue = storage.getItem(keyName);
//comme on veut que ça s'affiche au chargement de la page soit au document ready on met directement la fonction $.amaran dans le document ready
  var NameNotif=sessionStorage.getItem('user'); //on crée un varibla qui récupères les données stockées dans le sessionStorage

$.amaran({
    'theme': 'user black',
    'content': {
      img: 'images/velo-montagne.jpg',
      user: NameNotif,
      message: 'Ravi de vous revoir!'
    },
    'position': random(positions),
    'inEffect': random(inEffects)
  });

///////////////////////////// NOTIFICATION AMARANJS///////////////////////////////////////////////////////////
});