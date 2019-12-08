<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header"></section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
            <div class="col-xs-12">
				<!-- Default box -->
				<div class="box box-primary box-solid">
					<div class="box-header with-border">
						<h3 class="box-title">Add User</h3>
						<div class="box-tools pull-right">
							<a href="javascript:void(0);" OnClick="link_to('user');" class="btn btn-sm btn-social">
								<i class="fa fa-toggle-left"></i> Back
							</a> 
						</div>
					</div>
					<div class="box-body table-responsive">
						<form class="form-horizontal parsley-form" method="post" action="<?php echo base_url(); ?>user/insert-data" enctype="multipart/form-data">
							<div class="box-body">
								<div class="form-group">
									<label class="col-sm-2 control-label">Username <span class="merah">*</span></label>
									<div class="col-sm-9">
										<input type="text" class="form-control" value="" name="username" autocomplete="off" required="" minlength="5" maxlength="25" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Password <span class="merah">*</span></label>
									<div class="col-sm-9">
										<input type="password" class="form-control" value="" name="password" autocomplete="off" required="" minlength="5" maxlength="25" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Nama <span class="merah">*</span></label>
									<div class="col-sm-9">
										<input type="text" class="form-control" value="" name="fullname" autocomplete="off" required="" minlength="5" maxlength="50" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Gambar</label>
									<div class="col-sm-9">
										<input type="file" value="" name="userfile" />
										<p class="help-block">.jpg |.png (max file size 2MB)</p>
									</div>
								</div>
								<div class="form-group">
									<span class="col-sm-2"></span>
									<div class="col-sm-9">
										<input type="reset" name="reset" value="Clear" class="btn" />
										<input type="submit" name="submit" value="Save Change" class="btn btn-primary" />
									</div>
								</div>
							</div><!-- /.box-body -->	
						</form>
					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div><!-- /.col-xs-12 -->
		</div><!-- /.row -->
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->