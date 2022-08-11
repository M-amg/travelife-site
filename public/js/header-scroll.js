$(document).ready(function(){
    let scrollTop = 0;
    let lastScrollTop = 0;
    $(document).scroll(function(event){
        let scrollTop = $(this).scrollTop();
        if (scrollTop > lastScrollTop){
            $('.web').addClass('bg-header-scroll').removeClass('bg-header-top');
            $('.web').css({'boxShadow': '0 0 20px rgba(0, 0, 0, .1)'});
            $('.web').css({'transition': '.2s'});
            $('#logo-jmb').css({'width': '95px'});
            $('#logo-jmb').css({'height': '95px'});
            $('#logo-jmb').css({'transition': '.2s'});
        } else {
            /*au début*/
            $('.web').addClass('bg-header-top').removeClass('bg-header-scroll');
            $('.web').css({'boxShadow': 'none'});
            $('#logo-jmb').css({'width': '120px'});
            $('#logo-jmb').css({'height': '120px'});
        }
    });
});