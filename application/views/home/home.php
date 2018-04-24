	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content">
					<div class="white-container">
						<div class="header-banner">
							<div class="flexslider header-slider">
								<ul class="slides">
									<li>
										<img src="<?=base_url();?>assets/img/transparent.png" alt="">
										<div data-image="<?=base_url();?>assets/img/content/slide-1.png"></div>
									</li>

									<li>
										<img src="<?=base_url();?>assets/img/transparent.png" alt="">
										<div data-image="<?=base_url();?>assets/img/content/slide-2.png"></div>
									</li>

									<li>
										<img src="<?=base_url();?>assets/img/transparent.png" alt="">
										<div data-image="<?=base_url();?>assets/img/content/slide-3.png"></div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container contact-form-widget">
							<h5 class="widget-title">Sign In</h5>

							<div class="widget-content">
								<?php if(isset($incorrectLogin)): ?>
										<div class='alert alert-error'>
											<h6><?=$incorrectLogin;?></h6>
											<a href='#' class='close fa fa-times'></a>
										</div>
								<?php endif; ?>
								<?php if(isset($loggedOut)) :?>
										<div class='alert alert-success'>
											<h6><?=$loggedOut;?></h6>
											<a href='#' class='close fa fa-times'></a>
										</div>
								<?php endif; ?>
								<?php echo form_open('home/verify', array('class' => 'mt30')); ?>
									<div class="form-group">
										<input type="text" class="form-control" name='username' placeholder="Username">
									</div>

									<div class="form-group">
										<input type="password" class="form-control" name='password' placeholder="Password">
									</div>

									<button type="submit" class="btn btn-default"><i class="fa fa-lock"></i> Sign In</button>
								<?php echo form_close();?>
							</div>
						</div>
					</aside>
				</div>
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->