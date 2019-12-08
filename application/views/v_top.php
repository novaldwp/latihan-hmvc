<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->

<body class="hold-transition skin-blue fixed sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<header class="main-header">
			<!-- Logo -->
			<a href="javascript:void(0);" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>X-X</b></span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>Tugas</b> Latihan</span>
			</a>
			
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top" role="navigation">
			<!-- Sidebar toggle button-->
			<a href="javascript:void(0);" class="sidebar-toggle" data-toggle="offcanvas" role="button">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<!-- User Account: style can be found in dropdown.less -->
					<li class="dropdown user user-menu">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?php echo base_url() ."assets/uploads/".(($this->session->userdata('user_image') != "")?"user/thumb/". $this->session->userdata('user_image'):"no_image.png"); ?>" class="user-image" alt="User Image">
							<span class="hidden-xs"><?php echo (($this->session->userdata('user_fullname') != "")?$this->session->userdata('user_fullname'):"-"); ?></span>
						</a>
						<ul class="dropdown-menu">
							<!-- User image -->
							<li class="user-header">
								<img src="<?php echo base_url() ."assets/uploads/".(($this->session->userdata('user_image') != "")?"user/thumb/". $this->session->userdata('user_image'):"no_image.png"); ?>" class="img-circle" alt="User Image">
								<p>
									<?php echo (($this->session->userdata('user_fullname') != "")?$this->session->userdata('user_fullname'):"-"); ?>
									<small>Last login <?php echo (($this->session->userdata('last_login') != "")?convert_to_textual($this->session->userdata('last_login')):"-"); ?></small>
								</p>
							</li>
							<!-- Menu Footer-->
							<li class="user-footer">
								<div class="pull-left">
									<a href="javascript:void(0);" OnClick="link_to('change-password');" class="btn btn-default btn-flat">Ubah Password</a>
								</div>
								<div class="pull-right">
									<a href="javascript:void(0);" OnClick="link_to('login/process-logout');" class="btn btn-default btn-flat">Sign out</a>
								</div>
							</li>
						</ul>
					</li>
					<!-- Control Sidebar Toggle Button -->
					<li></li>
				</ul>
			</div>
		</nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<!-- Sidebar user panel -->
			<div class="user-panel">
				<div class="pull-left image">
					<img src="<?php echo base_url() ."assets/uploads/".(($this->session->userdata('user_image') != "")?"user/thumb/". $this->session->userdata('user_image'):"no_image.png"); ?>" class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info">
					<p><?php echo (($this->session->userdata('user_fullname') != "")?$this->session->userdata('user_fullname'):"-"); ?></p>
					<a href="javascript:void(0);"><i class="fa fa-circle text-success"></i> Online</a>
				</div>
			</div>
			<?php $this->load->view('v_navigation'); ?>
		</section>
		<!-- /.sidebar -->
    </aside>