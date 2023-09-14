$(document).ready(function() {
    var burger = $(".burger");
    var link = $(".link");
    var overlay = $(".overlay")

    burger.click(function () {
        link.toggleClass("burger-visible");
        burger.toggleClass("burger-close");
        overlay.toggle();
        
        return false;
    });

    $(document).click(function (e) {
        if (!link.is(e.target) && !link.has(e.target).length && !burger.is(e.target) && link.hasClass("burger-visible")) {
            link.removeClass("burger-visible");
            burger.removeClass("burger-close");
            overlay.hide();
        }
    });

})