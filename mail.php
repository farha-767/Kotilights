
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contact</title>
		<!-- custom-theme -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="kotilights" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
		<!--animate-->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
	
		<!--//end-animate-->
		<script src="js/responsiveslides.min.js"></script>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
		<!-- js -->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	
		<!-- //js -->
		<!-- font-awesome-icons -->
		<link href="css/font-awesome.css" rel="stylesheet">
		<!-- //font-awesome-icons -->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<link href="/images/favicon-32x32.png" rel="shortcut icon" type="image/x-icon" />
		<link href="/images/android-chrome-192x192.png" rel="shortcut icon" type="image/x-icon" />
		<link href="/images/apple-touch-icon.png" rel="apple-touch-icon" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"
			integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q=="
			crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	</head>
	
<body>
<?php
if (!empty($_POST["send"])) {
    $userName = $_POST["userName"];
    $userEmail = $_POST["userEmail"];
    $userPhone = $_POST["userPhone"];
    $userMessage = $_POST["userMessage"];
    $toEmail = "kotilights@gmail.com";

    $subject = "Kotilights - " . $userName;

    $message = "
        <html>
        <head>
        <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        </style>
        </head>
        <body>
        <h2>Contact Form Submission</h2>
        <table>
            <tr>
                <th>Name</th>
                <td>$userName</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>$userEmail</td>
            </tr>
            <tr>
                <th>Contact Number</th>
                <td>$userPhone</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>$userMessage</td>
            </tr>
        </table>
        </body>
        </html>
    ";


    // Set headers for HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    if (mail($toEmail, $subject, $message, $headers)) {
        $response = "Thanks for your inquiry. We will contact you shortly.";
    } else {
        $response = "Error sending email. Please try again later.";
    }
}
?>



	<nav class="nav">
        <div class="container-fluid" style="--bs-gutter-x: 0;">
            <div class="logo">
                <a href="index"><img src="images/logo.png" alt="Logo"></a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="index" class="nav-active">Home</a></li>
                    <li><a href="index#aboutussec">About us</a></li>
                    <li><a href="gallery">Product</a></li>
                    <li><a href="mail">Contact</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>
<!-- banner -->
	<div class="banner1">
		<h2 class="w3ls_head">Contact Us</h2>
	</div>
<!-- //banner -->
<!-- contact -->		
	<div class="contact"> 
		<div class="container">
			<label class="wel"></label>

			<div class="contact-agileinfo">
				<div class="col-md-6 contact-right"> 
					<form name="contactFormEmail" method="post">  
						<input type="text"  name="userName" placeholder="Name" id="userName" required>
						<input type="text" class="email" name="userEmail" placeholder="Email" id="userEmail" required>
						<input type="text"  name="userPhone" placeholder="Phone" id="userPhone" required>
						<textarea name="userMessage" id="userMessage" placeholder="Message"></textarea>
						<input type="submit" name="send" value="Submit" > 
						<?php if (! empty($response)) {?>
      					<div class='success'>
        					<strong><?php echo $response; ?>	</strong>
      					</div>
      					<?php } ?>
					</form>
				</div>
				<div class="col-md-6 contact-left">
					<div class="address">
						<h5>Address:</h5>
						<p><i class="glyphicon glyphicon-home"></i>SG ARCADE,</p>
						<p style="margin-top: 0.3rem;"><i class="glyphicon glyphicon-home"></i>KT Gopalan Road, Kottooli,</p>
						<p style="margin-top: 0.3rem;"><i class="glyphicon glyphicon-home"></i>Kozhikode, Kerala - 673016</p>
					</div>
					<div class="address address-mdl">
						<h5>Phone:</h5>
						<p><i class="glyphicon glyphicon-phone"></i><a href="tel:+917593902001"> +91 7593902001</a></p>
					</div>
					<div class="address">
						<h5>Email:</h5>
						<p><i class="glyphicon glyphicon-envelope"></i> <a href="mailto:kotilights@gmail.com">kotilights@gmail.com</a></p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div> 
	</div>
	<div class="agileits-w3layouts-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15652.048809825974!2d75.8019896!3d11.2605123!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba659574656bddf%3A0xa29bbbfb19c9aff1!2sSOLE%20LIGHTS!5e0!3m2!1sen!2sin!4v1683543309713!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<!-- //contact -->	
<!-- footer -->
<div class="w3ls-footer-grids">
	<div class="container">
		<div class="row">
			<div class="col-md-4 w3l-footer one">
				<h3>Quick links</h3>
				<ul>
					<li><a href="index">Home</a></li>
					<li><a href="index#aboutussec">About us</a></li>
					<li><a href="gallery">Products</a></li>
					<li><a href="mail">Contact</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 w3l-footer two">
				<h3>Connect</h3>
				<ul>
					<li><a class="fb" href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
					<li><a class="fb1" href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
				</ul>
			</div>
			<div class="col-md-4 w3l-footer three">
				<h3>Contact</h3>
				<ul>
					<li>SG ARCADE,
						<br>
						KT Gopalan Road, Kottooli,
						<br>
						Kozhikode, Kerala 673016</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="copy-right-grids">
	<div class="container">
		<div class="copy-left">
			<p class="footer-gd">© 2023 Koti Lights. All Rights Reserved </p>
			<p class="footer-gd">Powered by <a href="https://dostudio.co.in/" target="_blank">DO Studio</a></p>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!-- //footer-->

<!-- start-smoth-scrolling -->
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
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			$('.navTrigger').click(function () {
				$(this).toggleClass('active');
				$(".nav").toggleClass("kg");
				console.log("Clicked menu");
				$("#mainListDiv").toggleClass("show_list");
				$("#mainListDiv").fadeIn();

			});

			$('.aboutushref').on('click', function () {
				if ($('.nav').hasClass('kg')) {
					$('.nav').removeClass('kg');
					$('.navTrigger').removeClass('active');
					$("#mainListDiv").removeClass("show_list");
				}
			});

			$(window).scroll(function () {
				if ($(this).scrollTop() < 50) {
					$('.nav').removeClass('bg');	
				} else {
					$('.nav').addClass('bg')
				}
			});
								
			});
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
	<script src="js/script.js"></script>
<!-- //here ends scrolling icon -->
</body>
</html>