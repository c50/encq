(function ($) {
  Drupal.behaviors.exampleModule = {
    attach: function(context, settings) {$.backstretch("http://encq.be/sites/all/themes/encq/images/fond-encq-1632.jpg", {speed: 100});
	$(document).ready(function(){

	//Set default open/close settings
	$('.acc_container').hide(); //Hide/close all containers
	$('.acc_trigger:first').addClass('active').next().show(); //Add "active" class to first trigger, then show/open the immediate next container

	//On Click
	$('.acc_trigger').click(function(){
		if( $(this).next().is(':hidden') ) { //If immediate next container is closed...
			$('.acc_trigger').removeClass('active').next().slideUp(); //Remove all .accordeon h2 classes and slide up the immediate next container
			$(this).toggleClass('active').next().slideDown(); //Add .acc_trigger class to clicked trigger and slide down the immediate next container
		}
		return false; //Prevent the browser jump to the link anchor
	});

	});
	
	}
  }
})(jQuery);

/**
 * @file
 * A JavaScript file for the theme.
 */
 
(function ($, Drupal, window, document, undefined) {
Drupal.behaviors.mainMenuToggle = {
    attach: function(context, settings) {           
                     //Toggle menu for mobile devices
  $('.region-menu .navigation').before('<a href="#" class="menu-toggle" title="Toggle Menu"><span class="line"></span><span class="line"></span><span class="line"></span></a>');
       
      $('.region-menu .menu-toggle').click(function(){
        $('#menu-navigation').slideToggle();
      });
      var menuid = "#region-menu";                       
             //Simple hide/show event for the dropdown menus
             $(menuid+' li').hover(
                 function(){
                 $('ul:first', $(this)).show();
                 },
                 function(){
                 $('ul', $(this)).slideUp();
                 }
              );      
    }
     
     
  };
 
})(jQuery, Drupal, this, this.document);
