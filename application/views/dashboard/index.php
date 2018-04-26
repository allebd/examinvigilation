	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content mb60">
					<div class="white-container mb60 pb60">
						<h6>Welcome <?=$this->session->userdata('username');?></h6>

						<p>Select Invigilators timetable to view</p>
						<select name='examdates' required onchange="location = this.value;">
							<option selected disabled>--- Select Exam Date ---</option>
							<?php foreach($examdates->result() as $row): ?>																
							<option value = '<?=base_url();?>dashboard/posting/<?=$row->examDateId;?>' ><?=date_format(date_create($row->examDate), 'l F jS, Y');?></option>
							<?php endforeach; ?>							
						</select>
					</div>
				</div>

				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container links-widget">
							<ul>
								<li class="active"><a href="#">My Dashboard</a></li>
								<?php if($this->session->userdata('username') == 'exam officer'):?>
								<li><a href="<?=base_url();?>dashboard/invigilators">Manage Invigilators</a></li>
								<?php endif;?>
								<li><a href="<?=base_url();?>dashboard/chngpassword">Change Password</a></li>
								<li><a href="<?=base_url();?>home/logout">Log Out</a></li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->