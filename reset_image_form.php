<?php
session_start();
if (!isset($_SESSION['reset'])) {
	header("location: ./login.html");
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Graphical Password Authentication System</title>

<!-- CSS File-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- JS Files-->
<script src="js/jquery-2.2.3.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>

</head>
<body>
	<!-- main -->
	<div class="main-agileits">
		<h1>Graphical Password Authentication System - Forgot Password</h1>
		<!-- form -->
		<div class="mainw3-agileinfo form" style="margin-left:425px;">
			<div id="login">    
				<form method="POST" action="reset_image.php" enctype="multipart/form-data"> 
					<center><span style="color:white;">Reset login image</span></center>
					<br><br>
					<div class="field-wrap">
						<label> Image<span class="req">*</span> </label>
						<input type="file" name="image" required>
						<input type="hidden" name="email" value="<?php echo $_SESSION['reset']; ?>" >
					</div> 
					<center><button class="button button-block"/>Submit Image</button></center>
				</form> 
			</div>         
		</div>
		<!-- //form -->
	</div>
	<!-- //main -->

	<!-- copyright -->
	<center>
	<div class="w3copyright-agile">
		<p><bold>Cybersecurity Analyst | User Experience</bold></p>
	</div>
	</center>
	<!-- //copyright --> 
	
	<!-- JS -->
	<script>
	$('.form').find('input, textarea').on('keyup blur focus', function (e) { 
	  var $this = $(this),
		  label = $this.prev('label');

		  if (e.type === 'keyup') {
				if ($this.val() === '') {
			  label.removeClass('active highlight');
			} else {
			  label.addClass('active highlight');
			}
		} else if (e.type === 'blur') {
			if( $this.val() === '' ) {
				label.removeClass('active highlight'); 
				} else {
				label.removeClass('highlight');   
				}   
		} else if (e.type === 'focus') {
		  
		  if( $this.val() === '' ) {
				label.removeClass('highlight'); 
				} 
		  else if( $this.val() !== '' ) {
				label.addClass('highlight');
				}
		}
 
	}); 
	</script>	
	<!-- //JS -->
	
</body>
</html>