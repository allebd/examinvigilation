	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content">
					<div class="white-container mb60 pb60">
						<h6 class='mb50'>Change password</h6>

								<?php if(isset($passwordsuccess)) :?>
										<div class='alert alert-success'>
											<h6><?=$passwordsuccess;?></h6>
											<a href='#' class='close fa fa-times'></a>
										</div>
								<?php endif; ?>
						<div class="widget-content">
								<?php echo form_open('dashboard/changedpassword'); ?>
									<?php echo form_error('newpassword', '<div class="alert alert-error">', '<a href="#" class="close fa fa-times"></a>
										</div>'); ?>
                                    <div class="form-group">
										<input type="password" class="form-control" name='newpassword' placeholder="New Password" required>
									</div>

									<?php echo form_error('newcpassword', '<div class="alert alert-error">', '<a href="#" class="close fa fa-times"></a>
										</div>'); ?>
                                    <div class="form-group">
										<input type="password" class="form-control" name='newcpassword' placeholder="Confirm New Password" required>
									</div>

									<button type="submit" class="btn btn-default mb40"><i class="fa fa-floppy-o"></i> Save</button>
								<?php echo form_close();?>
						</div>
					</div>
				</div>

				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container links-widget">
							<ul>
								<li><a href="<?=base_url();?>dashboard">My Dashboard</a></li>
								<?php if($this->session->userdata('username') == 'exam officer'):?>
								<li><a href="<?=base_url();?>dashboard/invigilators">Manage Invigilators</a></li>
								<?php endif;?>
								<li class="active"><a href="#">Change Password</a></li>
								<li><a href="<?=base_url();?>home/logout">Log Out</a></li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->