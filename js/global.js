;
(function ($) {

	// Scripts which runs after DOM load

	$(document).ready(function () {

        var $menu = $("#menu");
             
        $(window).scroll(function(){
            console.log('x');
            if ( $(this).scrollTop() > 700 && $menu.hasClass("default") ){
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("default")
                           .addClass("fixed transbg")
                           .fadeIn('fast');
                });
            } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("fixed transbg")
                           .addClass("default")
                           .fadeIn('fast');
                });
            }
        });
        $height = $(document).height();
        console.log('height='+ $height);
        $('#form-name').attr("placeholder", "Имя*");
        $('#form-email').attr("placeholder", "email*");
        $('#form-phone').attr("placeholder", "Номер телефона*");
        $('#form-text').attr("placeholder", "Сообщение*");
        

		// Add fancybox to images
		var $img;
		if ($img = $('img[class*="wp-image"]')) {
			$img.parent('a[href$="jpg"], a[href$="png"], a[href$="gif"]').fancybox({
				openEffect: 'none',
				closeEffect: 'none',
				helpers: {
					overlay: {
						locked: false
					}
				}
			});
		}

		$('a[rel*="album"]').fancybox({
			helpers: {
				overlay: {
					locked: false
				}
			}
		});

	});

	// Scripts which runs after all elements load

	$(window).load(function () {

		//jQuery code goes here

	});

	// Scripts which runs at window resize

	$(window).resize(function () {

	});

}(jQuery));
