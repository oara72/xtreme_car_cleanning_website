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
                    <h4>Personal Information Protection Policy</h4>
                    <p>This privacy policy discloses the privacy practices for Extreme Car Cleaning (ECC). This privacy policy applies solely to information collected by this web site. It will notify you of the following:</p>
                    <p><ol>
                        <li>What personally identifiable information is collected from you through the web site, how it is used and with whom it may be shared</li>
                        <li>What choices are available to you regarding the use of your data</li>
                        <li>the security procedures in place ot protect the misuse of your information</li>
                        <li>How you can correct any inaccuracies in the information</li>
                    </ol></p>
                    <h5>Information Collection, Use, and Sharing</h5>
                    <p>We are the sole owners of the information collected on this stie. We only have acces to/collect information that you voluntarily give us via email or other direct contact from you. We will not sell or rent this information to anyone.</p>
                    <p>We will use your information to respond to you regarding the reason you contacted us. We will not share your information with any third party outside of our organization, other thna as necessary to fulfill your request, e.g. to ship an order.</p>
                    <p>Unless you ask us not to, we may contact you via email in  the future to tell you about specials, new products or services, or changes to this privacy policy.</p>
                    <h5>Your Access to and Control Over Information</h5>
                    <p>You may opt out of any future contacts from us at any time. You can do the following at any time by contacting us via the email address or phone number given on our website:</p>
                    <p><ul>
                        <li>See what data we have about you, if any.</li>
                        <li>Change/correct any data we have about you.</li>
                        <li>Have us delete any data we have about you.</li>
                        <li>Express any concern you have about our use of your data.</li>
                    </ul></p>
                    <h5>Security</h5>
                    <p>We take precautions to protect your information. When you submit sensitive information via the website your information is protected both online and offline.</p>
                    <p>Wherever we collect sensitive information (such as credit card data), that information is encrypted and transmitted to us in a secure way. You can verify this by looking for a closed lock icon at the bottom of your web browser, or looking for "https" at the beginning of the address of the web page.</p>
                    <p>While we use encryption to prtect sensitive information transmitted online, we also protect yhour information offline. Only employees who need the information information to perfomr a specific job (for example, billing or customer service) are granted access to personally identifiable information. The computers/servers in which we store personally identifiable information are kept in a secure environment.</p>
                    <h5>Updates</h5>
                    <p>Our Privacy Policy may change from time to time and all updates will be posted on this page.</p>
                    <p>If you feel that we are not abiding by this privacy policy, you should contact us immediately via the contact form below:</p>
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
                            
                            
                        $subject = "Privacy Policy Message for ECC";
                        
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