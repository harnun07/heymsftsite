jQuery(document).ready(function($) {
    "use strict";
(function($) {
	$("#primary-menu li a").attr("href", "javascript:void(0);");
	
	$(".dot-nav li:first-child").addClass("is-active");
	
	$('#primary-menu li a').on('click', function () {
		$('.dot-nav li:last-child')[0].click();
	});
	
	$( "#page-189 .elementor-element-eb583eb .elementor-image" ).prepend( $( "body canvas:last-child" ) );
	$( "#page-189 .elementor-element-eb583eb .elementor-image" ).prepend( $( ".slide-item" ) );
	
	// $( "#page-11" ).append( $( "#prefirst-page-orange-ball" ) );
	$( "#page-11" ).append( $( "#first-page-orange-ball" ) );
	$( "#page-14" ).append( $( "#second-page-orange-ball" ) );
	$( "#page-104" ).append( $( "#third-page-orange-ball" ) );
	$( "#page-415" ).append( $( "#fourth-page-orange-ball" ) );
	$( "#page-163" ).append( $( "#fifth-page-orange-ball" ) );
	$( "#page-189" ).append( $( "#sixth-page-orange-ball" ) );
	$( "#page-217" ).append( $( "#seventh-page-orange-ball" ) );
	$( "#page-327" ).append( $( "#eighth-page-orange-ball" ) );
})(jQuery);
});