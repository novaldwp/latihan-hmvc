		<!-- Modal -->
		<div class="modal fade" id="modal-edit" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-warning"></i> Edit Confirmation</h4>
					</div>
					<div class="modal-body">
						<p>Are you sure want to edit this data ?</p>
					</div>
					<div class="modal-footer">
						<a id="edit-no" class="btn btn-danger" data-dismiss="modal">No</a>
						<a id="edit-yes" class="btn btn-success">Yes</a>
					</div>
				</div>  
			</div>
		</div>
		
		<div class="modal fade" id="modal-delete" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-warning"></i> Delete Confirmation</h4>
					</div>
					<div class="modal-body">
						<p>Are you sure want to delete this data ?</p>
					</div>
					<div class="modal-footer">
						<a id="delete-no" class="btn btn-danger" data-dismiss="modal">No</a>
						<a id="delete-yes" class="btn btn-success">Yes</a>
					</div>
				</div>  
			</div>
		</div>
		
		<div class="modal fade" id="modal-message" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-warning"></i> Notification</h4>
					</div>
					<div class="modal-body">
						<p id="validate-message"></p>
					</div>
					<div class="modal-footer">
						<a id="delete-no" class="btn btn-default" data-dismiss="modal">Close</a>
					</div>
				</div>  
			</div>
		</div>
		
		<!-- jQuery 2.1.4 -->
		<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
		<!-- Bootstrap 3.3.5 -->
		<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		 <!-- DataTables -->
		<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
		<!-- iCheck -->
		<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
		 <!-- Bootstrap WYSIHTML5 -->
		<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
		<!-- Select2 -->
		<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>
		<!-- InputMask -->
		<script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
		<!-- date-range-picker -->
		<script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/moment.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
		<!-- bootstrap time picker -->
		<script src="<?php echo base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
		<!-- SlimScroll -->
		<script src="<?php echo base_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
		<!-- FastClick -->
		<script src="<?php echo base_url(); ?>assets/plugins/fastclick/fastclick.min.js"></script>
		
		<!-- Fancybox -->
		<script src="<?php echo base_url(); ?>assets/plugins/fancybox/fancybox.js"></script>
		<style>
			#loading {position: fixed;width: 100%;height: 100%;left: 0;top: 0;right: 0;bottom: 0;display: block;background: #fff;z-index: 10000;}
			#loading img {position: absolute;top: 50%;left: 50%;margin: -23px 0 0 -23px;}
		</style>
		
		<!-- ImLTE App -->
		<script src="<?php echo base_url(); ?>assets/js/app.min.js"></script>
		<!-- ImLTE for demo purposes -->
		<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>

		<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" />
		<script>
			$(document).ready(function() {
				$('[data-popup="lightbox"]').fancybox({
					padding: 3,
					openEffect : 'elastic',
					openSpeed  : 150,
					closeEffect : 'elastic',
					closeSpeed  : 150,
					closeClick : true
					
				});

				$('#datetimepicker1').datetimepicker({
					format: 'DD-MM-YYYY HH:mm'
				});
				$('#datetimepicker2').datetimepicker({
					format: 'DD-MM-YYYY HH:mm'
				});
				$('#datetimepicker3').datetimepicker({
					format: 'DD-MM-YYYY HH:mm'
				});
			});

			$(function () {
				//Enable iCheck plugin for checkboxes
				//iCheck for checkbox and radio inputs
				$('.mailbox-messages input[type="checkbox"]').iCheck({
					checkboxClass: 'icheckbox_flat-blue',
					radioClass: 'iradio_flat-blue'
				});

				//Enable check and uncheck all functionality
				$(".checkbox-toggle").click(function () {
					var clicks = $(this).data('clicks');
					if (clicks) {
						//Uncheck all checkboxes
						$(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
						$(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
					} else {
						//Check all checkboxes
						$(".mailbox-messages input[type='checkbox']").iCheck("check");
						$(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
					}
					$(this).data("clicks", !clicks);
				});
			
				$('#example0').DataTable( {
					"order": [[ 0, "desc" ]]
				} );
				$('#example01').DataTable( {
					"order": [[ 0, "desc" ], [ 1, "desc" ]]
				} );
				
				$("#example1").DataTable();
				$('#example2').DataTable({
					"paging": true,
					"lengthChange": false,
					"searching": false,
					"ordering": true,
					"info": true,
					"autoWidth": false
				});
				
				$('input').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%' // optional
				});
				
				$(".textarea").wysihtml5({
				  toolbar: {
					"font-styles": true, // Font styling, e.g. h1, h2, etc.
					"emphasis": true, // Italics, bold, etc.
					"lists": false, // (Un)ordered lists, e.g. Bullets, Numbers.
					"html": true, // Button which allows you to edit the generated HTML.
					"link": true, // Button to insert a link.
					"image": false, // Button to insert an image.
					"color": false, // Button to change color of font
					"blockquote": false
				  }
				});
				
				$(".textarea-disabled").wysihtml5({
				  toolbar: {
					"font-styles": false, // Font styling, e.g. h1, h2, etc.
					"emphasis": false, // Italics, bold, etc.
					"lists": false, // (Un)ordered lists, e.g. Bullets, Numbers.
					"html": false, // Button which allows you to edit the generated HTML.
					"link": false, // Button to insert a link.
					"image": false, // Button to insert an image.
					"color": false, // Button to change color of font
					"blockquote": false
				  }
				});
				
				//Timepicker
				$(".timepicker").timepicker({
					showInputs: false
				});
				
				//Initialize Select2 Elements
				$(".select2").select2();

				//Datemask dd/mm/yyyy
				$("#datemask").inputmask("dd-mm-yyyy", {"placeholder": "dd-mm-yyyy"});
				$(".datemask-2").inputmask("dd-mm-yyyy", {"placeholder": "dd-mm-yyyy"});
				
				
				//Datemask2 mm/dd/yyyy
				$("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
				//Money Euro
				$("[data-mask]").inputmask();

				//Date range picker
				$('#reservation').daterangepicker({format: 'DD-MM-YYYY'});
				//Date range picker with time picker
				$('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
				//Date range as a button
				$('#daterange-btn').daterangepicker(
					{
					  ranges: {
						'Today': [moment(), moment()],
						'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
						'Last 7 Days': [moment().subtract(6, 'days'), moment()],
						'Last 30 Days': [moment().subtract(29, 'days'), moment()],
						'This Month': [moment().startOf('month'), moment().endOf('month')],
						'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
					  },
						startDate: moment().subtract(29, 'days'),
						endDate: moment()
					},
					function (start, end) {
						$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
					}
				);
				$(".timepicker-4").timepicker({
					showInputs: false,
					showMeridian: false,
					minuteStep:1
				});
			});
		</script>
		
		<!-- Custom -->
		<script src="<?php echo base_url(); ?>assets/js/global.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/ajax.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/parsley.js"></script>
	
		<style type="text/css">
			/*ini parsley css*/
			input.parsley-success,
			select.parsley-success,
			textarea.parsley-success {
			  color: #468847;
			  background-color: #DFF0D8;
			  border: 1px solid #D6E9C6;
			}

			input.parsley-error,
			select.parsley-error,
			textarea.parsley-error {
			  color: #B94A48;
			  background-color: #F2DEDE;
			  border: 1px solid #EED3D7;
			}
			.parsley-required{
				color: #ff5757;
			}
			.parsley-errors-list {
			  margin: 2px 0 3px;
			  padding: 0;
			  list-style-type: none;
			  font-size: 0.9em;
			  line-height: 0.9em;
			  opacity: 0;
			  transition: all .3s ease-in;
			  -o-transition: all .3s ease-in;
			  -moz-transition: all .3s ease-in;
			  -webkit-transition: all .3s ease-in;
			}

			.parsley-errors-list.filled {
			  opacity: 1;
			}
		
		</style>
		<script type="text/javascript">

		

		$(function () {
			if( $('.parsley-form').length){
			  $('.parsley-form').parsley().on('field:validated', function() { return true; })
			  .on('form:submit', function() {
			    return true; 
			  });
			 }
			  
			});
			  
		
			$('.parsley-select').change(function() {
            	$(this).parsley().validate();
 			});
 			$('.parsley-textarea').change(function() {
            	$(this).parsley().validate();
 			});
 			$('#province-select').change(function() {
            	ajax_city_by_province($(this).val());
 			});

		</script>
	</body>
</html>