$(document).ready(function() {

	/* ========================================== 
	Navigation open/close functions
	========================================== */
	$('.navbar-toggler').on('click', function(e) {
		e.preventDefault();
		e.stopPropagation();
		$('body').toggleClass('nav-open');
	});
	$(document).keydown(function(e) {
		if (e.keyCode == 27) {
			$('body').removeClass('nav-open');
		}
	});
	$(document).mouseup(function(e) {
		var container = $(".navbar");
		if (!container.is(e.target) && container.has(e.target).length === 0) {
			$('body').removeClass('nav-open');
		}
	});

	/* -----------------------------------------------------------------------
	Make Bootstrap dropdown "a" link clickable
	But when clicking plus icon, show the dropdown
	--------------------------------------------------------------------------- */
	function clickableDropdownLink() {
		if (window.matchMedia("(max-width: 768px)").matches) {
			const dropdownToggle = $('.navbar .dropdown > a');
			dropdownToggle.append('<span class="dropdown-icon"></span>');
			dropdownToggle.removeAttr('data-toggle');
			$('.navbar .dropdown > a').click(function(e) {
				e.preventDefault();
				if ((e.target.tagName == 'A')) {
					const route = $(this).attr("href");
					window.location.href = route == '/' || route == '#' ? window.location.href : route;
					return;
				}
			})
			const dropdownIcon = $('.navbar .dropdown > a > span.dropdown-icon');
			dropdownIcon.click(function() {
				const parentLink = $(this).parent("a.nav-link");
				parentLink.parent(".nav-item").toggleClass("show");
				parentLink.next(".dropdown-menu").toggle();
			})
		}
	}
	clickableDropdownLink();
	/* ------------------------------------------------------------------------------------
	This is optional, this could make your app slower
	 If you want to make a dropdown link clickable after user resizing screen, you can add this. This could make your app slower
	 ----------------------------------------------------------------------------------------- */
	$(window).resize(function() {
		clickableDropdownLink();
	})
	/* ------------------------------------------------------------------------------------
	This is optional
	If you also want the dropdown link work in Desktop size. 
	----------------------------------------------------------------------------------------- */
	//if (window.matchMedia("(min-width: 768px)").matches) {
	//  $('.navbar .dropdown > a').click(function() {
	//    location.href = this.href;
	//  });
	//}

});