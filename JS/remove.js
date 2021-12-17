$j = jQuery.noConflict();
$j(function() {
	$j("mwe-popups-settings-page").on("click", function() {
	if ( $j("#mwe-popups-settings-page").prop('checked') === true ) {
	}
	else{
		Sj(".menu-element").remove();

		}
	});