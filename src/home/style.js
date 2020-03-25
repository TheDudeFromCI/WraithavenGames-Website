function loadSmoothDropdownAnimation() {
    $('.dropdown').on('show.bs.dropdown', function () {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
    });

    $('.dropdown').on('hide.bs.dropdown', function () {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(200);
    });
}

var navbarWidthCategory = -1;
function updateNavbar() {
    let width = $(window).width();
    let wide = width < 768 ? 1 : 2;
    if (width < 400)
        wide = 0;

    if (navbarWidthCategory == wide)
        return;

    navbarWidthCategory = wide;
    switch (navbarWidthCategory) {
        case 0:
            $('#wg-logo').removeClass('text-left');
            $('#wg-logo').addClass('flex-grow-1 text-center');
            $('#navbar-button-container').addClass('container-fluid d-flex');
            $('.navbar-collapse').append($('#login-link'));
            $('#summary-box').addClass('media');
            $('#summary-box img').removeClass('floating-avatar');
            $('#summary-box').css('margin', '20px');
            $('#summary-box .blog-content').css('margin-top', '0px');
            break;

        case 1:
            $('#wg-logo').removeClass('text-left');
            $('#wg-logo').addClass('flex-grow-1 text-center');
            $('#navbar-button-container').addClass('container-fluid d-flex');
            $('#navbar-button-container').append($('#login-link'));
            $('#summary-box').addClass('media');
            $('#summary-box img').removeClass('floating-avatar');
            $('#summary-box').css('margin', '20px');
            $('#summary-box .blog-content').css('margin-top', '0px');
            break;

        case 2:
            $('#wg-logo').removeClass('flex-grow-1 text-center');
            $('#wg-logo').addClass('text-left');
            $('#navbar-button-container').removeClass('container-fluid d-flex');
            $('#navbar-container').append($('#login-link'));
            $('#summary-box').removeClass('media');
            $('#summary-box img').addClass('floating-avatar');
            $('#summary-box').css('margin', '20px 0px');
            $('#summary-box .blog-content').css('margin-top', '45px');
            break;
    }
}

$(document).ready(function () {
    loadSmoothDropdownAnimation();
    updateNavbar();

    $(window).resize(updateNavbar);

    $('#login-form').submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "/include/login.php",
            data: $(this).serialize(),
            success: function (data) {
                if (data === 'Invalid')
                    alert("Invalid username or password");
                else
                    window.location = '/user/' + encodeURIComponent(data.substring(7));
            }
        });
    });
});