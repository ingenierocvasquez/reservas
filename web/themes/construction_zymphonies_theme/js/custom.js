/** 
	* Filename:     custom.js
	* Version:      1.0.0 (2019-09-20)
					1.0.2 (2024-01-09)
	* Website:      https://www.zymphonies.com
	* Description:  Global script
	* Author:		Development team
					info@zymphonies.com
**/

function themeMenu(){

	// Main menu
	jQuery('#main-menu').smartmenus();
	
	// Mobile menu toggle
	jQuery('.navbar-toggle').click(function(){
		jQuery('.region-primary-menu').addClass('expand');
	});
	jQuery('.navbar-toggle-close').click(function(){
		jQuery('.region-primary-menu').removeClass('expand');
	});

	// Mobile dropdown menu
	if ( jQuery(window).width() < 767) {
		jQuery(".region-primary-menu li a:not(.has-submenu)").click(function () {
			jQuery('.region-primary-menu').hide();
	    });
	}

}

function themeHome(){
	jQuery('.flexslider').flexslider({
    	animation: "slide"	
    });
}

function resaltarFila() {
    // Selecciona la tabla específica por su ID, clase, u otro selector adecuado.
    jQuery('table.cols-9').each(function () {
      // Itera sobre cada fila de la tabla
      jQuery(this).find('tbody tr').each(function () {
        // Encuentra la celda específica que contiene el valor "si" o "no".
        var jQuerycell = jQuery(this).find('td').eq(7); // Cambia el índice 1 por el índice correcto de la columna.
        var cellValue = jQuerycell.text().trim().toUpperCase();
        
        // Aplica el color de fondo a toda la fila según el valor de la celda
        if (cellValue === 'SI') {
          jQuery(this).css('background-color', '#80ffcb');
        } else if (cellValue === 'NO') {
          jQuery(this).css('background-color', '#ffa6a6');
        }
      });
    });
}


jQuery(document).ready(function($){
	themeMenu();
	themeHome();
	resaltarFila();
});

