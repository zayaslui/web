
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			$(document).ready(function($) {
			if($(".scroll").length>0){
				$(".scroll").click(function(event){		
					event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});				
			}
			});
	</script>
	<!-- //end-smooth-scrolling -->	

<script src="js/jquery.filterizr.js"></script>  
<script src="js/controls.js"></script>
<!-- Kick off Filterizr -->
<script type="text/javascript">
		$(document).ready(function() {
			//Initialize filterizr with default options
			if($(".filtr-container").length>0){
				$('.filtr-container').filterizr();
			}
		});
</script>	
<!-- swipe box js -->
<script src="js/jquery.swipebox.min.js"></script> 
<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox(
				{
					// useCSS : true, // false will force the use of jQuery for animations
					// useSVG : true, // false to force the use of png for buttons
					// initialIndexOnArray : 0, // which image index to init when a array is passed
					// hideCloseButtonOnMobile : false, // true will hide the close button on mobile devices
					// removeBarsOnMobile : true, // false will show top bar on mobile devices
					// hideBarsDelay : 3000, // delay before hiding bars on desktop
					// videoMaxWidth : 1140, // videos max width
					// beforeOpen: function() {}, // called before opening
					// afterOpen: null, // called after opening
					// afterClose: function() {}, // called after closing
					// loopAtEnd: false // true will return to the first image after the last image is reached
				}

			);
		});
</script> 
<!-- //swipe box js -->

	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->   
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
    

    <!-- script viajes -->
	<script>

	function submitContactForm(){
	    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
	    var name = $('#inputName').val();
	    var email = $('#inputEmail').val();
	    var message = $('#inputMessage').val();
	    if(name.trim() == '' ){
	        alert('Please enter your name.');
	        $('#inputName').focus();
	        return false;
	    }else if(email.trim() == '' ){
	        alert('Please enter your email.');
	        $('#inputEmail').focus();
	        return false;
	    }else if(email.trim() != '' && !reg.test(email)){
	        alert('Please enter valid email.');
	        $('#inputEmail').focus();
	        return false;
	    }else if(message.trim() == '' ){
	        alert('Please enter your message.');
	        $('#inputMessage').focus();
	        return false;
	    }else{
	        $.ajax({
	            type:'POST',
	            url:'correo_agendarme.php',
	            data:'contactFrmSubmit=1&name='+name+'&email='+email+'&message='+message,
	            beforeSend: function () {
	                $('.submitBtn').attr("disabled","disabled");
	                $('.modal-body').css('opacity', '.5');
	            },
	            success:function(msg){
	            	console.log(msg)
	                if(msg == 'ok'){
	                    $('#inputName').val('');
	                    $('#inputEmail').val('');
	                    $('#inputMessage').val('');
	                    $('.statusMsg').html('<span style="color:green;">Gracias por ponerse en contacto con nosotros, nos pondremos en contacto con usted pronto.</p>');
	                }else{
	                    $('.statusMsg').html('<span style="color:red;">Se ha producido algún problema. Vuelve a intentarlo.</span>');
	                }
	                $('.submitBtn').removeAttr("disabled");
	                $('.modal-body').css('opacity', '');
	            }
	        });
	    }
	}
	// customBtn
	$('#customBtn').click(function() {
	  $(this).toggleClass('clicked');
	  $('#customBtn p').text(function(i, text) {
	    return text === "Agendarme!" ? "Agendarme" : "Agendarme!";
	  });
	  $("#inputLugar").val("Sitio1");
	  var timer = clearTimeout(0);
	  timer = setTimeout(function(){
		  $("#modalForm").modal();  	
	  },1000)
	});
	//customBtn2
	$('#customBtn2').click(function() {
	  $(this).toggleClass('clicked');
	  $('#customBtn2 p').text(function(i, text) {
	    return text === "Agendarme!" ? "Agendarme" : "Agendarme!";
	  });
	  $("#inputLugar").val("Sitio2");
	  var timer = clearTimeout(0);
	  timer = setTimeout(function(){
		  $("#modalForm").modal();  	
	  },1000)
	});
	
	


	function fnBtn(id,sitio){
		$('#'+id).click(function() {
		  $(this).toggleClass('clicked');
		  $('#'+id+' p').text(function(i, text) {
		    return text === "Agendarme!" ? "Agendarme" : "Agendarme!";
		  });
		  $("#inputLugar").val(sitio);
		  var timer = clearTimeout(0);
		  timer = setTimeout(function(){
			  $("#modalForm").modal();  	
		  },1000)
		});			
	}
	</script>    
<!-- imagen iphone -->
<script>

		$(document).on('mousemove', function(e){
		    // console.log(e.pageX);
		    // $('.light').css({
		    //    left:  e.pageX - 300,
		    //    top:   e.pageY - 300
		    // });
		});

		var el = $('.js-tilt-container');

		el.on('mousemove', function(e){

			const {left, top} = $(this).offset();
			const cursPosX = e.pageX - left;
			const cursPosY = e.pageY - top;
			const cursFromCenterX = $(this).width() / 2 - cursPosX;
			const cursFromCenterY = $(this).height() / 2 - cursPosY;
			

			$(this).css('transform','perspective(500px) rotateX('+ (cursFromCenterY / 40) +'deg) rotateY('+ -(cursFromCenterX / 40) +'deg) translateZ(10px)');
		  
		  const invertedX = Math.sign(cursFromCenterX) > 0 ? -Math.abs( cursFromCenterX ) : Math.abs( cursFromCenterX );
		  
		  //Parallax transform on image
		  $(this).find('.js-perspective-neg').css('transform','translateY('+ ( cursFromCenterY / 10) +'px) translateX('+ -(invertedX  / 10) +'px) scale(1.15)');

			$(this).removeClass('leave');
		});

		el.on('mouseleave', function(){
			$(this).addClass('leave');
		});
	/*wow*/
	var wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
