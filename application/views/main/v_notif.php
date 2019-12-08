<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<?php
			if($this->session->flashdata('message') != "") {
				$data['status'] = $this->session->flashdata('status');	
				$data['notify'] = $this->session->flashdata('message');
				$this->load->view('../v_alert', $data);
			}
		?>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
            <div class="col-xs-12">
				<!-- Default box -->
				<div class="box box-default box-solid">
					<div class="box-header with-border">
						<h3 class="box-title">Send Notification</h3>
					</div>
					<div class="box-body table-responsive">
						<form class="form-horizontal parsley-form" method="post" action="<?php echo base_url(); ?>crons/send_notification">
							<div class="box-body">
								<div class="form-group">
									<label class="col-sm-2 control-label">ID <span class="merah">*</span></label>
									<div class="col-sm-2">
										<input type="text" class="form-control" value="" name="id" autocomplete="off" required="" minlength="1" maxlength="3" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Title <span class="merah">*</span></label>
									<div class="col-sm-3">
										<select required name="title" class="form-control select2 parsley-select">
											<option value="Notifikasi : Pemesanan">Notifikasi : Pemesanan</option>
											<option value="Notifikasi : Penyelesaian">Notifikasi : Penyelesaian</option>
											<option value="Notifikasi : Promo">Notifikasi : Promo</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Device Token <span class="merah">*</span></label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="2" data-parsley-trigger="keyup" name="token" style="resize: none;" required><?php echo $token; ?></textarea>
									</div>
								</div>
								<?php if($token != "") { ?>
								<div class="form-group" style="border-bottom: 1px solid #eee;"></div>
								<div class="form-group">
									<label class="col-sm-2 control-label"></label>
									<div class="col-sm-8">
										<cite><?php echo $result; ?></cite>
									</div>
								</div>
								<?php } ?>
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