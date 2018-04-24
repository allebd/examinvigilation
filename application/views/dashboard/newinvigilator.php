	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content">
					<div class="white-container mb60">
						<a href="<?=base_url();?>dashboard/invigilators" class="btn btn-default">All Invigilators</a>
						<h6>New Invigilator</h6>
						
						<div class="widget-content">
								<?php echo form_open('dashboard/addinginvigilator'); ?>
                                    <div class="form-group">
                                    	<select name='lecturerTitle' required>
                                    		<option selected disabled>--- Select a Title ---</option>
                                    		<option value='Mr.'>Mr.</option>
                                    		<option value='Mrs.'>Mrs.</option>
                                    		<option value='Miss.'>Miss.</option>
                                    		<option value='Dr.'>Dr.</option>
                                    		<option value='Prof.'>Prof.</option>
                                    		<option value='Engr.'>Engr.</option>
                                    		<option value='Arch.'>Arch.</option>
                                    	<select>
									</div>
                                    <div class="form-group">
										<input type="text" class="form-control" name='lecturerName' placeholder="Lecturer Name" required>
									</div>
									<div class="form-group">
										<select name='lecturerDept' required>
											<option selected disabled>--- Select a Department ---</option>
											<?php foreach($depts->result() as $row): ?>																
											<option value = '<?=$row->deptname;?>' ><?=$row->deptname;?></option>
											<?php endforeach; ?>
										</select>
									</div>
									<div class="form-group">
										<input type="email" class="form-control" name='lecturerEmail' placeholder="Lecturer Email" required>
									</div>
									<div class="form-group">
										<input type="number" class="form-control" name='lecturerPhone' placeholder="Lecturer Phone No." required>
									</div>
									<div class="form-group">
										<input type='text' value='' name='lecturerCourses' id="courses" class="form-control" data-suggestions="<?php foreach($courses->result() as $crow):?><?=$crow->courseName?>,<?php endforeach; ?>">
									</div>
									<div class="form-group">
										<input type='text' value='' name='lecturerDates' id="examdate" class="form-control" data-suggestions="<?php foreach($examdates->result() as $erow):?><?=date_format(date_create($erow->examDate), 'l F jS Y').' ('.$erow->examSession.')';?>,<?php endforeach; ?>">
									</div>
									<button type="submit" class="btn btn-default"><i class="fa fa-floppy-o"></i> Save</button>
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
								<li class="active"><a href="<?=base_url();?>dashboard/invigilators">Manage Invigilators</a></li>
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