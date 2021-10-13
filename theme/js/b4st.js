/*
 * b4st JS
 */
(function($) {
    "use strict";

    $(document).ready(function() {
        // Comments

        $(".commentlist li").addClass(
            "card bg-transparent rounded border border-dark p-3 mt-2 mb-3"
        );
        $(".comment-reply-link").addClass("btn btn-secondary");

        // Forms

        $(
            "select, input[type=text], input[type=email], input[type=password], textarea"
        ).addClass("form-control");
        $("input[type=submit]").addClass("btn btn-primary");

        // Pagination fix for ellipsis

        $(".pagination .dots").addClass("page-link").parent().addClass("disabled");

        // You can put your own code in here
        $(document).on("click", "#sliderRecrutare", function() {
            $(".recruit-section").slideToggle("slow");
            console.log("clicked");
        });
        console.log("loaded");
        $(document).ready(function() {
            $(document).on("click", ".nav-item", function() {
                $("#current_frame").attr("src", $(this).data("url"));
                console.log("changed");
            });
        });
        //        $(document).ready(function() {
        //            (function($) {
        //                $("#news-slider").owlCarousel({
        //                    items: 3,
        //                    itemsDesktop: [1199, 2],
        //                    itemsDesktopSmall: [980, 2],
        //                    itemsMobile: [600, 1],
        //                    pagination: false,
        //                    navigationText: false,
        //                    autoPlay: true,
        //                });
        //            })(jQuery);
        //        });
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#serie, #background").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        });
    });
})(jQuery);