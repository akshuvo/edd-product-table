
jQuery(function($){
	$(document).ready(function(){

		// Tab controlling
	    $('.am-tab-nav a').on('click',function(e){
	    	e.preventDefault();
	    	var targetDiv = $(this).attr('href');

    		if(!$(this).parent().hasClass('active')){
                $(this).parent().addClass('active').siblings().removeClass('active');
            }
            $('.am-tab-container').find(targetDiv).addClass('active').siblings().removeClass('active');

            //location.hash = targetDiv;
            history.pushState({}, '', targetDiv);
            
    	});

	    // Active tab from location
    	var hash = window.location.hash;
    	$('.am-tab-nav a[href="'+hash+'"]').click();
        
$(window).on('hashchange', function(){
    var a = /^#?chapter(\d+)-section(\d+)\/?$/i.exec(location.hash);
});
        
        //jQuery('div[title="'+mapID+'"]').trigger('click');
       

	});



    //load    
    $(window).load(function() {
        
       
        

    });

});