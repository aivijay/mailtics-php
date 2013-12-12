//
// preview campaign content
//

$(document).ready(function() {
  var $loading = $('<img src="images/loading.gif" alt="loading">');

  $('.campaign_preview').each(function() {
    var $dialog = $('<div id="view"></div>')
      .append($loading.clone());
    var $link = $(this).one('click', function() {

      //$.get($link.attr('href'), function(data) {
      //  $('#view').html(data);
      //});
      $dialog
        .load($link.attr('href'))
        .dialog({
          title: $link.attr('title'),
          width: 1000,
          height: 500
        });

      $link.click(function() {
        $dialog.dialog('open');

        return false;
      });

      return false;
    });
  });
});
