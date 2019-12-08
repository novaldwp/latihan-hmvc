<?php
	$nav_dashboard = ""; $nav_user = "";
	$nav_feedback = "";
	$nav_notification = "";

	switch($this->session->userdata('nav_active')) {
		case "dashboard" :
			$nav_dashboard = ' active"';
		break;
		case "user" :
			$nav_user = ' active"';
		break;	
	}
?>
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu">
	<li class="header" style="background-color:#005e9e;padding:1px;"></li>
	<li class="<?php echo $nav_dashboard; ?>"><a href="javascript:void(0);" OnClick="link_to('dashboard')"><i class="fa fa-dashboard"></i> <span> Dashboard</span></a></li>
	<li class="<?php echo $nav_user; ?>"><a href="javascript:void(0);" OnClick="link_to('user')"><i class="fa fa-user"></i> <span> User</span></a></li>
</ul>
