$(document).ready(function () {
  $('form').on('submit', function (e) {
    e.preventDefault()
    let lang = (navigator.language || navigator.userLanguage).split('-')[0]
    let formData = $(this).serializeArray()

    formData.push({ name: 'lang', value: lang })

    $.ajax({
      url: this.action,
      type: this.method,
      data: $.param(formData)
    }).done(function (serverData) {
      $('#day').html(serverData)
    }).fail(function (_jqXHR, _textStatus, errorThrown) {
      console.log('fail' + errorThrown)
    })
  })
})
