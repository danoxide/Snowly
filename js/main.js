$(document).ready(function(){
  var searchWindow = $('#search');
  $('a[data-target=#search]').click(function(event){
    event.preventDefault();
    searchWindow.css('display', 'table');
  });

  $('button.close').click(function(){
    $('#search').css('display', 'none');
  });
});