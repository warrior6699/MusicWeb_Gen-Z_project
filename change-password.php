<?php 
session_start();

if (isset($_SESSION['email']) || isset($_SESSION['name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	  <!-- bootstrap imported -->
	  <link rel="stylesheet" href="strap/css/bootstrap.css">
  <script src="strap/js/bootstrap.bundle.js"> </script>
  <!--=== Reset Css ===-->
  <link rel="stylesheet" href="assets/css/normalize.css">
    <!--=== Bootstrap ===-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--=== Fontawesome icon ===-->
    <link rel="stylesheet" href="assets/css/font-awesome-5.10.2.min.css">
    <!--=== Owl-Carousel ===-->
    <link rel="stylesheet" href="assets/css/plugin/owl.carousel.min.css">
    <!--=== Magnific Popup===-->
    <link rel="stylesheet" href="assets/css/plugin/magnific-popup.css">
    <!--=== nice-select ===-->
    <link rel="stylesheet" href="assets/css/plugin/nice-select.css">
    <!--=== Animation Css ===-->
    <link rel="stylesheet" href="assets/css/plugin/animate.css">
    <!--=== Main Css ===-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--=== Responsive Css ===-->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
    <form action="change-p.php" method="post" class="card account-body" style="background-image: url('assets/img/account-bg.jpg');">
     	<h2  class="account-title account-body">Change Password</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

     
     	<input type="password" 
     	       name="op" 
     	       placeholder="Old Password">
     	       <br>

     	
     	<input type="password" 
     	       name="np" 
     	       placeholder="New Password">
     	       <br>

     	
     	<input type="password" 
     	       name="c_np" 
     	       placeholder="Confirm New Password">
     	       <br>

     	<button type="submit" class="btn btn-primary">CHANGE</button>
          <a href="welcome.php" class="ca form-group text-center" >HOME</a>
     </form>
</body>
</html>

<?php 
}else{
     header("Location: x.php");
     exit();
}
 ?>