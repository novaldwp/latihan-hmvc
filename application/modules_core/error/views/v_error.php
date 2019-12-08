<body class="hold-transition login-page">
<!-- Main content -->
<section class="content">
	<div class="error-page">
		<h4 class="headline text-grey"> 404</h4>
		<div class="error-content">
			<center>
				<h3><i class="fa fa-warning text-grey"></i> Oops! Page not found.</h3>
				<p>
					We could not find the page you were looking for.
				</p>
				<?php if ($this->session->userdata("login") == TRUE) { ?>
				<a href="javascript:void(0);" OnClick="link_to('dashboard');" class="btn btn-sm btn-social btn-github">
					<i class="fa fa-home"></i> return to dashboard
				</a>
				<?php } else { ?>
				<a href="javascript:void(0);" OnClick="link_to('homepage');" class="btn btn-sm btn-social btn-github">
					<i class="fa fa-home"></i> return to home
				</a>
				<?php } ?> 
			</center>			
		</div><!-- /.error-content -->
	</div><!-- /.error-page -->
</section><!-- /.content -->