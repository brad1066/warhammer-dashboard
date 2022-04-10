jQuery(($) => {
    var siteNav = $('nav.site-nav');
    $(document).on('click', '#site-nav_toggle', (e) => {
        let nav_state = siteNav.attr('data-state');
        siteNav.attr('data-state', nav_state=="open"?"closed" : "open");
        $('#site-nav_toggle').attr('toggled', nav_state=="open"?"false" : "true");
    })
});