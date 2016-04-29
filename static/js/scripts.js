$(document).ready(function(){			
	$('#toggle-menu').click(function() {
    $(this).toggleClass('open');
    $('#main-nav').toggleClass('open');
    //$('body').toggleClass('menu-open');    
  });
  
  $('#main-content h2').each( function (index) {
    var toc = $(this).text();
    var tocId = toc.replace(/\s+/g, '');
    console.log(tocId, toc, window.location);
    
    $(this).attr("id", tocId);

    $('#current-page ul').append('<li><a href="' + window.location.origin + window.location.pathname + '#' + tocId + '">' + toc + '</a></li>');
  });
});