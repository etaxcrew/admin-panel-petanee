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
									<a href="/register" class="dropdown-toggle">
									    <img src="{{ asset('frontend/images/icon/icon38.svg') }}" alt="Petanee">
									    <span>Daftar Akun</span>
									</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div> <!-- /.theme-Ecommerce-menu -->

			<!-- 
			=============================================
				Login Page
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
				<div class="signin-form-wrapper">
					<div class="title-area text-center">
						<h3>Masuk.</h3>
					</div> <!-- /.title-area -->
                    
                    <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                        @csrf
                        <div class="row">
							<div class="col-12">
								<div class="input-group">
                                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" tabindex="1" required autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                    <label>Email</label>
								</div> <!-- /.input-group -->
							</div> <!-- /.col- -->
							<div class="col-12">
								<div class="input-group">
									<input id="password" type="password" name="password" required>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
									<label for="password" class="control-label @error('password') is-invalid @enderror">Password</label>
								</div> <!-- /.input-group -->
							</div> <!-- /.col- -->
						</div> <!-- /.row -->
                        
						<div class="agreement-checkbox d-flex justify-content-between align-items-center">
							<div>
								<input type="checkbox" name="remember" id="remember">
								<label for="remember">Remember Me</label>
							</div>
							<a href="#">Lupa Password?</a>
						</div>
						<button type="submit" class="line-button-one">Login</button>

					</form>
					<p class="signUp-text text-center">Tidak punya akun?
						<a href="/register">Daftar Akun</a> sekarang.</p>
				</div> <!-- /.login-form-wrapper -->
			</div> <!-- /.login-page -->
			

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
