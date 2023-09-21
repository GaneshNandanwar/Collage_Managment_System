<?php
include("header.php");
if(!isset($_SESSION["studentid"]))
{
	echo"<script>window.location='studentlogin.php';</script>";
}


?>
	<!-- register -->
	<div class="register-sec-w3l" id="register">
		<div class="container">
			<div class="col-md-6 book-appointment">
				<h3>Student Account</h3>
				
			</div>
			
		</div>
	</div>
	<!-- //register -->


	<?php
include("footer.php")
?>