$(document).ready(function () {

  $('.form-comment').submit(function (e) {

    e.preventDefault()

    let data = $(this).serialize()
    let url = $(this).attr('action')
    let method = 'POST'
    let comSelect = '#comment' + $(this).data('post')
    let modal = '#commmentBox' + $(this).data('post')

    sendComment(url, data, method, comSelect)

    $(modal).modal('hide')
  });

  function sendComment (url, data, method, comSelect) {
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

      $(comSelect).append(str)

    })
  }

  $('#btn-share').on('click', function () {

    if ($('#form-share').css('display') == 'none') {

      $('#form-share').slideDown('slow')

    } else {

      $('#form-share').slideUp('slow')

    }

  })

});


