const mobileScreen = window.matchMedia("(max-width: 990px)");

$(document).ready(function () {
    $(".menu-toggle").click(function () {
        if (mobileScreen.matches) {
            // Slide down/up animation for mobile menu toggle
            $(".dashboard-nav").slideToggle(300); // Adjust the duration as needed
        } else {
            $(".dashboard").toggleClass("dashboard-compact");

            // Slide animation for the dashboard content
            $(".dashboard-app").animate({
                marginLeft: $(".dashboard").hasClass("dashboard-compact") ? "0px" : "300px"
            }, 300);
            $(".dashboard-nav").animate({
                marginLeft: $(".dashboard").hasClass("dashboard-compact") ? "-300px" : "0px"
            }, 300);
        }
    });
});
