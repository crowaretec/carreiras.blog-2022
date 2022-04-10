
(function ($, d) {

    $(d).ready(function () {

        // Dopdown Toggle Event
        $(".dropbtn").click(function () {
            $(this).toggleClass('active');

            $(this).find('i')
                .toggleClass('fa fa-angle-up fa fa-angle-down');

            $(".dropdown-content").slideToggle();
        });


        $("#mob-header").find('.sandwich-menu')
            .click(function () {
                $("#mob-nav").show();
            });

        $("#mob-header").find(".btn-close")
            .click(function () {
                $("#mob-nav").hide();
            });

        // Clique de Seu Emprego - Mobile
        $("#mob-nav").find(".job").click(function () {
            $("#mob-nav").find(".job-sub").slideToggle();
        });

        // Icon de Seu Emprego - Mobile
        $('.job').click(function () {
            $(this).find('i').toggleClass('fa fa-angle-up fa fa-angle-down');
        });

    });

})(jQuery, document);





