    $(window).scroll(function(){
        $('.bloc').each(function(){
            if($(window).scrollTop() > $(this).offset().top){
               var blocdID = ($(this).attr('id'));
               $('.navbar a').removeClass('active')
               $('.navbar li a[data-scroll="'+ blocdID + '"]').addClass('active');
            }
        })
    })
    


//navbar sticky
    $(window).on('scroll', function(){
        if($(window).scrollTop()) {

            $('nav').addClass('sticky');
            $('.navbar-light .navbar-nav .nav-link ').addClass('stickylinks ');
            $('.navbar .navbar-brand  ').addClass('stickylinks-img ');
             
        } else{
            $('nav').removeClass('sticky');
            $('.navbar-light .navbar-nav .nav-link ').removeClass('stickylinks ');
            $('.navbar .navbar-brand ').removeClass('stickylinks-img  ');
        }

        if($(window).scrollTop() > 300 ){
            $('.to-top').fadeIn(500);
        }else{
            $('.to-top').fadeOut(500);
        }
    })



    $('.owl-doctor').owlCarousel({
        items:4,
        loop:false,
        center:true,
        dots:false,
        margin:10,
        URLhashListener:true,
        autoplayHoverPause:true,
        startPosition: 'URLHash',
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

$('.owl-testimonial').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
        autoplay:true,
    autoplayTimeout:4000,
    smartSpeed:800,
    autoplayHoverPause:true,
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
})

         ///////////////////////////////
	$(".form-btn .BMI-btn-calculate").on('click', function(){
		var weight = $( "#weight").val();
		if(weight != 0){
		    $(".BMI-result").show(500);
		}
	});


//   Calculate form
   var form = $("form");
	
	form.on("suBMIt", function(e){
		e.preventDefault();
		var resultDiv = $(".result .title");
		
		function calcBMI(){
			var weight = $("#weight").val();
	    var height = $("#height").val();
			var BMI = weight / (height * height);
			return BMI.toFixed(2);
			
		}
		function BMIState(){
			if(calcBMI() < 16.9 ){
				return "Very underweight";
			}
			if(calcBMI() > 17 && calcBMI() < 18.4 ){
				return "Under weight";
			}
			if(calcBMI() > 18.5 && calcBMI() < 24.9 ){
				return "Normal weight";
			}
			if(calcBMI() > 25 && calcBMI() < 29.9 ){
				return "Overweight";
			}
			if(calcBMI() > 30 && calcBMI() < 34.9 ){
				return "Overweight class 1";
			}
			if(calcBMI() > 35 && calcBMI() < 40 ){
				return "Overweight class 2";
			}
			if(calcBMI() > 40){
				return "Overweight class 3";
			}
		}
		resultDiv.html(calcBMI() + " > " + BMIState());
	});