</script>
	
	<script src="js/particles.js"></script>
	<script src="js/app.js"></script>
<!-- cambiar menu collpase -->
	<script>
		$(document).ready(function(){
			var mediaquery = window.matchMedia("(max-width: 767px)"),
		    content = document.querySelector(".container1");

		    function handleOrientationChange(mediaquery) {
		      if (mediaquery.matches) {
		        // console.log("mediaquery dentro de 767px");
				$('.cl-effect-20').removeClass('cl-effect-20');
				$('.flag_a').addClass('btn w3ls-hover');
				$('.flag_dropdown').removeClass('dropdown-lz-menu');
				$('.flag_dropdown').addClass('dropdown-menu');
				
		      } else {
				$('.flag_li').addClass('cl-effect-20');
				$('.flag_a').removeClass('btn w3ls-hover');
				$('.flag_dropdown').removeClass('dropdown-menu');
				$('.flag_dropdown').addClass('dropdown-lz-menu');				
		        // console.log("mediaquery fuera de 767px");
		      }
		    }
		    handleOrientationChange(mediaquery);
		    mediaquery.addListener(handleOrientationChange);
		})
	</script>
<!-- cambiar menu collpase -->

<!-- no found slider -->
    <script>
    var vibracion = {
      init:function(){
        var c = document.getElementById('canv');
        var _ = c.getContext('2d');
        c.width = 300;
        c.height = 300;
        var ms = false;
        var w = 0, h = 0;
        
        var img = new Image();
        img.src = 'images/image_not_found_180x180.jpg'; 
        var set = function(){
          var run, _h, _w, dx, a;
          w = img.width;
          h = img.height;
          _.translate(50, 50);
          a = 30;
          dx = 0;
          _w = w + 50;
          _h = h + 50;
          return (run = function() {
            var inc, i, j;
            _.clearRect(-a, -a, _w, _h);
            inc = ms === true ? 0.5 : 0.18;
            for (j=0; j <= h; i = 0 <= h ? ++j : --j) {
              dx = ~~(inc * (Math.random() - 0.5) * a);
              _.drawImage(img, 0, i, w, 1, dx, i, w, 1);
            }
            window.requestAnimationFrame(run);
          })();
        };
          ////////////////
        img.onload = function(){
          return set();
        };
        c.addEventListener('mouseover', function(){
          return ms = true;
        }, false);
        c.addEventListener('touchmove',function(e){
          //e.preventDefault();
          return ms = true;
        }, false);
        c.addEventListener('mouseout', function(){
          return ms = false;
        }, false);
        c.addEventListener('touchend',function(){
          return ms = false;
        }, false);

      }
    }
    $(document).ready(function(){
    	if($("#canv").length > 0){
		    vibracion.init();
		    /*canvas image class*/
			$('.albums-left').addClass('albums-left1');			
			$('.albums-left').removeClass('albums-left');
    	}
    })

    /*canvas image not found*/

   </script>
   <script>
   /*submenu open on hover*/
   	$(".cl-effect-20, .flag_li, .flag_li_dropdown").hover(
   		function(){$(this).addClass("open");},
   		function(){$(this).removeClass("open");}
   	)
   </script>
<!-- no found slider -->


	<script>
		(function() {

			function init() {
				var speed = 250,
					easing = mina.easeinout;

				[].slice.call ( document.querySelectorAll( '#grid > a' ) ).forEach( function( el ) {
					var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
						pathConfig = {
							from : path.attr( 'd' ),
							to : el.getAttribute( 'data-path-hover' )
						};

					el.addEventListener( 'mouseenter', function() {
						path.animate( { 'path' : pathConfig.to }, speed, easing );
					} );

					el.addEventListener( 'mouseleave', function() {
						path.animate( { 'path' : pathConfig.from }, speed, easing );
					} );
				} );
			}

			init();

		})();
	</script>
	
<script>
// funcion ajax
	var servi = {
		reset:function(elemento){
			$elem.before($elem.clone(true));
		    var $newElem = $elem.prev();
		    $elem.remove();
		    return $newElem;
		},

	}
	$(document).ready(function(){
		$(".destinos2 > ul > li").on("click",function(e){
		  var data = this.getAttribute("data-divague");
		  //$(this).addClass("active");
		  //inicio ajax
		  var values = {d:data}
		  console.log(values);
		  $.ajax({
		  	type:"POST",
		  	url:"app/RepositorioAjax.php",
		  	data:values,
		  	success:function(data){
		  		console.log(data);
		  		//clonar
				var $this = $(".wow_promocion");
				$(".wow_promocion").remove();
				$("#contenido_paquetes").append(data).fadeIn(999);
		  	},
		  });
		});
	});


	$('.nav-list').on('click', 'li', function() {
	    $('.nav-list li.active').removeClass('active');
	    $(this).addClass('active');
	});

</script>
</body>
</html>
