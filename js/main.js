$(document).ready(function(){
  $('a[data-target="#search"]').click(function(event){
    event.preventDefault();
    $('#search').css('display', 'table').animate({ 'opacity' : 1 });
  });

  $('button.close').click(function(){
  	event.preventDefault();
    $('#search').animate({ 'opacity' : 0 }, {
    	done : function(){
    		$(this).css('display', 'none');
    	}
    });
  });
});