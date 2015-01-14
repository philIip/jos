$(document).ready(function () {
    var parentDivs = $('#nestedAccordion div'),
        childDivs = $('#nestedAccordion h3').siblings('div');

    $('#nestedAccordion h2').click(function () {
        parentDivs.slideUp();
        if ($(this).next().is(':hidden')) {
            $(this).next().slideDown();
        } 
        else {
            $(this).next().slideUp();
        }
    });

    $('#nestedAccordion h3').click(function () {
        childDivs.slideUp();
        if ($(this).next().is(':hidden')) {
            $(this).next().slideDown();
        } 
        else {
            $(this).next().slideUp();
        }
    });
});

/*$(document).ready(function(){
    $("#nav-mobile").html($("#menu").html());

    $("#nav-trigger span").click(function() {

        if ($("nav#nav-mobile ul").hasClass("expanded")) {
            $("nav#nav-mobile ul.expanded").removeClass("expanded").slideUp(250);
            $(this).removeClass("open");
        } 
        else {
            $("nav#nav-mobile ul").addClass("expanded").slideDown(250);
            $(this).addClass("open");
        }
    });
});*/