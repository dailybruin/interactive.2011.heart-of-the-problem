<!doctype html>
<html>

<head>
	<title>Heart of the Problem | Daily Bruin</title>
	
	<link rel="stylesheet" type="text/css" href="include/css/reset.css" />

	<meta name="title" content="Heart of the Problem | Daily Bruin" />
	<meta name="description" content="This year, Sean Greene and Morgan Glier spent 12 days in Vietnam with the group Medical, Educational Missiona and Outreach to tell the stories of the volunteers and those they help." />
	<link rel="image_src" href="http://vietnam.dailybruin.com/content/part1/web.bob.10.17.scholarship.picA.jpg" />

	
	<?php
		$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
		$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
		$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
		$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
		if(!($iphone != "" || $android != "" || $palmpre != "" || $ipod != "")) {
			//computer
		?>	
			<link rel="stylesheet" type="text/css" media="screen" href="include/css/style.css" />

		
			<link rel="stylesheet" type="text/css" href="include/js/jquery.jscrollpane.css" />
			<link rel="stylesheet" type="text/css" href="include/js/jquery.jscrollpane.lozenge.css" />
			<link rel="stylesheet" type="text/css" href="include/css/nivo-slider.css" />
			<link rel="stylesheet" type="text/css" href="include/css/nivo-default.css" />
			<link rel="stylesheet" type="text/css" href="include/css/fancybox.css" />


			
			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
			<script type="text/javascript" src="include/js/jquery.jscrollpane.min.js"></script>
			<script type="text/javascript" src="include/js/jquery.mousewheel.js"></script>
			<script type="text/javascript" src="include/js/mwheelIntent.js"></script>
			<script type="text/javascript" src="include/js/jquery.kwicks-1.5.1.js"></script>
			<script type="text/javascript" src="include/js/jquery.nivo.slider.pack.js"></script>

		<?php } 
		else {
			//phone
		?>
			<link rel="stylesheet" type="text/css" href="include/js/mobile.css" />
			<meta name="viewport" content="width = 320">

		<?php }?>
	

	
	
	<script type="text/javascript">
		$(document).ready(function()
		{
		    $('#imageSlider').nivoSlider({
		    	effect:'fade',
		    	manualAdvance: true,
		    	controlNav: false,
		    	animSpeed: 100
		    });
			<?php if(!($part == 'intro')) {  ?>
				$('.scroll-pane').jScrollPane({
					showArrows: false,
				});
			<?php  } ?>
			
   			 $('.kwicks').kwicks({  
    		    max : 350,  
      		 	 spacing : 5 ,
      		 	 sticky:true,
      		 	 defaultKwick:<?php if($story == 'school' || $story == 'hospital' || $story == 'hue' || $story == '') echo '0'; elseif($story == 'service' || $story == 'orphanage' || $story == 'morgan') echo '1'; elseif($story == 'house' || $story == 'audio' || $story == 'sean') echo '2'; else echo '0';?>
   			});  
		});  
		
		
  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=72296391616";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
		
		
	<?php
		if ($part == 'timeline')
		{?>
			<style type="text/css">
				#centercol {
					height:750px !important;
				}
			</style>
	<?php }
	
	if ($part == 'intro') { ?>
		<style type="text/css">
			#centercol {
				overflow:hidden !important;
			}
		</style>
	<?php } ?>


<!--[if lt IE 9]>

   <style type="text/css">

   #centercol, div#bottom {
       background:transparent;
       filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#CCDCDCDC,endColorstr=#CCDCDCDC);
       zoom: 1;
    } 

    </style>

<![endif]-->

	
	<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {parsetags: 'explicit'}
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28181852-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>	
</head>

<body>
	<h1><a href="http://dailybruin.com"><img id="dblogo" src="include/img/dbflag_400.png" /></a><a href="/" style="color:white; text-decoration:none"> | heart of the problem</h1></a>
	<div id="leftcol">
		<ul id="leftnav">
			<li class="<?php if($part == 'timeline') echo "currenttimeline"; else echo "timeline"; ?>"><a href="?part=timeline">TIMELINE >></a></li>
			<li class="left1"><a href="?part=one&story=school"><span <?php if($part == 'one') echo 'class="current"';?>>Part one</span></a></li>
			<li class="left2"><a href="?part=two&story=hospital"><span <?php if($part == 'two') echo 'class="current"';?>>Part two</span>
				<div id="later2">
					Part 2 available<br />on Tuesday
				</div>
			</a></li>
			<li class="left3"><a href="?part=three&story=hue"><span <?php if($part == 'three') echo 'class="current"';?>>Part three</span>
				<div id="later3">
					Part 3 available<br />on Wednesday
				</div>
			</a></li>
		</ul>
	</div> <!-- End leftcol -->
	
	<div id="centercol" class="scroll-pane">
