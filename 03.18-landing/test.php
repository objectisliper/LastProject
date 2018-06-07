<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./Fading Effect Extension - fullPage.js_files/jquery.fullPage.css">
	<link rel="stylesheet" type="text/css" href="./Fading Effect Extension - fullPage.js_files/examples.css">
	<script src="./Fading Effect Extension - fullPage.js_files/jquery.min.js"></script>

	<script type="text/javascript" src="./Fading Effect Extension - fullPage.js_files/jquery.easings.min.js"></script>

	<script type="text/javascript" src="./Fading Effect Extension - fullPage.js_files/fullpage.fadingEffect.limited.min.js"></script>
	<script type="text/javascript" src="./Fading Effect Extension - fullPage.js_files/jquery.fullpage.extensions.min.js"></script>
	<script type="text/javascript">


		$(document).ready(function() {
			$('#myContainer').fullpage({
				sectionsColor: ['#61bd6d', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff', '#ccc'],
				anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage'],
				menu: '#menu',
				slidesNavigation: true,
				fadingEffect: true,
				fadingEffectKey: 'YWx2YXJvdHJpZ28uY29tXzAzN1ptRmthVzVuUldabVpXTjBiNXo='
			});

			$('#turnOn').click(function(){
				$.fn.fullpage.fadingEffect.turnOn();
			});

			$('#turnOff').click(function(){
				$.fn.fullpage.fadingEffect.turnOff();
			});

		});

		

	</script>

	<style>
		#actions{
			position:fixed;
			top: 73px;
			left: 30px;
			z-index: 99999;
		}
		#actions li{
			background: rgba(0,0,0,0.8);
			padding: 7px;
			margin: 2px;
			color: #ccc;
			display: inline-block;
			cursor: pointer;
		}
		#actions li:hover{
			color: #fff;
			background: #81A140;
		}
	</style>

	<style id="fp-fading-sheet">.fp-section{width: 100% !important;position: absolute;left: 0;top: 0;visibility: hidden;opacity: 0;}.fp-section.active{visibility: visible;opacity: 1;}.fp-slidesContainer {width: 100% !important;transform: none!important;}.fp-slide{width: 100% !important;position: absolute;left: 0;top: 0;visibility: hidden;opacity: 0;}.fp-slide.active{visibility: visible;opacity: 1;}</style><style id="fp-fading-animations">.fp-slide{-webkit-transition: all 700ms ease;transition: all 700ms ease;}.fp-section{-webkit-transition: all 700ms ease;transition: all 700ms ease;}</style>
</head>
<body>
<div id="myContainer" class="fullpage-wrapper" style="height: 100%; position: relative; touch-action: none; transform: translate3d(0px, 0px, 0px); transition: all 700ms ease;">
	<div class="section fp-section" data-anchor="firstPage" style="height: 916px; background-color: rgb(97, 189, 109);"></div>
	<div class="section fp-section"  data-anchor="secondPage" style="height: 916px; background-color: rgb(75, 191, 195);"></div>
	<div class="section fp-section" data-anchor="3rdPage"></div>
	<div class="section fp-section" data-anchor="4thPage"></div>
</div>
</body>
</html>