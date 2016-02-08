<link rel="stylesheet" href="<?php echo base_url();?>css/flexi-background.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo base_url();?>css/ml-coming-soon.css" type="text/css" media="screen" />
	<script type="text/javascript">
	// MediaLoot jQuery Countdown Timer
	// Description: Allows you to choose which unit of time from which to countdown and allows you to style each unit of time separately.
	// Author: Natalie Hipp | MediaLoot.com
	// URL: http://medialoot.com/item/
	
	$(document).ready(function() {
			
		function mlCountdown() {
		// Step 1: Make sure to call jQuery in your <head>
		// Step 2: Fill in the following two variables
			var eventTime = '<?php echo $countdown_timer; ?>'; // Unix Event Time - Get your stamp from http://www.unixtimestamp.com/index.php
			
			var startFrom = 'D'; // Adjust from which time unit you'd like to countdown: Use D for days, H for hours, M for minutes, or S for seconds.
			
		// Step 3: Add some spans in your HTML
		/* Each Unit of time is displayed independently so that you can style them differently. 
		
		Create <span>'s for each unit of time. Each span must have the class "ml-countdown" and then add the appropriate following classes for what you'd like to display: "days", "hours", "minutes", & "seconds". 
		
		For example, to display the number of days remaining, add this: <span class="ml-countdown days"></span>
		*/
			
		// We'll take it from here
			var currentTime = Math.round(new Date().getTime() / 1000); // Grabs current time in seconds
			var timeLeft = eventTime - currentTime;		
			 
			// Calculate numbers based on what kind of time they want to count from
			if (startFrom == 'S') {
				var scLeft = Math.floor(timeLeft);
				
				$(".ml-countdown.seconds").html(scLeft);
			}
			else if (startFrom == 'M') {
				var minLeft = Math.floor(timeLeft / 60);
				var scLeft1 = timeLeft - (minLeft * 60); // number of whole minutes
				var scLeft = Math.floor(scLeft1);
				
				$(".ml-countdown.minutes").html(minLeft);
				$(".ml-countdown.seconds").html(scLeft);
			}
			else if (startFrom == 'H') {
				var hrLeft = Math.floor(timeLeft / 60 / 60);
				var minLeft1 = hrLeft * 60 * 60; // number of whole hours
				var minLeft2 = timeLeft - minLeft1;
				var minLeft = Math.floor(minLeft2 / 60);
				var scLeft1 = minLeft * 60; //number of whole minutes
				var scLeft2 = timeLeft - minLeft1 - scLeft1;
				var scLeft = Math.floor(scLeft2);
				
				$(".ml-countdown.hours").html(hrLeft);
				$(".ml-countdown.minutes").html(minLeft);
				$(".ml-countdown.seconds").html(scLeft);
			}
			// Otherwise, default as if counting from days
			else {
				var dayLeft = Math.floor(timeLeft / 60 / 60 / 24);
				var hrLeft1 = dayLeft * 24 * 60 * 60; // days left in seconds
				var hrLeft2 = timeLeft - hrLeft1;
				var hrLeft = Math.floor(hrLeft2 / 60 / 60);
				var minLeft1 = hrLeft * 60 * 60; // hours left in seconds
				var minLeft2 = timeLeft - hrLeft1 - minLeft1;
				var minLeft = Math.floor(minLeft2 / 60);
				var scLeft1 = minLeft * 60; // minutes left in seconds
				var scLeft2 = timeLeft - hrLeft1 - minLeft1 - scLeft1;
				var scLeft = Math.floor(scLeft2);
				
				
				$(".ml-countdown.days").html(dayLeft);
				$(".ml-countdown.hours").html(hrLeft);
				$(".ml-countdown.minutes").html(minLeft);
				$(".ml-countdown.seconds").html(scLeft);
			}
		}
		
		window.onload=mlCountdown;
		window.setInterval( mlCountdown, 1000);
			
	});
	</script>
</head>
<body>
	<script src="<?php echo base_url();?>js/flexi-background.js" type="text/javascript" charset="utf-8"></script>
	<header>	<div class="logo"><img src="http://media-church.ru/images/logo2.png" /></div>
		<div class="wrapper">
	
			<ul class="countdown">
				<li><span class="ml-countdown days"></span>Дней</li>
				<li><span class="ml-countdown hours"></span>Часов</li>
				<li><span class="ml-countdown minutes"></span>Мин</li>
				<li><span class="ml-countdown seconds"></span>Сек</li>
			</ul>
		</div>
	</header>
	<div class="wrapper">
		<h2><?php echo $page_title; ?></h2>
		<p><?php echo $countdown_descript; ?></p>
		<div class="connect">
			<form action="<?php echo base_url();?>subscribe" method="post" name="sms_form" id="sms_form">
			<input type="hidden" name="huk" value="gohomeyanki"><input type="hidden" name="action" value="sms">
			<input type="text" name="message" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Email Address':this.value;" value="Email Address" class="main-color-text"  />
				<input type="submit" class="btn btn-primary" value="Записаться" /><br style="clear: both;" />
			</form>
			 <ul class="posts">
      </ul>
			<ul>
				<li class="facebook"><a href="https://www.facebook.com/svetlana.krylova.182">Facebook</a></li>
				<li class="twitter"><a href="https://twitter.com/mediacerkov">Twitter</a></li>
				<li class="google"><a href="https://plus.google.com/u/0/101634318650546560035">Google</a></li>
				<li class="sharethis"><a href="http://www.media-church.ru">ShareThis</a></li>
			</ul>
		</div>
	</div>
	  <script type="text/javascript"> 
 $(".button").click(function(event){ 
 $("a.button").removeClass("active"); 
 $(this).addClass("active"); }) </script> 
	<script type="text/javascript" src="<?php echo base_url();?>js/form.js"></script> 

