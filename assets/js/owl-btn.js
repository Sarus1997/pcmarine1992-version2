$(".slider").owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    nav: true, // Show navigation
    navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'>&nbsp;</i>"],
    responsive: {
        0: {
            items: 1
        },
        480: {
            items: 2
        },
        720: {
            items: 3
        }
    }
});
