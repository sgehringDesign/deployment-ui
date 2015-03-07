
/* --------------- */

$(function() { 
		   
		// SELECT ITEMS IN FILE BROWSER
    $(".ul-file-browser .span-file-name").click(function(e) {
    	e.preventDefault();
    	
    	$(this).parent().toggleClass('selected');
    });
    
    
		// OPEN ITEMS IN FILE BROWSER
    $(".ul-file-browser .span-caret-wrapper").click(function(e) {
    	e.preventDefault();
    	
    	// TOGGLE CARET UP OR RIGHT
    	if($(this).children(":first").hasClass('right')) {
	    	$(this).children(":first").toggleClass('right', false);
	    	$(this).children(":first").toggleClass('down', true);
    	} else {
	    	$(this).children(":first").toggleClass('down', false); 
	    	$(this).children(":first").toggleClass('right', true);
	    }
	    
    	// TOGGLE FILE LIST OPEN OR CLOSED
    	$(this).parent().parent().toggleClass('open');
    	
    });
    
    
		// SELECT ALL CHILDREN
    $(".ul-file-browser .span-select-children").click(function(e) {
    	e.preventDefault();
    	
    	if($(this).parent().hasClass('selected') ) {
	    	$(this).parent().parent().find("a").removeClass('selected');
    	} else {
	    	$(this).parent().parent().find("a").addClass('selected');
    	}
    	
    });
    
    
    $('#btn-move-selected').click(function(e) {
    	e.preventDefault();
    	$("#selected-files ul").empty();
    	$("#selected-files ul").append( $('.ul-file-browser .selected').parent().clone() );
			
			$("#selected-files").find("span.span-caret-wrapper").remove();
    });
    
});