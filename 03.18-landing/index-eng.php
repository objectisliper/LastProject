<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>russian ver</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/the-modal.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>


	<script type="text/javascript" src="js/jquery.fullPage.js"></script>
	<script type="text/javascript">
			
      

		$(document).ready(function() {
			$('#fullpage').fullpage({
				//navigation
				'navigation': true,
				'navigationPosition': 'left',
				//other function
				scrollingSpeed: 1500,
				'verticalCentered': true,
				'css3': true,
				anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6', 'page7', 'page8'],

				
				
				'navigationTooltips': ['Главная', 'Create!', 'Communicate', 'Prosper!', 'Enjoy!', 'Youre in control!', 'Stay updated', 'Футер'],
				'showActiveTooltip': true,

				//animation


				'afterLoad': function(anchorLink, index){
					if (anchorLink == 'page1'){
						$('#fp-nav').fadeOut(0);
						$('.section').css( "background-color", "#22b473" );
						$('#btn-header-register').css("display","none");
						$(document).on('click', '.scroll', function(){
						  $.fn.fullpage.moveTo('page2',1);
						});
						$('head').append('<style>.scroll:before{content: "Create!";color: white;}</style>');
						$('h1').css('font-family', "'Open Sans', 'Roboto', sans-serif !important")

						
					}

					if (anchorLink == 'page2'){
						
						$('head').append('<style>.scroll:before{content: "Communicate";color: white;}</style>');
						$('#section1 .create h1').show(500);
						$('#section1 .create p').delay(500).show(500);
						$('#section1 .trigger').delay(1000).show(500);
						$(document).on('click', '.scroll', function(){
						  $.fn.fullpage.moveTo('page3',1);
						});
						
						
						
					}
					
					if (anchorLink == 'page3'){
						
						
						$('#section2 .create h1').show(500);
						$('#section2 .create p').delay(500).show(500);
						$('head').append('<style>.scroll:before{content: "Prosper!";color: white;}</style>');
						$(document).on('click', '.scroll', function(){
						  $.fn.fullpage.moveTo('page4',1);
						});
						
						
						
					
					}

					if (anchorLink == 'page4'){
						
						
						$('#section3 .create h1').show(500);
						$('#section3 .create p').delay(500).show(500);
						$('#section3 .trigger').delay(1000).show(500);
						$('head').append('<style>.scroll:before{content: "Enjoy!";color: white;}</style>');
						$(document).on('click', '.scroll', function(){
						  $.fn.fullpage.moveTo('page5',1);
						});
						
						
				
					}

					if (anchorLink == 'page5'){
						
						
						$('#section4 .create h1').show(500);
						$('#section4 .create .list-stars').delay(500).show(500);
						$('head').append('<style>.scroll:before{content: "Youre in control!";color: white;}</style>');
						$(document).on('click', '.scroll', function(){
						  $.fn.fullpage.moveTo('page6',1);
						});
						
						
						
						
					}

					if (anchorLink == 'page6'){
						
						
						$('#section5 .create h1').show(500);
						$('#section5 .create p').delay(500).show(500);
						$('#section5 .trigger').delay(1000).show(500);
						$('head').append('<style>.scroll:before{content: "Stay updated";color: white;}</style>');
						$(document).on('click', '.scroll', function(){
						  $.fn.fullpage.moveTo('page7',1);
						});
						
						
						
				
					}

					if (anchorLink == 'page7'){
						
						
						$('#section6 .create h1').show(500);
						$('#section6 .create p').delay(500).show(500);
						$('#section6 .trigger').delay(1000).show(500);
						$('head').append('<style>.scroll:before{content: "Join us";color: white;}</style>');
						$(document).on('click', '.scroll', function(){
						  $.fn.fullpage.moveTo('page8',1);
						});
						$('.scroll').css('display','block')
						
						
					
						
					}
					if (anchorLink == 'page8') {
						$('#fp-nav').css("display", "none");
					
						$('#section7 .footer-text h1').show(500);
						$('#section7 .form').delay(500).show(500);
						$('#btn-header-register').css("display","none");
						$('#footer').css('display','block');
						
						
					
					}

					

				},
				

			
					onLeave: function(index, nextIndex, direction){
						var leavingSection = $(this);

						var i;

						for (var i = 0; i < 9; i++) {
							if(index == i && nextIndex == 1){
							
							
							$('#fp-nav li:nth-child(2) .line_nav').css('padding-top','10px');
							$('#fp-nav li:nth-child(2) .line_nav').css('padding-bottom','53px');
							$('.scroll').show(1000);
							$('#btn-header-register').css("display","none");
							$('.section').css( "background-color", "#22b473" );
							$('#fp-nav').fadeOut(500);
							$('.scroll').css('animation','move 0.3s infinite alternate-reverse ease-in-out');
							
							
						}

							if(index == i && nextIndex == 2){
							$('#btn-header-register').css("display","inline-block");
							$('.section').css( "background-color", "#e87c50" );
							$('.scroll').css('animation','none');
							

							
							$('#fp-nav').fadeIn(500);
							$('.scroll').show(1000);
							
						}

						if(index == i && nextIndex == 3){
							$('#btn-header-register').css("display","inline-block");
							$('.section').css( "background-color", "#4495cc" );
							$('.scroll').css('animation','none');

							
							$('#fp-nav').fadeIn(500);
							$('.scroll').show(1000);
							
							}

						if(index == i && nextIndex == 4){
							$('#btn-header-register').css("display","inline-block");
							$('.section').css( "background-color", "#876bb3" );
							$('.scroll').css('animation','none');

							
							$('#fp-nav').fadeIn(500);
							$('.scroll').show(1000);
							
						}

						if(index == i && nextIndex == 5){
							$('#btn-header-register').css("display","inline-block");
							$('.section').css( "background-color", "#dd6558" );
							$('.scroll').css('animation','none');

						
							$('#fp-nav').fadeIn(500);
							$('.scroll').show(1000);
							
						}

						if(index == i && nextIndex == 6){
							$('#btn-header-register').css("display","inline-block");
							$('.section').css( "background-color", "#36b391" );
							$('.scroll').css('animation','none');

							
							$('#fp-nav').fadeIn(500);
							$('.scroll').show(1000);
							}

						if(index == i && nextIndex == 7){
							$('#btn-header-register').css("display","inline-block");
							$('.section').css( "background-color", "#cc984e" );
							$('.scroll').css('animation','none');

							
							$('#fp-nav').fadeIn(500);
							$('.scroll').show(1000);
							
						}

						if(index == i && nextIndex == 8){
							
							$('.section').css( "background-color", "#647aa6" );
							$('.scroll').css('animation','none');

							$('#fp-nav').fadeOut(500);
							
							$('#fp-nav').hide(0);
							$('#btn-header-register').css("display","none");
							$('#footer').css('display','block');
							$('.scroll').hide(1000);
						}

						}

						


						if(index == 8 && nextIndex == 7){
							$('#footer').css('display','none');
							$('.section').css( "background-color", "#cc984e" );
							$('#btn-header-register').css("display","inline-block");
							
						}


						
					}





				});
		});


				//img-nav
				$(document).on('click', '#nav_cat_1', function(){
				  $.fn.fullpage.moveTo('page2',1);
				});

				$(document).on('click', '#nav_cat_2', function(){
				  $.fn.fullpage.moveTo('page3',1);
				});

				$(document).on('click', '#nav_cat_3', function(){
				  $.fn.fullpage.moveTo('page4',1);
				});

				$(document).on('click', '#nav_cat_4', function(){
				  $.fn.fullpage.moveTo('page5',1);
				});

				$(document).on('click', '#nav_cat_5', function(){
				  $.fn.fullpage.moveTo('page6',1);
				});

				$(document).on('click', '#nav_cat_6', function(){
				  $.fn.fullpage.moveTo('page7',1);
				});

				

				
				
					

					

				
			
		</script>
		<script type="text/javascript" src="js/attrchange.js"></script>

		
		<script type="text/javascript" src="js/jquery.the-modal.js"></script>
		
		<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
