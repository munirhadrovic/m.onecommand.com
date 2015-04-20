<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">
		<title>Automotive Marketing Solutions - OneCommand</title>
		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function(){
				$('#menu-seo').slicknav({
					prependTo:'#navigation-menu-seo'
				});
			});
			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function() { 
		    	var s = document.createElement("script");s.async = true;s.onload = s.onreadystatechange = function(){getYelpWidget("boo-boo-records-inc-san-luis-obispo","300","RED","y","y","2");};s.src='http://chrisawren.com/widgets/yelp/yelpv2.js' ;var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);})
		    ();
    	</script>
    	<div id="fb-root"></div>
		    <script>
		   $(function(d, s, id) {
      			var js, fjs = d.getElementsByTagName(s)[0];
      			if (d.getElementById(id)) return;
      			js = d.createElement(s); js.id = id;
      			js.src = "//connect.facebook.net/en_EN/sdk.js#xfbml=1&version=v2.0";
      			fjs.parentNode.insertBefore(js, fjs);
    		}(document, 'script', 'facebook-jssdk'));</script>
    	
	</head>
	<body>
		
		<?php 
			include 'settings.php';			
		?>
		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><a href="#page1"><img src="img/logo.png" alt="LOGO"></a></h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">
			<h1>Powered by <a href="http://mobilegrows.com/">MobileGrows</a> | <a href="http://onecommand.com/" rel="external">Desktop Site</a></h1>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  

		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/slider2.png" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/Screenshot_8.png" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/Screenshot_5.png" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
				      
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-b" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a href="#myPopuptelephone" data-rel="popup" data-transition="flow"><img src="img/call-btn.png"></a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS"><a href="#myPopup" data-rel="popup" data-transition="flow"><img src='img/location-btn.png'></a>
						<!--<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="<img src='img/location-btn.png'>";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="<img src='img/location-btn.png'>";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0) {

									console.log("Blakberu je prosao ")
									var prostordugme=document.getElementById('findUS');
									var dugme= document.createElement('a');
									dugme.setAttribute('class', "");
									dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									dugme.innerHTML="<img src='img/location-btn.png'>";
									prostordugme.appendChild(dugme);
									}		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="<img src='img/location-btn.png'>";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>-->
					</div>

					<div class="ui-block-c"><a href="#contactform" data-transition="<?php echo $transitionefect ?>" data-direction="reverse"><img src="img/mail-btn.png" alt=""></a></div>   
				</fieldset>

			<!-- <div data-role="collapsible-set">	
				<div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
				   <h3>Medical Staff</h3>
				   <a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Physicians</a>
				   <a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#seopage" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Physicians Assistant</a>
				   <a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Registered Nurses</a>
				   <a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Nurse Practitioners</a>
				</div>
				<div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
				   <h3>Office Staff</h3>
				   <a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Reception Staff</a>
				   <a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Business Staff</a>
				   <a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Office Manager</a>
				</div>
				<div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
				   <h3>Our Practice</h3>
				   <a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Appointments</a>
				   <a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Office Hours</a>
				   <a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Emergency</a>
				   <a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Telephone Calls</a>
				   <a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Fees, Payment and Insurance</a>
				   <a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Prescriptions</a>
				   <a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">A Final Word</a>
				</div>
				<div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
				   <h3>Gulfshore Endo Center</h3>
				   <a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Nursing Staff</a>
				   <a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Technical Staff</a>
				   <a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Fees, Payment and Insurance</a>
				   <a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Medical Services</a>
				</div>
			</div> -->

              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">WHO WE ARE</a>
                  </div>
              </div>

				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">WHAT WE DO AUTO</a>
					</div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">WE DO COMMUNITY</a>
					</div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">LEARN SOMETHING</a>
					</div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">WORK HERE</a>
					</div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">WHAT'S NEW</a>
					</div>
				</div>
				

		  </div>
		    
        <!-- pop up for telefon -->
				<div data-role="popup" id="myPopuptelephone" class="ui-content">
                    <?php 
                        for ($i=0; $i <$companynumber ; $i++) { 
                    ?>
                        <a href='tel:<?php echo $telephone[$i] ?>' class="ui-btn"><?php echo $nazivlokacije[$i] ?></a>
                    <?php
                        }
                    ?>
                </div>
			<!-- pop up for telefon -->

			<!-- POPUP FOR FIND US -->
				<div data-role="popup" id="myPopup" class="ui-content">
                    <div id="multiadress">                      
                    </div>
                    <?php 
                        for ($i=0; $i<$companynumber ; $i++) { 
                    ?>
                        <script>
                            var ua = navigator.userAgent;
                            if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
                                console.log("Android uslo");
                                var prostordugme=document.getElementById('multiadress');
                                var dugme= document.createElement('a');
                                dugme.setAttribute('class', "ui-btn findlinks");
                                dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa[$i]; ?>,<?php echo $grad[$i]; ?>,<?php echo $skracenica[$i]; ?>");
                                dugme.innerHTML="<p ><?php echo $nazivlokacije[$i] ?></p>";
                                prostordugme.appendChild(dugme);
                            }

                            else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
                                console.log("Iphone ");
                                var prostordugme=document.getElementById('multiadress');
                                var dugme= document.createElement('a');
                                dugme.setAttribute('class', "ui-btn findlinks");
                                dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa[$i]; ?>,<?php echo $grad[$i]; ?>,<?php echo $skracenica[$i]; ?> ");
                                dugme.innerHTML="<p><?php echo $nazivlokacije[$i] ?></p>";
                                prostordugme.appendChild(dugme);
                            }

                            else if (ua.indexOf("BlackBerry") >= 0)
                                    {                                     
                                       console.log("Blakberu je prosao ");
                                        console.log("Blakberu je prosao ")
                                        var prostordugme=document.getElementById('multiadress');
                                        var dugme= document.createElement('a');
                                        dugme.setAttribute('class', "ui-btn findlinks");
                                        dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa[$i]; ?>,<?php echo $grad[$i]; ?>,<?php echo $skracenica[$i]; ?>'}});");
                                        dugme.innerHTML="<p ><?php echo $nazivlokacije[$i] ?></p>";
                                        prostordugme.appendChild(dugme);
                                    }                               

                                else {
                                console.log("nije nigdje uslo default ")
                                var prostordugme=document.getElementById('multiadress');
                                var dugme= document.createElement('a');
                                dugme.setAttribute('class', "ui-btn findlinks");
                                dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa[$i]; ?>,<?php echo $grad[$i]; ?>,<?php echo $skracenica[$i]; ?>");
                                dugme.innerHTML="<p ><?php echo $nazivlokacije[$i] ?></p>";
                                prostordugme.appendChild(dugme);
                            }

                            // if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                            // // some code..
                            // }
                        </script>
                    <?php
                        }
                    ?>                   
                </div>	
			<!-- POPUP FOR FIND US -->
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- page 2 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="page2" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu">
						<ul id="menu">
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">MAIN</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">WHO WE ARE</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">WHAT WE DO AUTO</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">WE DO COMMUNITY</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">LEARN SOMETHING</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">WORK HERE</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">WHAT'S NEW</a></li>					
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">CONTACT</a></li>
						</ul>
					</section>
                    <p>This is only a <b>PREVIEW</b> version of your Mobile Website.</p>
                    <p>Please contatact our official Sales Representative for <b>Full Functional Version.</b></p>

                </div>
			</div>					
		</div>
		
		<!-- page 2 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- contact us ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">MAIN</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">WHO WE ARE</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">WHAT WE DO AUTO</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">WE DO COMMUNITY</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">LEARN SOMETHING</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">WORK HERE</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">WHAT'S NEW</a></li>
							</ul>
					</section>
					<div>	
						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
							Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/><br>
							E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/><br>
							Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/><br>
							Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/><br>
							Message:<br>
							<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> <br />
							<input type="submit" value="Send" name="submit" class="btn" id="input-dugme">
						</form>
					</div>
				</div>
			</div>
		
		</div>
<!--contact us///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- page seo ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="seopage" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-seo">
							<ul id="menu-seo">
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Home</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Web Design</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Local SE0</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Web Analytics</a></li>
							</ul>
					</section>
					
				</div>
			</div>
		
		</div>
<!--page seo///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="succes" data-role="page" data-theme="<?php echo $theme ?>" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
			 <p>The contact form was sent succesful!</p>
			
			</div>
		
		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was sent because of an error!</p>
			</div>
		
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////
	<!-- page 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- SLIDER ZA MOBILNI SAJT POCINJE OVDJEE -->
		<!-- it works the same with all jquery version from 1.x to 2.x -->
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		<!-- Slajder se zavrsava -->
		<script src="js/easing.js" type="text/javascript"></script>
		<!-- UItoTop plugin -->
		<script src="js/jquery.ui.totop.js" type="text/javascript"></script>
		<!-- Starting the plugin -->
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
	</body>
</html>
