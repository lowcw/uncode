var iso = new Isotope('.menu_cloumn', {
    itemSelector: '.menu-item'
});

//isotop
$('.portfolio-menu button').click(function() {
    
    iso.arrange({
        filter: $(this).data('filter')
    });
    // remove active from all
    $('.portfolio-menu button').removeClass('active');

    // add active to clicked one
    $(this).addClass('active');
});
