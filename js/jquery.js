// JavaScript Document


//scroll to top button
$(document).ready(function(){

    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    //Click event to scroll to top
    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });

});
//end scroll to top button


/***ĐĂNG KÍ -ĐĂNG NHẬP *****/


/**END ĐĂNG KÍ- ĐĂNg NHẬP *****************/
