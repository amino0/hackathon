$('#clock').countdown('2022/02/07', function (event) {
  $(this).html(event.strftime('%D days %H:%M:%S'));
});