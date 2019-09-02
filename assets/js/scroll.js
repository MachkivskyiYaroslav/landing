$(window).scroll(function(){
    var st = $(this).scrollTop();
    $(".header-center").css({
        "transform" : "translate(0%, " + st/4 + "%"
        
    }); 
    $(".bottom").css({
        "transform" : "translate(0%, " + st*2 + "%"
        
    });

});

$(window).on('scroll', function() {
	var scrollCoef = 0.0015;

	$('.header-center').css({
		opacity: 1 - $(window).scrollTop() * scrollCoef
	})
});
$(window).on('scroll', function(){
    $('.section-3').parallax({imageSrc: './images/bg-restaurant-1.jpg'});
});
$(window).on('scroll', function(){
    $('.section-6').parallax({imageSrc: './images/bg-restaurant-1.jpg'});
});

