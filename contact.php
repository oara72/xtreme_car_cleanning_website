<?php
    require_once('formvars.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <title>Rjp Detail Pros</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="_css/reset.css">
   <link rel="stylesheet" media="screen" href="_css/styles.css">
	<link rel="stylesheet" media="screen" href="_css/magnific-popup.css">
    <link rel="stylesheet" href="_css/contact.css">
    <link rel="stylesheet" href="_css/modal-window.css">
    
    
</head>
<body>
            
            
   <div id="page">
            <header>
            <a href="http://extremecarcleaning.com" class="logo" title="Extreme Car Cleaning"><span>Extreme Car Cleaning</span></a>
            <div class="hero">
                <h1>Get the EXTREME clean</h1>
                <a href="#" title="See How" class="btn">See How</a>
            </div>
            </header>
            
            <section class="contact">
            <h2>Contact Information</h2>
            <fieldset>
               <article id="cont">
                <section id="dark">
                    
                    <?php
                        if(isset($_POST['submit'])) {
                            
						
						$subject = "Contact Page Message for ECC";
                       
                       $message = "\n reply e-mail: $email_from \n" .
                           "Comment: " . $comments;
                            
                            
                        
                           mail ($to, $subject, $message, "From: " . $email_from);
                           
                           echo "<h4>Email has been sent. Extreme Car Cleaning thanks you for your input.</h4>";
                       }else{     
                    ?>
					
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <fieldset>
                            <p><label class="field" for="name">Full Name: </label>
                            <input type="text" id="name" name="name" /></p>
                            
                            <p><label class="field" for="phone">Phone Number: </label>
                            <input type="text" id="telephone" name="telephone" /></p>
                            
                            <p><label class="field" for="email">E-mail: </label>
                            <input type="text" id="email" name="email" /></p>
                        </fieldset>
                        <p>
                        <label class="field" id="mess" for="comments">Message: </label>
                        <textarea id="textarea" name="comments" cols="45" rows="15"></textarea></p>
                        
                        <input type="submit" name="submit" value="Send" />
                        
                    </form>
                    <?php } ?>
                </section>
            </article>
            </fieldset>
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
			<section class="howto">
                <aside>
                    <div class="content trending">
                       <h3><a href="#">What&apos;s trending</a></h3>
			            <a class="twitter-timeline" href="https://twitter.com/MothersPolish" data-widget-id="704081106149060609">Tweets by @MothersPolish</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> 
                    </div>
                </aside>
                <aside>
                    <div class="content find-it">
                        <h3><a href="#">Where to find it</a></h3>
			            <p>Extreme Car Cleaning is located at 12049 Cranbrook Cres, Tecumseh, Ontario</p>
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2952.031479604666!2d-82.88280468454631!3d42.277851379192334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883ad5bc712370e7%3A0x4c2a18a070a11214!2s12049+Cranbrook+Crescent%2C+Tecumseh%2C+ON+N8N+2M1!5e0!3m2!1sen!2sca!4v1459868579643" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </aside>
                <aside>
                    <div class="content tools">
                        <h3><a href="http://www.mothers.com" alt="Mothers">Tools of the trade</a></h3>
			            <p><a href="http://www.mothers.com" alt="Mothers">Mothers</a>® shares your passion for cool cars starting over 30 years ago with a little tin of polish. Today, the Mothers® line has grown from that single item to a comprehensive line of more than 40 different car care products..</p>
                    </div>
                </aside>
			    
			</section>
			<section class="seehow">
			    <h3>How To Order</h3>
			    <p>To order a package just navigate to the packages selection. Select a package and fill out the form. After we recieve the order we will contact you to get the best time for an appointment.</p>
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