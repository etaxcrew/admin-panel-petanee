<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#233D63">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#233D63">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#233D63">
		<title>Login &mdash; PT. Ekosistem Agro Sejahtera</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="{{ asset('frontend/images/logo-icon.png') }}">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }}">

		<!-- Fix Internet Explorer ______________________________________-->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->
    </head>

	<body>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<!-- Preloader -->
			<section>
				<div id="preloader">
					<div id="ctn-preloader" class="ctn-preloader">
						<div class="animation-preloader">
							<div class="spinner"></div>
							<div class="txt-loading">
								<span data-text-preloader="P" class="letters-loading">
									P
								</span>
								<span data-text-preloader="E" class="letters-loading">
									E
								</span>
								<span data-text-preloader="T" class="letters-loading">
									T
								</span>
								<span data-text-preloader="A" class="letters-loading">
									A
								</span>
								<span data-text-preloader="N" class="letters-loading">
									N
								</span>
								<span data-text-preloader="E" class="letters-loading">
									E
								</span>
								<span data-text-preloader="E" class="letters-loading">
									E
								</span>
							</div>
						</div>	
					</div>
				</div>
			</section>

			<!-- 
			=============================================
				Sidebar Menu
			============================================== 
			-->

			<!-- 
			=============================================
				Theme E-Commerce Menu
			============================================== 
			-->
			<div class="theme-Ecommerce-menu">
				<div class="d-flex justify-content-between align-items-center">
					<div class="left-content">
						<ul>
							<li>
								<a href="" class="menu-button"><img src="{{ asset('frontend/images/menu.svg') }}" alt="Petanee"></a>
							</li>
							<li class="logo"><a href=""><img src="{{ asset('frontend/images/logo.png') }}" alt="Petanee"></a></li>
						</ul>
					</div> <!-- /.left-content -->

					<div class="right-content">
						<ul>
							<li class="user-profile-action">
								<div class="dropdown">
									<a href="/login" class="dropdown-toggle">
									    <img src="{{ asset('frontend/images/icon/icon38.svg') }}" alt="Petanee">
									    <span>Masuk</span>
									</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div> <!-- /.theme-Ecommerce-menu -->

			<!-- 
			=============================================
				Signup Page
			============================================== 
			-->
			<div class="signUp-page signUp-minimal pt-50 pb-100">
				<div class="shape-wrapper">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div> <!-- /.shape-wrapper -->
				<div class="sign-up-form-wrapper">
					<div class="title-area text-center">
						<h3>Daftar Akun!</h3>
						<p>Anda dapat mendaftar sebagai Salah Satu Direksi/Pengurus Koperasi</p>
					</div> <!-- /.title-area -->
					<!--<ul class="social-icon-wrapper row">
						<li class="col-6"><a href="#" class="gmail"><i class="fa fa-envelope-o" aria-hidden="true"></i> Gmail</a></li>
						<li class="col-6"><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
					</ul>
					<p class="or-text"><span>or</span></p>-->
					<form action="#" id="signUp-form">
						<div class="row">
							<div class="col-12">
								<div class="input-group">
									<input type="text" required>
									<label>Nama Lengkap</label>
								</div> <!-- /.input-group -->
							</div> <!-- /.col- -->
							<div class="col-12">
								<div class="input-group">
									<input type="email" required>
									<label>Email</label>
								</div> <!-- /.input-group -->
							</div> <!-- /.col- -->
							<div class="col-12">
								<div class="input-group">
									<input type="password" required>
									<label>Password</label>
								</div> <!-- /.input-group -->
							</div> <!-- /.col- -->
							<div class="col-12">
								<div class="input-group">
									<select class="theme-select-menu">
										<option value="">Pilih*</option>
										<option value="AF">Dewan Komisaris</option>
									    <option value="AL">Pengurus</option>
									</select>
								</div> <!-- /.input-group -->
							</div> <!-- /.col- -->
						</div> <!-- /.row -->
						<div class="agreement-checkbox">
							<input type="checkbox" id="agreement">
							<label for="agreement">Saya setuju dengan syarat dan kebijakan dari Petanee.</label>
						</div>
						<button class="line-button-one">Signup</button>
					</form>
				</div> <!-- /.sign-up-form-wrapper -->
			</div> <!-- /.signUp-page -->
			

            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <!-- jQuery -->
            <script src="{{ asset('frontend/vendor/jquery.2.2.3.min.js') }}"></script>
            <!-- Popper js -->
            <script src="{{ asset('frontend/vendor/popper.js/popper.min.js') }}"></script>
            <!-- Bootstrap JS -->
            <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
            <!-- js ui -->
            <script src="{{ asset('frontend/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
            <!-- Select js -->
            <script src="{{ asset('frontend/vendor/selectize.js/selectize.min.js') }}"></script>

            <!-- Theme js -->
            <script src="{{ asset('frontend/js/theme.js') }}"></script>

		</div> <!-- /.main-page-wrapper -->

	</body>
</html>
