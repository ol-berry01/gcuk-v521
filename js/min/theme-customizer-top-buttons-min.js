jQuery(document).ready(function($) {
	var $destination = $("#customize-info .accordion-section-title");
	$destination.prepend('<a style="width: 80%; margin: 10px auto; display: block; text-align: center;" href="https://quemalabs.ticksy.com/articles/100000460/" class="button" target="_blank">{documentation}</a>'.replace( '{documentation}', topbtns.documentation ) );
 	$destination.prepend('<a style="width: 80%; margin: 10px auto; display: block; text-align: center;" href="http://www.quemalabs.com/theme/v5gcuk-pro/?utm_source=v5gcuk%20Theme&utm_medium=Pro%20Button&utm_campaign=v5gcuk%20Pro" class="button" target="_blank">{pro}</a>'.replace( '{pro}', topbtns.pro ) );
});

