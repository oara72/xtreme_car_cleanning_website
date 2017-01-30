<?php require_once('formvars.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Extreme Car Cleaning</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="_css/reset.css">
	<link rel="stylesheet" media="screen" href="_css/magnific-popup.css">
    <link rel="stylesheet" media="screen" href="_css/styles.css">
	<link rel="stylesheet" media="screen and (max-device-height:540px) and (max-device-width:360px)"  href="_css/small.css">
    <link rel="stylesheet" href="_css/modal-window.css">
    <link rel="stylesheet" href="_css/legal.css">
</head>
<body>
    <div id="page">
			<header>

 
                <video poster="images/headerVideoPlace.png" autoplay loop>

                    <source src="_video/ECCHeader.mp4" type="video/mp4">
                    <source src="_video/ECCHeader.webm" type="video/webm">
                </video>
			<a href="http://ExtremeCarCleaning.com" class="logo" title="Extreme Car Cleaning"><span>Extreme Car Cleaning</span></a>
			<div class="hero">
			    <h1>Get the EXTREME clean</h1>
			    <a href="#" title="See How" id="how" class="btn">See How</a>
			</div>
			</header>
			<section class="main">
                <section class="doc">
                    <h3>Extreme Car Cleaning</h3>
                    <h4>Terms and Condition</h4>
                    <p>In General Extreme Car Cleaning (ECC) www.extremecarcleaning.com owns and operate this Website. This document governs your relationship with www.extremecarcleaning.com. Access to and use of this Website and the products and services available through this Website (collectively, the "Services") are subject to the following terms, conditions, and notices (the "Terms of Service"). By using the Services, you are agreeing to all of the Terms of Service, as may be updated us from time to time. You should check this page regularly to take notice of any changes we may have made to the Terms of Service.</p>
                    <p>Access to this Website is permitted on a temporary basis, and we reserve the right to withdraw or amend the Services without notice. We will not be liable if for any reason this Website is unavailable at any time or for any period. From time to time, we may restrict access to some parts or all of this Website. This Website may contain links to other websites (the "Linked Sites"), which are not operated by www.extremecarcleaning.com has no control over the Linked Siutes and accepts no responsibility for them or for any loss or damage that may arise from your use of them. Your use the Linked Sites will be subject to the terms of use and service contained within each such site</p>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
                       <label for="email">Email: 
                        <input type="email" name="email">
                        </label>
                        <label for="message">Comment: </label>
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                        <input type="submit" name="submit" Value="Send">
                    </form>
                    <?php
                        
                        if (isset($_POST['submit'])) {
                            
                            
                        $subject = "Terms and Condition Message for ECC";
                        
                        $message = "\n reply e-mail: $email_from";
                        
                        mail ($to, $subject, $message, "From: " . $email_from);
                        echo "<p>Your message has been sent</p>";
                        }
                    ?>
                </section>
			    <section class="seehow">
			        <h3>How To Order</h3>
			        <p>To order a package just navigate to the packages selection. Select a package and fill out the form. After we recieve the order we will contact you to get the best time for an appointment.</p>
			    </section>
            </section>
			<nav>
				<ul>
					<li>
					    <a href="index.html" title="Home">Home</a>
					</li>
					<li>

					    <a href="#" title="Packages" aria-haspopup="true" id="navPacks">Packages</a>


					    <ul>
					        <li>
					            <a href="#" title="Platinum">Platinum</a>
					        </li>
					        <li>
					            <a href="#" title="Gold">Gold</a>
					        </li>
					        <li>
					           <a href="#" title="Silver">Silver</a>
					        </li>
					        <li>
					            <a href="#" title="Bronze">Bronze</a>
					        </li>
					    </ul>
					</li>
					<li>
					   <a href="pp.html" title="Personal Care">Personal Care</a>
					</li>
					<li>
					    <a href="contact.php" title="Contact Us">Contact Us</a>
					</li>
				</ul>
			</nav>
			 	<footer>
			 	<div id="copy">
			 		<p>Copyright&copy; 2016 ExtremeCarCleaning.com</p> 				
			 	</div> 				
			 	    <div class="hero"> 				    
			 	    <a href="pp.php" title="Privacy Policy">Privacy Policy</a> 				    
			 	    <a href="tos.php" title="Terms of Service">Terms of Service</a> 				
			     </div> 			
			 </footer>
    </div>
	
	<div id="orderformplat" class="mfp-hide">
		<h3>Platinum Pack Order</h3>
		<form action="order.php" method="post" class="orderform">
           <input type="text" name="package" value="Platinum Package" class="hideInput">
            <label for="name">Name: </label><input type="name" name="name" required>
            <label for="email">Email: </label><input type="email" name="email" required>
            <label for="telephone">Phone: </label><input type="phone" name="telephone" required>
            <label for="make">Make: </label>
            <input type="text" name="make"  required>
            <label for="model">Model: </label>
            <input type="text" name="model" required><br />
            <label for="submit"><input type="submit" name="submit" value="Order" class="btn"></label>
		</form>
	</div>
	
	<div id="orderformgold" class="mfp-hide">
		<h3>Gold Pack Order</h3>
		<form action="order.php" method="post" class="orderform">
           <input type="text" name="package" value="Platinum Package" class="hideInput">
            <label for="name">Name: </label><input type="name" name="name" required>
            <label for="email">Email: </label><input type="email" name="email" required>
            <label for="telephone">Phone: </label><input type="phone" name="telephone" required>
            <label for="make">Make: </label>
            <input type="text" name="make" required>
            <label for="model">Model: </label>
            <input type="text" name="model required"><br />
            <label for="submit"><input type="submit" name="submit" value="Order" class="btn"></label>
		</form>
		
	</div>
	
	<div id="orderformsilv" class="mfp-hide">
		<h3>Silver Pack Order</h3>
		<form action="order.php" method="post" class="orderform">
           <input type="text" name="package" value="Platinum Package" class="hideInput">
            <label for="name">Name: </label><input type="name" name="name" required>
            <label for="email">Email: </label><input type="email" name="email" required>
            <label for="telephone">Phone: </label><input type="phone" name="telephone" required>
            <label for="make">Make: </label>
            <input type="text" name="make" required>
            <label for="model">Model: </label>
            <input type="text" name="model" required><br />
            <label for="submit"><input type="submit" name="submit" value="Order" class="btn"></label>
		</form>
		
	</div>
	
	<div id="orderformbronze" class="mfp-hide">
		<h3>Bronze Pack Order</h3>
		<form action="order.php" method="post" class="orderform">
           <input type="text" name="package" value="Platinum Package" class="hideInput">
            <label for="name">Name: </label><input type="name" name="name" required>
            <label for="email">Email: </label><input type="email" name="email" required>
            <label for="telephone">Phone: </label><input type="phone" name="telephone" required>
            <label for="make">Make: </label>
            <input type="text" name="make" required>
            <label for="model">Model: </label>
            <input type="text" name="model" required><br />
            <label for="submit"><input type="submit" name="submit" value="Order" class="btn"></label>
		</form>
		
	</div>
	
	<script src="_js/jquery.min.js"></script>
	<script src="_js/modal-init.js"></script>
	<script src="_js/modal-window.js"></script>
	<script src="_js/magnificPopup.js"></script>
	<script>

					
					//modals and window size stuff
					//vars to get window size
					var winHeight=$( window ).height();
					var winWidth=$( window ).width();
					
					//sets modals as per window size
					if (winHeight <= 540 && (winWidth <=360)){
						$("#navPerCare").addClass("open-popup-Care");
						$("#navPacks").addClass("open-popup-Packs")
						//modals for small
					$(".open-popup-Packs").magnificPopup({
						items: [
						{
							src: $('#PlatPack').addClass("white-popup"), 
							type: 'inline'
							
						},
						{
							src: $('#GoldPack').addClass("white-popup"), 
							type: 'inline'
						},
						{
							src:$( '#SilvPack').addClass("white-popup"), 
							type: 'inline'
						},
						{
							src: $('#BroPack').addClass("white-popup"), 
							type: 'inline'
						}],
						
						preloader:"false",
						disableOn:0,
						gallery: {
							enabled: true,
						},
						 closeOnBgClick :true, 
						showCloseBtn : true, 
						enableEscapeKey : false,
					});
					
					}
					//if (winHeight > 540 && (winWidth > 360))
					else {
						$('#NavPlat').addClass("open-popup-Plat");
						$('#NavGold').addClass("open-popup-Gold");
						$('#NavSilver').addClass("open-popup-Silver");
						$('#NavBronze').addClass("open-popup-Bronze");
						$(".open-popup-Plat").attr("href", "#PlatPack");
						$(".open-popup-Gold").attr("href", "#GoldPack");
						$(".open-popup-Silver").attr("href", "#SilvPack");
						$(".open-popup-Bronze").attr("href", "#BroPack");
						$("#PlatPack").addClass("mfp-hide");
						$("#GoldPack").addClass("mfp-hide");
						$("#SilvPack").addClass("mfp-hide");
						$("#BroPack").addClass("mfp-hide");
						//modal for mid
						$(".open-popup-Plat").magnificPopup({
							items: [
						{
							src: $('#PlatPack'), 
							type: 'inline'
							
						},
						{
							src: $('#GoldPack'), 
							type: 'inline'
						},
						{
							src:$( '#SilvPack'), 
							type: 'inline'
						},
						{
							src: $('#BroPack'), 
							type: 'inline'
						}],
						
						preloader:"false",
						disableOn:0,
						gallery: {
							enabled: true,
						},
						 closeOnBgClick :true, 
						showCloseBtn : true, 
						enableEscapeKey : false,
					});
						$(".open-popup-Gold").magnificPopup({
						items: [
						{
							src: $('#GoldPack'), 
							type: 'inline'
						},
						{
							src:$( '#SilvPack'), 
							type: 'inline'
						},
						{
							src: $('#BroPack'), 
							type: 'inline'
						},
						{
							src: $('#PlatPack'), 
							type: 'inline'
						}],
						
						preloader:"false",
						disableOn:0,
						gallery: {
							enabled: true,
						},
						 closeOnBgClick :true, 
						showCloseBtn : true, 
						enableEscapeKey : false,
					});
						$(".open-popup-Silver").magnificPopup({
							items: [
						{
							src:$( '#SilvPack'), 
							type: 'inline'
						},
						{
							src: $('#BroPack'), 
							type: 'inline'
						},
						{
							src: $('#PlatPack'), 
							type: 'inline'
						},
						{
							src: $('#GoldPack'), 
							type: 'inline'
						}],
						
						preloader:"false",
						disableOn:0,
						gallery: {
							enabled: true,
						},
						 closeOnBgClick :true, 
						showCloseBtn : true, 
						enableEscapeKey : false,
						});
						$(".open-popup-Bronze").magnificPopup({
								items: [
						{
							src: $('#BroPack'), 
							type: 'inline'
						},
						{
							src:$( '#SilvPack'), 
							type: 'inline'
						},
						{
							src: $('#GoldPack'), 
							type: 'inline'
							
						},
						{
							src: $('#PlatPack'), 
							type: 'inline'
						}],
						
						preloader:"false",
						disableOn:0,
						gallery: {
							enabled: true,
						},
						 closeOnBgClick :true, 
						showCloseBtn : true, 
						enableEscapeKey : false,
						});
					};
					
					$('#orderplat').magnificPopup({
						items:{
							src: $('#orderformplat').addClass("PlatPack"),
							type: 'inline'
						}
						
					});
					
					$('#ordergold').magnificPopup({
						items:{
							src: $('#orderformgold').addClass("GoldPack"),
							type: 'inline'
						}
					});
					
					$('#ordersilv').magnificPopup({
						items:{
							src: $('#orderformsilv').addClass("SilvPack"),
							type: 'inline'
						}
					});
					
					$('#orderbronze').magnificPopup({
						items:{
							src: $('#orderformbronze').addClass("BroPack"),
							type: 'inline'
						}
					});
				
					
					
					
</script>
	</body>
</html>