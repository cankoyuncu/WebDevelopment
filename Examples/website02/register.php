<!DOCTYPE html>
<?php 
//starting the session
session_start();
?>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>

	</head>
<body>
	<nav class="navbar navbar-default">
		
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3>TİCARET</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<!-- Link for redirecting to Login Page -->
		<a href="login.php">ÜYE GİRİŞİ</a>
		<br style="clear:both;"/><br />
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<!-- Registration Form start -->
			<form method="POST" action="save_member.php">	
				<div class="alert alert-info">KAYIT BÖLÜMÜ</div> <br>
				<div class="form-group">
					<label>İsim Soyisim:</label>
					<input type="text" name="name_surname" class="form-control" required="required"/>
				</div>
                <div class="form-group">
					<label>Kullanıcı Adı:</label>
					<input type="text" name="username" class="form-control" required="required"/>
				</div>
                <div class="form-group">
					<label>E-Posta:</label>
					<input type="email" name="mail" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>Şifre:</label>
					<input type="password" name="password1" class="form-control" required="required"/>
				</div>
                <div class="form-group">
					<label>Tekrar Şifre:</label>
					<input type="password" name="password1" class="form-control" required="required"/>
				</div>
				<?php
					//checking if the session 'success' is set.
					if(ISSET($_SESSION['success'])){
				?>
				<!-- Display regostration success message -->
				<div class="alert alert-success"><?php echo $_SESSION['success']?></div>
				<?php
					//Unsetting the 'success' session after displaying the message. 
					unset($_SESSION['success']);
					}
				?>
				<button class="btn btn-primary btn-block" name="register"><span class="glyphicon glyphicon-save"></span>Kayıt Ol</button>
			</form>	
			<!-- Registration Form end -->
		</div>
	</div>
</body>
</html>