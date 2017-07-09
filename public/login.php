<?php 
	session_start();
	$error="Please Input your ID, Password";
	require_once("../includes/database.php");

	if (isset($_POST["submit"])) {
		$validation=$database->authenticate($_POST["EID"], $_POST["Pass"]);
		if ($validation!=true) {
			$error="Invalid Id/Password";
		}
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>log In</title>
 </head>
 <body>

 	
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/move-top.js"></script>
					<script type="text/javascript" src="js/easing.js"></script>
					<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
					</script>
<!-- Add fancyBox main JS and CSS files -->
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>
</head>
<body>
 <div class="header">
  <div class="header-top">	
	<div class="container">
   		<div class="logo">
			<a href="index.html"><img src="images/logo.png" alt=""/></a>
		</div>	
		<div class="menu">																
			<a href="#" class="right_bt" id="activator"><img src="images/nav.png" alt=""/></a>
				<div class="box" id="box">
				   <div class="box_content_center">
					   <div class="menu_box_list">
						   <ul>
							   <li><a href="#home" class="scroll">Home</a></li>
							   <li class="active"><a href="#about" class="scroll">About</a></li> 
							   <li><a href="#services" class="scroll">Services</a></li> 
							   <li><a href="#team" class="scroll">Team</a></li>
							   <li><a href="index.php"  >Log In</a></li>
							</ul>
						</div>
						<a class="boxclose" id="boxclose"><img src="images/close.png" alt=""/></a>
					  </div>                
					</div>
					<script type="text/javascript" src="js/easing.js"></script>
					     <script type="text/javascript">
								var $ = jQuery.noConflict();
									$(function() {
										$('#activator').click(function(){
												$('#box').animate({'top':'0px'},500);
										});
										$('#boxclose').click(function(){
												$('#box').animate({'top':'-700px'},500);
										});
									});
									$(document).ready(function(){
									
									//Hide (Collapse) the toggle containers on load
									$(".toggle_container").hide(); 
									
									//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
									$(".trigger").click(function(){
										$(this).toggleClass("active").next().slideToggle("slow");
										return false; //Prevent the browser jump to the link anchor
									});
									
									});
								</script>
				</div> 	
				<div class="clearfix"></div>
			</div>	
		</div>	
	    <div class="wmuSlider example1">
			   <article style="position: absolute; width: 100%; opacity: 0;"> 
			   	   <div class="banner-wrap">
						<h1>The AAKOHU LTd.</h1>
						<h2>We don't just cure we nurse</h2>
						<ul class="banner_btn">
						   <li class="grey"><a href="#">Get Started</a></li>
						   <li class="yellow"><a href="#">Learn More</a></li>
		    			 </ul>
					</div>
				</article>
				<article style="position: absolute; width: 100%; opacity: 0;"> 
				   	<div class="banner-wrap">
						<h1>370Project</h1>
						<h2>Group 6</h2>
						<ul class="banner_btn">
						   <li class="grey"><a href="#">Get Started</a></li>
						   <li class="yellow"><a href="#">Learn More</a></li>
		    			 </ul>
					 </div>
				</article>
		  </div>
          <script src="js/jquery.wmuSlider.js"></script> 
			<script>
       			$('.example1').wmuSlider();         
   		    </script> 	           	      
   	   </div>    
   	   <div class="main">
   	   	 <div class="content_top" id="about">
   	   	 	<div class="container">
   	   	 		<h2>We are the Best</h2>
   	   	 		<p>WHY?</p>
   	   	 		<div class="row">
	   	   	 		<div class="col-md-4 service_box">
		  				<i class="icon1"> </i>
		  				<h3><a href='#'>Resourceful</a></h3>
		  			</div>
		  			<div class="col-md-4 service_box">
		  				<i class="icon2"> </i>
		  				<h3><a href='#'>Healthy</a></h3>
		  			</div>
		  			<div class="col-md-4 service_box">
		  				<i class="icon3"> </i>
		  				<h3><a href='#'>Natural</a></h3>
		  			</div>
		  		</div>
   	   	 	</div>
   	   	 </div>
   	    <div class="services" id="services">
   	   		<div class="container">
   	   			<div class="service_top">
   	   				<h3>Our Services</h3>
   	   				<p>24/7 and more </p>
   	   			</div>
   	   			<div class="row">
   	   				<div class="col-md-6 service_box">
   	   					<ul class="service_grid">
   	   						<i class="s1"> </i>
   	   						<li class="desc">
   	   							<h4><a href="#">Accurate</a></h4>
   	   						</li>
   	   						<div class="clearfix"> </div>
   	   					</ul>
   	   					<ul class="service_grid">
   	   						<i class="s2"> </i>
   	   						<li class="desc">
   	   							<h4><a href="#">Old school in terms of commitment</a></h4>
   	   						</li>
   	   						<div class="clearfix"> </div>
   	   					</ul>
   	   					<ul class="service_grid last">
   	   						<i class="s3"> </i>
   	   						<li class="desc">
   	   							<h4><a href="#">Certified and Renowned </a></h4>
   	   							
   	   						</li>
   	   						<div class="clearfix"> </div>
   	   					</ul>
   	   				</div>
   	   				<div class="col-md-6">
   	   					<ul class="service_grid">
   	   						<i class="s4"> </i>
   	   						<li class="desc">
   	   							<h4><a href="#">Soothing atmosphere </a></h4>
   	   							
   	   						</li>
   	   						<div class="clearfix"> </div>
   	   					</ul>
   	   					<ul class="service_grid">
   	   						<i class="s5"> </i>
   	   						<li class="desc">
   	   							<h4><a href="#">Time is money</a></h4>
   	   						
   	   						</li>
   	   						<div class="clearfix"> </div>
   	   					</ul>
   	   					<ul class="service_grid last">
   	   						<i class="s6"> </i>
   	   						<li class="desc">
   	   							<h4><a href="#">Beside you always</a></h4>
   	   						
   	   						</li>
   	   						<div class="clearfix"> </div>
   	   					</ul>
   	   				</div>
   	   			</div>
   	   		</div>
   	   	</div>
   	
   	   	<!--<div class="services" id="work">
   	   		<div class="container">
   	   			<div class="service_top">
   	   				<h3>Why Work With Us</h3>
   	   				<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica</p>
   	   			</div>
   	   			<div class="row service_grid">
   	   				<div class="col-md-4">	
   	   					<div class="post_block text-center">
   	   					   <i class="one"> </i>
   	   					   <h5 class="m_1"><a href="#">Curabitar</a></h5>
   	   					   <p class="m_2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Mirum est notare</p>
   	   					</div>
   	   				</div>
   	   				<div class="col-md-4">
   	   					<div class="post_block1 text-center">
   	   					   <i class="two"> </i>
   	   					   <h5 class="m_1"><a href="#">Duis autem </a></h5>
   	   					   <p class="m_2">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolo</p>
   	   					</div>
   	   				</div>
   	   				<div class="col-md-4">
   	   					<div class="post_block2 text-center">
   	   					   <i class="three"> </i>
   	   					   <h5 class="m_1"><a href="#">Claritas est</a></h5>
   	   					   <p class="m_2">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram</p>
   	   					</div>
   	   				</div>
   	   			</div>
   	   			<div class="row">
   	   				<div class="col-md-4">	
   	   					<div class="post_block text-center">
   	   					   <i class="one"> </i>
   	   					   <h5 class="m_1"><a href="#">suscipit lobo</a></h5>
   	   					   <p class="m_2">nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper susci</p>
   	   					</div>
   	   				</div>
   	   				<div class="col-md-4">
   	   					<div class="post_block1 text-center">
   	   					   <i class="two"> </i>
   	   					   <h5 class="m_1"><a href="#">Eodem modo</a></h5>
   	   					   <p class="m_2">ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Mirum est notare</p>
   	   					</div>
   	   				</div>
   	   				<div class="col-md-4">
   	   					<div class="post_block2 text-center">
   	   					   <i class="three"> </i>
   	   					   <h5 class="m_1"><a href="#">Nulla facilisi</a></h5>
   	   					   <p class="m_2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Mirum est notare</p>
   	   					</div>
   	   				</div>
   	   			</div>
   	   		</div>
   	   </div>-->
   							<div class="clearfix"> </div>
					          </div>
   	   	                      <script type="text/javascript" src="js/circles.js"></script>
					         <script>
								var colors = [
										['#fff', '#05ceaa'], ['#fff', '#05ceaa'], ['#fff', '#05ceaa'], ['#fff', '#05ceaa']
									];
								for (var i = 1; i <= 6; i++) {
									var child = document.getElementById('circles-' + i),
										percentage = 50 + (i * 10);
										
									Circles.create({
										id:         child.id,
										percentage: percentage,
										radius:     80,
										width:      15,
										number:   	percentage / 10,
										text:       '%',
										colors:     colors[i - 1]
									});
								}
						
				</script>
				<!--/-->
   	   	</div>
   	   </div>
   	 </div>
   	 <div class="team" id="team">
   	 	<div class="container">
   	 		<div class="service_top">
   	   				<h3>Meet The Team</h3>
   	   			</div>
   	   			<div class="team_grids text-center">
   	   				<div class="col-md-4 team_grid">
   	   				  <div class="view view-fifth"><a href="#">
	                    <img src="images/t1.jpg" class="img-responsive" alt=""/>
	                    <div class="mask">
	                       <div class="content">
	                         <a class="popup-with-zoom-anim" href="#small-dialog3"> <div class="info"><img src="images/plus.png" alt=""/></div></a>
			               </div> 
	                     </div>
	                         <div id="small-dialog3" class="mfp-hide">
								   <div class="pop_up2">
								   	   <h3>Mostofa Saif Reza</h3>
									   <h4>#LuthaUIDesigner</h4>
									   <p></p>
								   </div>
							 </div>
	                     </a></div>
	                     <ul class="social">
							<li><a href=""> <i class="fb"> </i> </a></li>
							<li><a href=""><i class="tw"> </i> </a></li>
							<li><a href=""><i class="google"> </i> </a></li>
						 </ul>
   	   				   </div>
   	   				   <div class="col-md-4 team_grid">
   	   				  <div class="view view-fifth"><a href="#">
	                    <img src="images/t2.jpg" class="img-responsive" alt=""/>
	                    <div class="mask">
	                       <div class="content">
	                         <a class="popup-with-zoom-anim" href="#small-dialog3"> <div class="info"><img src="images/plus.png" alt=""/></div></a>
			               </div> 
	                     </div>
	                        <div id="small-dialog3" class="mfp-hide">
								   							 </div>
	                     </a></div>
	                     <ul class="social">
							<li><a href=""> <i class="fb"> </i> </a></li>
							<li><a href=""><i class="tw"> </i> </a></li>
							<li><a href=""><i class="google"> </i> </a></li>
						 </ul>
   	   				   </div>
   	   				  <div class="col-md-4 team_grid">
   	   				  <div class="view view-fifth"><a href="#">
	                    <img src="images/t3.jpg" class="img-responsive" alt=""/>
	                    <div class="mask">
	                       <div class="content">
	                         <a class="popup-with-zoom-anim" href="#small-dialog3"> <div class="info"><img src="images/plus.png" alt=""/></div></a>
			               </div> 
	                     </div>
	                         <div id="small-dialog3" class="mfp-hide">
								   <div class="pop_up2">
								   </div>
							 </div>
	                     </a></div>
	                     <ul class="social">
							<li><a href=""> <i class="fb"> </i> </a></li>
							<li><a href=""><i class="tw"> </i> </a></li>
							<li><a href=""><i class="google"> </i> </a></li>
						 </ul>
   	   				   </div>
   	   				   <div class="clearfix"></div>
   	   			</div>
   	   		  </div>
   	   		</div>
   	   		<!--<div class="call">
   	   			<div class="container">
   	   				<h3 class="call_text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore.&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/more.png" alt=""/></h3>
   	   			</div>
   	   		</div>
   	   	  </div>
   	   	  <div class="footer" id="contact">
   	   		<div class="container">
   	   			<form method="post" action="contact-post.html">
					<div class="contact-to">
                     	<input type="text" class="text" value="Name..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name...';}">
					 	<input type="text" class="text" value="Email..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email...';}" style="margin-left:30px">
					</div>
					<div class="text2">
	                   <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message..</textarea>
	                </div>
	                <div class="contact_btn">
	               		<input name="submit your message" type="submit" id="submit" value="Submit your Message">
	                </div>
	                <div class="clearfix"> </div>
	            </form>
	            <div class="about">
	               	  <h4>About Us</h4>
	               	  <p>abcdefghijk.......</p>
	                  <a href="#"><img src="images/f-logo.png" alt=""/></a>
	                   <ul class="f_social">
							<li><a href=""> <i class="tw1"> </i> </a></li>
							<li><a href=""><i class="fb1"> </i> </a></li>
							<li><a href=""><i class="g1"> </i> </a></li>
							<li><a href=""><i class="pin"> </i> </a></li>
							<li><a href=""><i class="linked"> </i> </a></li>
						 </ul>            
	               </div>
	            </div>
   	   		    <div class="copy">
   	   			  <div class="container">
			         <p>&copy;2014 Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
			       </div>
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
					</script>-->
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
			   </div>
   	   		</div>
   	   		<!--<div class ="LogIn" id = "LogIn">	
   	   		<form name="" method="post" action="index.php">
 		<p id="error"><?php //echo $error; ?></p>
 		<input type="text" name="EID" id="ID" placeholder="Input your EID"  required>
 		<input type="password" name="Pass" placeholder ="Password" required>
 		<input type="submit" name="submit" value="log In">

 	</form>
 	</div>-->
 </body>
 </html>
