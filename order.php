<?php
require_once('formvars.php');
?>

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
    <link rel="stylesheet" href="_css/order.css">
    <link rel="stylesheet" href="_css/modal-window.css">
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
			</section>
			<section class="packages">
			    <aside>
			        <div class="content platinum" id="PlatPack">
					<h3><a href="#" alt="Platinum Package">Platinum Package</a></h3>
					<p>Starting at $200 for Mid-Size Cars </p>
					<p>Complete Exterior Wash - 
						Remove Bugs, Tree Sap, Road Tar, Remove Brake Dust and Fallout,  Apply Paint Sealant to Protect all Paint Finishes and Wax With MOTHER'S Liquid GOLD, Clean Tires and Rims.
						Complete Interior Steam Extraction. High Pressure Chemical Gun, Clean and Disinfect all Trim Panels, Clean all Windows, and Clean Headliner.
						</p>
                        <a href="#" class="btn" id="orderplat">Order Package</a>
			        </div>
			    </aside>
			    <aside>
			        <div class="content gold" id="GoldPack">
					<h3><a href="#" alt="Gold Package">Gold Package</a></h3>
					<p>Starting at $175 for Mid-Size Cars </p>
					<p>Complete Exterior Wash - Remove Bugs, Tree Sap, Road Tar, Remove Brake Dust and Fallout,  Clean Tires and Rims.
						Complete Interior Steam Extraction. High Pressure Chemical Gun, Clean and Disinfect all Trim Panels, 
						Clean all Windows, and Clean Headliner.
						</p>
                        <a href="#" class="btn" id="ordergold">Order Package</a>
			        </div>
			    </aside>
			    <aside>
			        <div class="content silver" id="SilvPack">
					<h3><a href="#" alt="Silver Package">Silver Package</a></h3>
					<p>Starting at $100 for Mid-Size Cars </p>
					<p>Complete Exterior Wash - Remove Bugs, Tree Sap, Road Tar, Remove Brake Dust and Fallout, 
					Wax With MOTHER'S Liquid GOLD, Clean Tires and Rims.
						Interior Vacuum, Wipe and Dust Dash, and Clean Windows
						</p>
                        <a href="#" class="btn" id="ordersilv">Order Package</a>
			        </div>
			    </aside>
			    <aside>
			        <div class="content bronze" id="BroPack">
					<h3><a href="#" alt="Bronze Package">Bronze Package</a></h3>
					<p>Starting at $75 for Mid-Size Cars </p>
					<p>Complete Exterior Wash - Remove Bugs, Tree Sap, Road Tar, Remove Brake Dust and Fallout,  Clean Tires and Rims.
						Interior Vacuum, Wipe and Dust Dash, and Clean Windows
						</p>
                        <a href="#" class="btn" id="orderbronze">Order Package</a>
			        </div>
			    </aside>
			</section>
			<section class="confirm">

<?php

if (isset($_POST['submit'])) {
    
    Echo "<h3>Order Confirmation</h3>";
        echo "<h4>You have ordered the " . $_POST['package'] . "</h4>" .
            "<p>Name: " . $name . "</p>" .
            "<p>Email: " . $email_from . "</p>" .
            "<p>Phone: " . $telephone . "</p>".
            "<p>For your " . $make . " " . $model . "</p>";
                            
                            
        $subject = "Customer Order From ECC";
                        
        $message =  "\n" . $name .
                "\n" . $telephone .
                "\n Ordered the " . $_POST['package'] .
                " for their " . $make . " " . $model .
                "\n reply e-mail: $email_from";
                        
        mail ($to, $subject, $message, "From: " . $email_from);
        
        echo "We will contact you shortly about your order. We thank you for your business.";
       
}

?>

</section>
<nav>
				<ul>
					<li>
					    <a href="index.html" title="Home">Home</a>
					</li>
					<li>
					    <a href="#" title="Packages" aria-haspopup="true" id="navPacks">Packages</a>
					    <ul >
					        <li>
					            <a href="#" title="Platinum" id="NavPlat">Platinum</a>
					        </li>
					        <li>
					            <a href="#" title="Gold" id="NavGold">Gold</a>
					        </li>
					        <li>
					           <a href="#" title="Silver" id="NavSilver">Silver</a>
					        </li>
					        <li>
					            <a href="#" title="Bronze" id="NavBronze">Bronze</a>
					        </li>
					    </ul>
					</li>
					<li>
					   <a href="care.html" title="Personal Care">Personal Care</a>
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
	<script src="_js/slider.js"></script>
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