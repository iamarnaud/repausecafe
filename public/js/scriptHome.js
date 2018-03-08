$(document).ready(function () {

  $('.form-comment').submit(function (e) {

    e.preventDefault()

    let data = $(this).serialize()
    let url = $(this).attr('action')
    let method = 'POST'

    let str = sendComment(url, data, method)

    //$(str).appendTo('.comment'); Rechercher enfant

    let modal = '#' + $(this).data('post')
    $(modal).modal('hide')
  })

})

function sendComment (url, data, method) {
  $.ajax({
    method: method,
    url: url,
    data: data,
    headers: {
      'No-Redirect': '1'
    }
  }).done(function (msg) {

    let commentaire = msg.commentaire
    let prenom = msg.user.prenom
    let created_at = msg.created_at.date

    let str = '<div><p>' + commentaire + '</p><p>Par ' + prenom + ' le ' + created_at + '</p></div>'

    console.log(str)
    return str
  })

}
