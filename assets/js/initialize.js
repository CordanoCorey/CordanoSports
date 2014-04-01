// Flyouts Initialize
	$('#profile-block').click(function(event) {
		event.stopPropagation();
		$('#profile-settings').slideToggle('fast', function() {
		// Animation complete.
		});
		$('#my-leagues-flyout,#my-teams-flyout,#my-players-flyout,#my-inventory-flyout').hide();
	 });
	$('#my-leagues').click(function(event) {
		event.stopPropagation();
		$('#my-leagues-flyout').slideToggle('fast', function() {
		// Animation complete.
		});
		$('#profile-settings,#my-teams-flyout,#my-players-flyout,#my-inventory-flyout').hide();
	 });
	$('#my-teams').click(function(event) {
		event.stopPropagation();
		$('#my-teams-flyout').slideToggle('fast', function() {
		// Animation complete.
		});
		$('#profile-settings,#my-leagues-flyout,#my-players-flyout,#my-inventory-flyout').hide();
	 });
	$('#my-players').click(function(event) {
		event.stopPropagation();
		$('#my-players-flyout').slideToggle('fast', function() {
		// Animation complete.
		});
		$('#profile-settings,#my-leagues-flyout,#my-teams-flyout,#my-inventory-flyout').hide();
	 });
	$('#my-inventory').click(function(event) {
		event.stopPropagation();
		$('#my-inventory-flyout').slideToggle('fast', function() {
		// Animation complete.
		});
		$('#profile-settings,#my-leagues-flyout,#my-teams-flyout,#my-players-flyout').hide();
	 });
         $('.fanbot-block').change(function(e){
             
         });
	 
// Ticker Initialize
	//$(function(){
		//$("ul#ticker").liScroll();
	//}); 
