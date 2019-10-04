<!DOCTYPE html>
<html lang="en">
<head>
	<title>FOODO Restoran</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/assets_login/images/icons/favicon.ico') ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_login/vendor/bootstrap/css/bootstrap.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_login/vendor/animate/animate.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_login/vendor/css-hamburgers/hamburgers.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_login/vendor/select2/select2.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_login/css/util.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_login/css/main.css') ?>">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<?php if ($this->session->flashdata('gagallogin')): ?>
                        <div class="col-md-12">
                            <div class="alert-group">
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    Username dan Password salah !!
                                </div>
                            </div>
                        </div>
                    <?php endif?>
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo base_url('assets/assets_login/images/img-01.png') ?>" alt="IMG">
				</div>
				<form class="login100-form validate-form" action="<?php echo base_url('login/aksi_login'); ?>" method="post">
					<span class="login100-form-title">
						FOODO LOGIN
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" name="Login" class="login100-form-btn">
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
						</span>
						<a class="txt2" href="#">
					</div>
					<div class="text-center p-t-136">
						<a class="txt2" href="#"></a>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/assets_login/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/assets_login/vendor/bootstrap/js/popper.js') ?>"></script>
	<script src="<?php echo base_url('assets/assets_login/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/assets_login/vendor/select2/select2.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/assets_login/vendor/tilt/tilt.jquery.min.js') ?>"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/assets_login/js/main.js') ?>"></script>

</body>
</html>