</head>



<body>
	
	<div class="scroll">
		
		<div class="scrollEl"><img src="img/if_icon-ios7-arrow-back_211686.svg"></div>
	</div>
	<div id="test-modal" class="form-reg" style="display: none"><a href="" class="close">&times;</a>
					<form>
						<p style="font-size: 22px; margin-bottom: 15px; font-weight: 300;">Free Registration</p>
						<input type="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter name">
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						<button type="submit" class="btn btn-grn">Sign Up</button>
						<div class="registr_link">
						<p style="margin-top: 18px;">Your aprove with</p>
						<a href="">
							<p style="text-decoration: underline;">License agreement and </p>
						</a>
						<a href="">
							<p style="text-decoration: underline;">Provisions about protection of personal data</p>
						</a>
						</div>
					</form>
				</div>


	<div id="header">
			<div class="header-background"></div>
			<div class="container">
			<div class="top clearfix">
				
				<a href="#">
				<div class="logo"><h1>dafree</h1></div>

				<div class="lang">
				<a class="trigger" href="#"><div id="btn-header-register" class="btn btn-blue" style="border-radius: 5px !important;width: 135px;;height: 38px;font-size: 16px !important;line-height: 9px;/*! float: right; */margin-right: 65px;">Sign Up</div></a>
				<a href="index.php"><p>RUS</p></a>
				
				<ul class="lang-change list-unstyled">
					<li><img src="img/if_icon-ios7-arrow-back_211686.svg">
						<ul class="list-unstyled">
							<li><a href="index-eng.php">

								<p>eng</p>
							</a></li>
							<li><a href="index.php">
								<p>rus</p>
							</a></li>
						</ul>
					</li>
				</ul>
				
				
				</a>
				</div>
				</div>
			</div>
	</div>
	<div class="container">
		<div id="for_nav_container"></div>
	</div>
	<div class="footer_class" id="footer" style="display: none;">
		<p class="footer-p" style="display: inline-block;position: fixed;left: 20px;margin-top: 14px; color: #547cb1;">2017 © Dafree. All rights protected!</p>
		<ul class="list-unlysted" style="display: inline-block;margin-top: 14px;">
			<a href="">
				<li class="footer_nav">
					<p>Service Agreement</p>
				</li>
			</a>
			<a href="">
				<li class="footer_nav">
					<p>Statement of ownership</p>
				</li>
			</a>
			<a href="">
				<li class="footer_nav">
					<p>Anti-Spam Policy</p>
				</li>
			</a>
			<a href="">
				<li class="footer_nav">
					<p>Refund Policy</p>
				</li>
			</a>
			<a href="">
				<li class="footer_nav">
					<p>Privacy policy</p>
				</li>
			</a>
		</ul>
	</div>
	<div id="fullpage">
		<div class="section" id="section0">
			<div class="container">
				<div class="row" style="margin-top: -110px;">
				<div class="col-2" style="display: none;"></div>
				<div class="col-7 descktop" style="height: 300px;">
					<div class="text">
					<h1 style="margin-bottom: 70px; font-size: 46px; font-weight: 600;">Dafree – the blogging revolution</h1>
					<h2>More than just a place to speak your mind</h2>
					</div>
				</div> 

				<div class="mobile mobile-text-top" >
					<div id="header">
							<div class="top clearfix">
								<a href="#">
								<div class="logo"><h1>dafree</h1></div>
								<div class="lang"><a href="index.php"><p>ENG</p></a>

								<ul class="lang-change list-unstyled">
									<li><img src="img/if_icon-ios7-arrow-back_211686.svg">
										<ul class="list-unstyled">
											<li><a href="index-eng.php">
												<p>eng</p>
											</a></li>
											<li><a href="index.php">
												<p>rus</p>
											</a></li>
										</ul>
									</li>
								</ul>
								
								</div>
								</a>
							</div>
					</div>
					<div class="text">
					<h1 style=" font-weight: 600; margin-bottom: 20px;">Dafree – the blogging revolution</h1>
					<h2>More than just a place to speak your mind</h2>
					</div>
				</div> 

				<div class="col">
					<div class="form">
					<form>
						<p style="font-size: 22px; margin-bottom: 15px; font-weight: 300;">Free Registration</p>
						<input type="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter name">
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						<button type="submit" class="btn btn-grn">Sign Up</button>
						<div class="registr_link">
						<p style="margin-top: 18px;">Your aprove with</p>
						<a href="">
							<p style="text-decoration: underline;">License agreement and </p>
						</a>
						<a href="">
							<p style="text-decoration: underline;">Provisions about protection of personal data</p>
						</a>
						</div>
					</form>
					</div>
				</div>
				
			
			</div>
			<div class="row">
				
				
				<div class="col-12 navigation descktop">
					<div class="row">
						<ul class="nav">
							<div class="col-2">
									<li  class="category_1 nav_category" style="">
										<div id='nav_cat_1' class="category_1_name"><p>Create</p></div>
									</li>
								</div>
							<div class="col-2">
									<li class="category_2 nav_category" style="">
										<div id='nav_cat_2' class="category_2_name"><p>Communicate</p></div>
									</li>
								</div>
							<div class="col-2">	
									<li class="category_3 nav_category" style="">
										<div id='nav_cat_3' class="category_3_name"><p>Prosper!</p></div>
									</li>
								</div>
							<div class="col-2">	
									<li class="category_4 nav_category" style="">
										<div id='nav_cat_4' class="category_4_name"><p>Enjoy</p></div>
									</li>
								</div>
							<div class="col-2">
									<li class="category_5 nav_category" style="">
										<div id='nav_cat_5' class="category_5_name"><p>Youre in control!</p></div>
									</li>
								</div>
							<div class="col-2">
									<li class="category_6 nav_category" style="">
										<div id='nav_cat_6' class="category_6_name"><p>Stay updated</p></div>
									</li>
								</div>
						</ul>
					</div>
				</div>

				
			</div>
			<div class=" navigation mobile">
					<div class="row">
						<a class="trigger" href="#" style="width: 225px;margin: 0px auto;margin-bottom: 50px;"><div id="btn-header-register" class="btn btn-blue" style="border-radius: 5px !important;width: 215px;height: 38px;font-size: 16px !important;line-height: 9px;/*! float: right; */ margin-right: 65px;">Sign Up</div></a>
					</div>
					<div class="row">
						<ul class="nav">
							<div class="col-4"><a href="#section1">
									<li class="category_1 nav_category">
										<div class="category_1_name"><p>Create</p></div>
									</li>
								</a></div>
							<div class="col-4"><a href="#section2">
									<li class="category_2 nav_category">
										<div class="category_2_name"><p>Communicate</p></div>
									</li>
								</a></div>
							<div class="col-4"><a href="#section3">
									<li class="category_3 nav_category">
										<div class="category_3_name"><p>Prosper!</p></div>
									</li>
								</a></div>
						</ul>
					</div>
					<div class="row" style="margin-top: 30px;">
						<ul class="nav">
							<div class="col-4"><a href="#section4">
									<li class="category_4 nav_category">
										<div class="category_4_name"><p>Enjoy</p></div>
									</li>
								</a></div>
							<div class="col-4"><a href="#section5">
									<li class="category_5 nav_category">
										<div class="category_5_name"><p>Youre in control!</p></div>
									</li>
								</a></div>
							<div class="col-4"><a href="#section6">
									<li class="category_6 nav_category">
										<div class="category_6_name"><p>Stay updated</p></div>
									</li>
								</a></div>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="section moveDown" id="section1">
			<div class="container">
				<div class="descktop">
				<div class="row justify-content-end">
					
						<div class="col-5">
							<div class="create" style="margin-top: -20px !important">
							<h1 style=" margin-bottom: 100px">Create</h1>
							<p style="">Have fun creating blog entries, leave the rest to us. We got you covered with
							our powerful multitasking editor, visual appeal evaluation, a grammar
							checker and much more!</p>
							
						</div>
						
					</div>
					<div class="col-6">
						<img class="Girl" src="img/Blocks/Girl.png" alt="">
					</div>
				</div>
				</div>
				<div class="mobile">
					<div class="row">
							
								<div class="create" >
								<h1 style="">Create</h1>
								<p style="">Have fun creating blog entries, leave the rest to us. We got you covered with
								our powerful multitasking editor, visual appeal evaluation, a grammar
								checker and much more!</p>
								
								</div>
							
					</div>
					<div class="img-mobile">
						
							<img class="Girl" src="img/Blocks/Girl.png" alt="">
						
					</div>

				</div>
			</div>
		</div>
		<div class="section moveDown" id="section2">
			<div class="container">
				<div class="descktop">
				<div class="row justify-content-end">
					
						<div class="col-5">
							<div class="create" >
							<h1 style=" margin-bottom: 100px">Communicate!</h1>
							<p style="">Leave comments, Join groups, Use chat rooms, Meet people,Send messages and Create life streams</p>
							
						</div>
						
					</div>
					<div class="col-6">
						<img style="width: 430px;height: auto;transform: scale(1, 1);" class="Girl" src="img/Blocks/Hand.png" alt="">
					</div>
				</div>
				</div>
				<div class="mobile">
					<div class="row">
							
								<div class="create" >
								<h1 style="">Communicate!</h1>
								<p style="">Leave comments, Join groups, Use chat rooms, Meet people,Send messages and Create life streams</p>
								
								</div>
							
					</div>
					<div class="img-mobile">
						
							<img class="Girl" src="img/Blocks/Hand.png" alt="">
						
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="section moveDown" id="section3">
			<div class="container">
				<div class="descktop">
				<div class="row justify-content-end">
					
						<div class="col-5">
							<div class="create" style="">
							<h1 style=" margin-bottom: 100px">Prosper!</h1>
							<p style="">Promote yourself and others, receive gifts from your fans, stream donations
							and other activity bonuses!</p>
							
						</div>
					</div>
					<div class="col-6">
						<img style="margin-top: -120px !important;" class="Money" src="img/Blocks/Money.png" alt="">
					</div>
				</div>
				</div>

				<div class="mobile">
					<div class="row">
							
								<div class="create" >
								<h1 style="">Prosper!</h1>
								<p style="">Promote yourself and others, receive gifts from your fans, stream donations
								and other activity bonuses!</p>
								
								</div>
							
					</div>
					<div class="img-mobile">
						
							<img class="Girl" src="img/Blocks/Money.png" alt="" style="transform: rotate(-90deg); width: 300px;">
						
					</div>

				</div>

				
			</div>
		</div>
		<div class="section moveDown" id="section4">
			<div class="container">
				<div class="descktop">
				<div class="row justify-content-end">
					
						<div class="col-5">
							<div class="create" style="margin-top: 70px !important;">
							<h1 style="">Enjoy!</h1>
							<div style="" class="list-stars">
							<ul class="list-unstyled" style="padding: 0px">
								<li>
									<div class="stars"><img src="img/Icons/star_2.svg"></div>
									<p>Informative and convenient blog statistics</p>
								</li>
								<li>
									<div class="stars"><img src="img/Icons/star_2.svg"></div>
									<p>Broadcasting and getting feedback from users at once</p>
								</li>
								<li>
									<div class="stars"><img src="img/Icons/star_2.svg"></div>
									<p>Social media integrations</p>
								</li>
								<li>
									<div class="stars"><img src="img/Icons/star_2.svg"></div>
									<p>Built-in SEO-tools and software</p>
								</li>
								<li>
									<div class="stars"><img src="img/Icons/star_2.svg"></div>
									<p>Custom page with a unique design</p>
								</li>
							</ul>
							</div>
							
						</div>
					</div>
					<div class="col-6">
						<img style="margin-top: 70px !important;" class="Money" src="img/Blocks/shutterstock_675251404 [преобразованный].png" alt="">
					</div>
				</div>
				</div>
			
			<div class="mobile">
				<div class="row">
							
								<div class="create" >
								<h1 style="">Enjoy!</h1>
								<p style="">Informative and convenient blog statistics, Broadcasting and getting feedback from users at once, Social media integrations, Built-in SEO-tools and software, Custom page with a unique design.</p>
								
								</div>
							
					</div>
					<div class="img-mobile">
						
							<img class="Girl" src="img/Blocks/shutterstock_675251404 [преобразованный].png" alt="" >
						
					</div>
			</div>
			</div>
		</div>
		<div class="section moveDown" id="section5">
			<div class="container">
				<div class="descktop">
				<div class="row justify-content-end">
					
						<div class="col-5" >
							<div class="create" style="margin-top: -70px !important;">
							<h1 style=" margin-bottom: 100px;">You're in control!</h1>
							<p style="">Placing advertisement is a piece of cake now. Feel free to choose your
							partners and set the prices – beneficial commercials are just a few clicks away.Manage everything effortlessly using our conducive and user-friendly account
							interface.</p>
							
						</div>
					</div>
					<div class="col-6" >
						<img class="Idea" style="margin-top: -70px !important;" src="img/Blocks/Superheroes.png" alt="">
					</div>
				</div>
				</div>
				
				<div class="mobile">
					<div class="row">
							
								<div class="create" >
								<h1 style="">You're in control!</h1>
								<p style="">Placing advertisement is a piece of cake now. Feel free to choose your
								partners and set the prices – beneficial commercials are just a few clicks away.Manage everything effortlessly using our conducive and user-friendly account
								interface.</p>
								
								</div>
							
					</div>
					<div class="img-mobile">
						
							<img class="Girl" src="img/Blocks/Superheroes.png" alt="" >
						
					</div>

				</div>


			
			</div>
		</div>
		<div class="section moveDown" id="section6">
			<div class="container">
				<div class="descktop">
				<div class="row justify-content-end">
					
						<div class="col-5">
							<div class="create" style="margin-top: -70px !important;">
							<h1 style="margin-bottom: 100px;">Stay updated</h1>
							<p style="">Follow your favorite channels and blogs, and be up-to-date with everything
							that you are interested in!</p>
							
						</div>
					</div>
					<div class="col-6">
						<img class="Girl" style="margin-top: -70px !important;" src="img/Blocks/shutterstock_404191642 [преобразованный].png" alt="">
					</div>
				</div>
				</div>


				<div class="mobile">
					<div class="row">
							
								<div class="create" >
								<h1 style="">Stay updated</h1>
								<p style="">Follow your favorite channels and blogs, and be up-to-date with everything
								that you are interested in!</p>
								
								</div>
							
					</div>
					<div class="img-mobile">
						
							<img class="Girl" src="img/Blocks/shutterstock_404191642 [преобразованный].png" alt="" >
						
					</div>

				</div>


				
			</div>
		</div>
		<div class="section moveDown" id="section7">

			<div class="container" style="height: 100vh !important;">
			<div class="descktop">
				<div class="row" style="margin-top: 80px;">
				<div class="col-7" style="height: 300px;">
					<div class="text footer-text" style="font-size: 52px;">
					<h1 style=" ">Join us</h1>
					<img class="table" src="img/Blocks/Table.png" alt="">
					</div>
				</div> 

				<div class="col">
					<div class="form" style="margin-top: 140px; ">
					<form>
						<p style="font-size: 22px; margin-bottom: 15px; font-weight: 300;">Free Registration</p>
						<input type="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter name">
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						<button type="submit" class="btn btn-grn">Sign Up</button>
						<div class="registr_link">
						<p style="margin-top: 18px;">Your aprove with</p>
						<a href="">
							<p style="text-decoration: underline;">License agreement and </p>
						</a>
						<a href="">
							<p style="text-decoration: underline;">Provisions about protection of personal data</p>
						</a>
						</div>
					</form>
					</div>
					<div class="social">

						<a href="">
							<div class="soc_ico soc_ico_1">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve" fill="white">
								<g id="XMLID_834_">
									<path id="XMLID_835_" d="M81.703,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765h39.064
										c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673h-44.996
										V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5h-40.545
										C187.467,0.023,186.832,0,185.896,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H81.703
										c-2.762,0-5,2.238-5,5v50.844C76.703,162.867,78.941,165.106,81.703,165.106z"/>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								</svg>

							</div>
						</a>
						<a href="">
							<div class="soc_ico soc_ico_2">
								<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve" fill="white">
								<g id="XMLID_826_">
									<path id="XMLID_827_" d="M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73
										c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783
										c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598
										C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467
										c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977
										c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889
										c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597
										c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961
										c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895
										c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367
										c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998
										C307.394,57.037,305.009,56.486,302.973,57.388z"/>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								</svg>
							</div>
						</a>
						<a href="">
							<div class="soc_ico soc_ico_3">
								
								<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve" fill="white">
								<g id="XMLID_822_">
									<path id="XMLID_823_" d="M297.917,64.645c-11.19-13.302-31.85-18.728-71.306-18.728H83.386c-40.359,0-61.369,5.776-72.517,19.938
										C0,79.663,0,100.008,0,128.166v53.669c0,54.551,12.896,82.248,83.386,82.248h143.226c34.216,0,53.176-4.788,65.442-16.527
										C304.633,235.518,310,215.863,310,181.835v-53.669C310,98.471,309.159,78.006,297.917,64.645z M199.021,162.41l-65.038,33.991
										c-1.454,0.76-3.044,1.137-4.632,1.137c-1.798,0-3.592-0.484-5.181-1.446c-2.992-1.813-4.819-5.056-4.819-8.554v-67.764
										c0-3.492,1.822-6.732,4.808-8.546c2.987-1.814,6.702-1.938,9.801-0.328l65.038,33.772c3.309,1.718,5.387,5.134,5.392,8.861
										C204.394,157.263,202.325,160.684,199.021,162.41z"/>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								</svg>
							</div>
						</a>
						<a href="">
							<div class="soc_ico soc_ico_4">
								<svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 viewBox="0 0 315 315" style="enable-background:new 0 0 315 315;" xml:space="preserve" fill="white">
								<g id="XMLID_510_">
									<path id="XMLID_511_" d="M307.5,136.892h-19.791V117.1c0-4.143-3.357-7.5-7.5-7.5h-26.717c-4.143,0-7.5,3.357-7.5,7.5v19.792
										h-19.791c-4.143,0-7.5,3.357-7.5,7.5v26.717c0,4.143,3.357,7.5,7.5,7.5h19.791v19.792c0,4.142,3.357,7.5,7.5,7.5h26.717
										c4.143,0,7.5-3.358,7.5-7.5v-19.792H307.5c4.143,0,7.5-3.357,7.5-7.5v-26.717C315,140.249,311.643,136.892,307.5,136.892z"/>
									<path id="XMLID_512_" d="M101.906,104.16c9.088,0,17.823,2.45,25.274,7.087l8.513,5.825c2.967,2.03,6.958,1.671,9.514-0.861
										l24.828-24.596c1.589-1.574,2.392-3.774,2.191-6.001c-0.2-2.227-1.384-4.248-3.228-5.513l-14.43-9.896
										c-0.294-0.201-0.603-0.382-0.922-0.539l-13.979-6.902c-0.185-0.092-0.374-0.176-0.566-0.252
										c-12.042-4.754-24.729-7.165-37.708-7.165c-26.757,0-51.996,10.27-71.068,28.915c-19.367,18.934-30.137,44.681-30.323,72.499
										c-0.187,27.824,10.239,53.72,29.355,72.916c18.968,19.049,45.879,29.975,73.834,29.975c27.658,0,53.608-10.739,71.195-29.463
										c13.931-14.831,22.48-34.641,24.727-57.288c0.021-0.215,0.034-0.43,0.036-0.645l0.26-20.345c0.006-0.421-0.024-0.841-0.09-1.257
										l-1.09-6.953c-0.571-3.649-3.716-6.339-7.409-6.339h-86.672c-4.143,0-7.5,3.358-7.5,7.5v29.982c0,4.142,3.357,7.5,7.5,7.5h44.186
										c-2.025,4.439-5.216,9.12-9.251,13.482c-8.801,9.518-21.926,14.977-36.01,14.977c-14.383,0-28.157-5.636-37.79-15.462
										c-20.052-20.448-19.822-56.077,0.489-76.245C75.334,109.605,88.505,104.16,101.906,104.16z"/>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								</svg>
							</div>
						</a>
						<a href="">
							<div class="soc_ico soc_ico_5">
								<svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 viewBox="0 0 304.36 304.36" style="enable-background:new 0 0 304.36 304.36;" xml:space="preserve" fill="white">
								<g id="XMLID_1_">
									<path id="XMLID_807_" style="fill-rule:evenodd;clip-rule:evenodd;" d="M261.945,175.576c10.096,9.857,20.752,19.131,29.807,29.982
										c4,4.822,7.787,9.798,10.684,15.394c4.105,7.955,0.387,16.709-6.746,17.184l-44.34-0.02c-11.436,0.949-20.559-3.655-28.23-11.474
										c-6.139-6.253-11.824-12.908-17.727-19.372c-2.42-2.642-4.953-5.128-7.979-7.093c-6.053-3.929-11.307-2.726-14.766,3.587
										c-3.523,6.421-4.322,13.531-4.668,20.687c-0.475,10.441-3.631,13.186-14.119,13.664c-22.414,1.057-43.686-2.334-63.447-13.641
										c-17.422-9.968-30.932-24.04-42.691-39.971C34.828,153.482,17.295,119.395,1.537,84.353C-2.01,76.458,0.584,72.22,9.295,72.07
										c14.465-0.281,28.928-0.261,43.41-0.02c5.879,0.086,9.771,3.458,12.041,9.012c7.826,19.243,17.402,37.551,29.422,54.521
										c3.201,4.518,6.465,9.036,11.113,12.216c5.142,3.521,9.057,2.354,11.476-3.374c1.535-3.632,2.207-7.544,2.553-11.434
										c1.146-13.383,1.297-26.743-0.713-40.079c-1.234-8.323-5.922-13.711-14.227-15.286c-4.238-0.803-3.607-2.38-1.555-4.799
										c3.564-4.172,6.916-6.769,13.598-6.769h50.111c7.889,1.557,9.641,5.101,10.721,13.039l0.043,55.663
										c-0.086,3.073,1.535,12.192,7.07,14.226c4.43,1.448,7.35-2.096,10.008-4.905c11.998-12.734,20.561-27.783,28.211-43.366
										c3.395-6.852,6.314-13.968,9.143-21.078c2.096-5.276,5.385-7.872,11.328-7.757l48.229,0.043c1.43,0,2.877,0.021,4.262,0.258
										c8.127,1.385,10.354,4.881,7.844,12.817c-3.955,12.451-11.65,22.827-19.174,33.251c-8.043,11.129-16.645,21.877-24.621,33.072
										C252.26,161.544,252.842,166.697,261.945,175.576L261.945,175.576z M261.945,175.576"/>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								</svg>
							</div>
						</a>
					</div>
				</div>	
				
			
			</div>
			<div class="row" style="/*! margin-top: 36vh; */position: absolute;bottom: 0px;/*! top: 0px; *//*! left: 0px; *//*! right: 0px; */width: 100%;height: 80px;">
				<div class=""></div>
				<div class="col-12">
					<ul class="list-unstyled" style="display: block;width: 370px;margin: 0px auto;">
						<a href="">
							<li class="info_src">
								<p>Sign in</p>
							</li>
						</a>
						<a href="">
							<li class="info_src">
								<p>Partner program</p>
							</li>
						</a>
						<a href="">
							<li class="info_src">
								<p>Contact us</p>
							</li>
						</a>
						<a href="">
							<li class="info_src">
								<p>FAQ</p>
							</li>
						</a>
						<a href="">
							<li class="info_src">
								<p>About us</p>
							</li>
						</a>
					</ul>
				</div>
			</div>
			</div>
			<div class="mobile">
					<div class="row">
					<div class="text footer-text" style="font-size: 52px;">
						<h1 style="">Join us</h1>
					</div>
					</div>
					<img class="table" src="img/Blocks/Table.png" alt="">
					<a class="trigger" style="display: none;" href="#"><div id="btn-header-register" class="btn btn-blue" style=" border-radius: 5px !important;width: 215px;height: 38px;font-size: 16px !important;line-height: 9px;/*! float: right; */ margin-right: 65px;">Зарегистрироваться</div></a>
					<div class="social_mobile">
						<div class="social">

						<a href="">
							<div class="soc_ico soc_ico_1">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve" fill="white">
								<g id="XMLID_834_">
									<path id="XMLID_835_" d="M81.703,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765h39.064
										c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673h-44.996
										V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5h-40.545
										C187.467,0.023,186.832,0,185.896,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H81.703
										c-2.762,0-5,2.238-5,5v50.844C76.703,162.867,78.941,165.106,81.703,165.106z"/>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								</svg>

							</div>
						</a>
						<a href="">
							<div class="soc_ico soc_ico_2">
								<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve" fill="white">
								<g id="XMLID_826_">
									<path id="XMLID_827_" d="M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73
										c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783
										c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598
										C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467
										c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977
										c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889
										c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597
										c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961
										c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895
										c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367
										c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998
										C307.394,57.037,305.009,56.486,302.973,57.388z"/>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								</svg>
							</div>
						</a>
						<a href="">
							<div class="soc_ico soc_ico_3">
								
								<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve" fill="white">
								<g id="XMLID_822_">
									<path id="XMLID_823_" d="M297.917,64.645c-11.19-13.302-31.85-18.728-71.306-18.728H83.386c-40.359,0-61.369,5.776-72.517,19.938
										C0,79.663,0,100.008,0,128.166v53.669c0,54.551,12.896,82.248,83.386,82.248h143.226c34.216,0,53.176-4.788,65.442-16.527
										C304.633,235.518,310,215.863,310,181.835v-53.669C310,98.471,309.159,78.006,297.917,64.645z M199.021,162.41l-65.038,33.991
										c-1.454,0.76-3.044,1.137-4.632,1.137c-1.798,0-3.592-0.484-5.181-1.446c-2.992-1.813-4.819-5.056-4.819-8.554v-67.764
										c0-3.492,1.822-6.732,4.808-8.546c2.987-1.814,6.702-1.938,9.801-0.328l65.038,33.772c3.309,1.718,5.387,5.134,5.392,8.861
										C204.394,157.263,202.325,160.684,199.021,162.41z"/>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								</svg>
							</div>
						</a>
						<a href="">
							<div class="soc_ico soc_ico_4">
								<svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 viewBox="0 0 315 315" style="enable-background:new 0 0 315 315;" xml:space="preserve" fill="white">
								<g id="XMLID_510_">
									<path id="XMLID_511_" d="M307.5,136.892h-19.791V117.1c0-4.143-3.357-7.5-7.5-7.5h-26.717c-4.143,0-7.5,3.357-7.5,7.5v19.792
										h-19.791c-4.143,0-7.5,3.357-7.5,7.5v26.717c0,4.143,3.357,7.5,7.5,7.5h19.791v19.792c0,4.142,3.357,7.5,7.5,7.5h26.717
										c4.143,0,7.5-3.358,7.5-7.5v-19.792H307.5c4.143,0,7.5-3.357,7.5-7.5v-26.717C315,140.249,311.643,136.892,307.5,136.892z"/>
									<path id="XMLID_512_" d="M101.906,104.16c9.088,0,17.823,2.45,25.274,7.087l8.513,5.825c2.967,2.03,6.958,1.671,9.514-0.861
										l24.828-24.596c1.589-1.574,2.392-3.774,2.191-6.001c-0.2-2.227-1.384-4.248-3.228-5.513l-14.43-9.896
										c-0.294-0.201-0.603-0.382-0.922-0.539l-13.979-6.902c-0.185-0.092-0.374-0.176-0.566-0.252
										c-12.042-4.754-24.729-7.165-37.708-7.165c-26.757,0-51.996,10.27-71.068,28.915c-19.367,18.934-30.137,44.681-30.323,72.499
										c-0.187,27.824,10.239,53.72,29.355,72.916c18.968,19.049,45.879,29.975,73.834,29.975c27.658,0,53.608-10.739,71.195-29.463
										c13.931-14.831,22.48-34.641,24.727-57.288c0.021-0.215,0.034-0.43,0.036-0.645l0.26-20.345c0.006-0.421-0.024-0.841-0.09-1.257
										l-1.09-6.953c-0.571-3.649-3.716-6.339-7.409-6.339h-86.672c-4.143,0-7.5,3.358-7.5,7.5v29.982c0,4.142,3.357,7.5,7.5,7.5h44.186
										c-2.025,4.439-5.216,9.12-9.251,13.482c-8.801,9.518-21.926,14.977-36.01,14.977c-14.383,0-28.157-5.636-37.79-15.462
										c-20.052-20.448-19.822-56.077,0.489-76.245C75.334,109.605,88.505,104.16,101.906,104.16z"/>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								</svg>
							</div>
						</a>
						<a href="">
							<div class="soc_ico soc_ico_5">
								<svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 viewBox="0 0 304.36 304.36" style="enable-background:new 0 0 304.36 304.36;" xml:space="preserve" fill="white">
								<g id="XMLID_1_">
									<path id="XMLID_807_" style="fill-rule:evenodd;clip-rule:evenodd;" d="M261.945,175.576c10.096,9.857,20.752,19.131,29.807,29.982
										c4,4.822,7.787,9.798,10.684,15.394c4.105,7.955,0.387,16.709-6.746,17.184l-44.34-0.02c-11.436,0.949-20.559-3.655-28.23-11.474
										c-6.139-6.253-11.824-12.908-17.727-19.372c-2.42-2.642-4.953-5.128-7.979-7.093c-6.053-3.929-11.307-2.726-14.766,3.587
										c-3.523,6.421-4.322,13.531-4.668,20.687c-0.475,10.441-3.631,13.186-14.119,13.664c-22.414,1.057-43.686-2.334-63.447-13.641
										c-17.422-9.968-30.932-24.04-42.691-39.971C34.828,153.482,17.295,119.395,1.537,84.353C-2.01,76.458,0.584,72.22,9.295,72.07
										c14.465-0.281,28.928-0.261,43.41-0.02c5.879,0.086,9.771,3.458,12.041,9.012c7.826,19.243,17.402,37.551,29.422,54.521
										c3.201,4.518,6.465,9.036,11.113,12.216c5.142,3.521,9.057,2.354,11.476-3.374c1.535-3.632,2.207-7.544,2.553-11.434
										c1.146-13.383,1.297-26.743-0.713-40.079c-1.234-8.323-5.922-13.711-14.227-15.286c-4.238-0.803-3.607-2.38-1.555-4.799
										c3.564-4.172,6.916-6.769,13.598-6.769h50.111c7.889,1.557,9.641,5.101,10.721,13.039l0.043,55.663
										c-0.086,3.073,1.535,12.192,7.07,14.226c4.43,1.448,7.35-2.096,10.008-4.905c11.998-12.734,20.561-27.783,28.211-43.366
										c3.395-6.852,6.314-13.968,9.143-21.078c2.096-5.276,5.385-7.872,11.328-7.757l48.229,0.043c1.43,0,2.877,0.021,4.262,0.258
										c8.127,1.385,10.354,4.881,7.844,12.817c-3.955,12.451-11.65,22.827-19.174,33.251c-8.043,11.129-16.645,21.877-24.621,33.072
										C252.26,161.544,252.842,166.697,261.945,175.576L261.945,175.576z M261.945,175.576"/>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								</svg>
							</div>
						</a>
					</div>
					</div>
			</div>
		</div>
		
	</div>

				
		<script type="text/javascript">
		jQuery(function($){
			// bind event handlers to modal triggers
			$('body').on('click', '.trigger', function(e){
				e.preventDefault();
				$('#test-modal').modal().open();
			});

			// attach modal close handler
			$('.form-reg .close').on('click', function(e){
				e.preventDefault();
				$.modal().close();
			});
});
			
	</script>

	<script type="text/javascript">
		$('document').ready(function() {

    // Начальное состояние
    my_func();

    	function my_func() {
        /**
         * Считываем значение из CSS
         */
        var browserMinWidth = parseInt($('head').css('min-width'), 10);

        if (browserMinWidth > 1200) {


		$(document).ready(function(){
  			$('.category_1').show(500);
  			$('.category_2').delay(500).show(500);
  			$('.category_3').delay(1000).show(500);
  			$('.category_4').delay(1500).show(500);
  			$('.category_5').delay(2000).show(500);
  			$('.category_6').delay(2500).show(500);
});

		

		

		

		

		
		

	}
	else{

	}
    }
});



		
	</script>


</body>
</html>