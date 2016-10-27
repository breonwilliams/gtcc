
'use strict';

jQuery(function($) {
    jQuery(function($) {
        // Remove Search if user Resets Form or hits Escape!
        $('body, form.navbar-form[role="search"] button[type="reset"]').on('click keyup', function(event) {
            console.log(event.currentTarget);
            if (event.which == 27 && $('form.navbar-form[role="search"]').hasClass('active') ||
                $(event.currentTarget).attr('type') == 'reset') {
                closeSearch();
            }
        });

        function closeSearch() {
            var $form = $('form.navbar-form[role="search"].active')
            $form.find('input').val('');
            $form.removeClass('active');
        }

        // Show Search if form is not active // event.preventDefault() is important, this prevents the form from submitting
        $(document).on('click', 'form.navbar-form[role="search"]:not(.active) button[type="submit"]', function(event) {
            event.preventDefault();
            var $form = $(this).closest('form'),
                $input = $form.find('input');
            $form.addClass('active');
            $input.focus();

        });
    });
})

// Sticky Nav

jQuery(function($) {
    $('.navbar-custom').affix({
        offset: {
            top: $('.navbar-custom').offset().top
        }
    });
});