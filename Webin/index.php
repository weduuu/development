<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<link rel ="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">

	<title>Homepage</title>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4 form-div login">

				<div class="alert <?php echo $_SESSION['alert-class']; ?>">
				<?php 
				echo $_SESSION['message'];
				unset($_SESSION['message']);
				unset($_SESSION['alert-class']);
				?>
				</div>

				<h3>Welcome, <?php echo $_SESSION['username']; ?></h3>
				<a href="#" class="logout">logout</a>
				<?php if(!$_SESSION['verified']): ?>
				<div class="alert alert-warning">
					You need to verify your account.
					Sign in to your email account and click on the
					verification link we just emailed you at
					<strong><?php echo $_SESSION['email']; ?></strong>
				</div>
				<?php endif; ?>
				
				<?php if(!$_SESSION['verified']): ?>
				<button class="btn btn-block btn-lg btn-primary">I am Verified!</button>
				<?php endif; ?>
			</div>
		</div>
	</div>
</body>

</html>

