//child-item-bookonline
$('#shoow').click(function(){
    $('#hidde').show();
});
$('#delete-stop').click(function(){
    $('#hidde').hide();
});

//togglebutn-form book online
// $('#shows').click(function(){
//     $('#hiddes').toggle();
// });


//floating form
      $('.formController').click(function (){
        $('.formWrap').toggleClass("active");
      });


//plusandmiusbookonline
	$(document).ready(function() {
			$('.minus').click(function () {
				var $input = $(this).parent().find('input');
				var count = parseInt($input.val()) - 1;
				count = count < 1 ? 1 : count;
				$input.val(count);
				$input.change();
				return false;
			});
			$('.plus').click(function () {
				var $input = $(this).parent().find('input');
				$input.val(parseInt($input.val()) + 1);
				$input.change();
				return false;
			});
		});


// NAVIGATION
initializeStellarNav(1, '.main-nav');
function initializeStellarNav(index, element) {
	$(element).stellarNav({
		breakpoint: 1200,
		position: 'left'
	});
}

// Index Section1 Slider Js
$('.index-Sec1-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    nav:true,
    navText : ['<i class="fas fa-arrow-left"></i>','<i class="fas fa-arrow-right"></i>'],
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

//PRODUCT QUANTITY SELECT INPUT
$(document).ready(function(){
    $('.count').prop('disabled', false);
    $(document).on('click','.plus',function(){
       $(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) + 1 );
   });
    $(document).on('click','.minus',function(){
      $(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) - 1 );
      if ($(this).siblings('.count').val() == 0) {
        $(this).siblings('.count').val(1);
        }
    });
});
