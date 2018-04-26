	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content">
					<div class="white-container pt60 mb60 pb60">
						<a href="<?=base_url();?>dashboard/invigilators" class="btn btn-default">All invigilators</a>
						<h6>Edit</h6>
						<?php foreach($selectinvigilator->result() as $row):?>
						<div class="widget-content">
								<?php echo form_open('dashboard/editinginvigilator/'.$row->lecturerId); ?>
                                    <div class="form-group">
                                    	<select name='lecturerTitle'>
                                    		<option selected value='<?=$row->lecturerTitle;?>'><?=$row->lecturerTitle;?></option>
                                    		<option value='Mr.'>Mr.</option>
                                    		<option value='Mrs.'>Mrs.</option>
                                    		<option value='Dr.'>Dr.</option>
                                    		<option value='Prof.'>Prof.</option>
                                    		<option value='Engr.'>Engr.</option>
                                    		<option value='Arch.'>Arch.</option>
                                    	<select>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name='lecturerCode' value="<?=$row->lecturerCode;?>" required>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name='lecturerName' value="<?=$row->lecturerName;?>" required />
									</div>
									<div class="form-group">
										<select name='lecturerDept' required>
											<option selected value='<?=$row->lecturerDept;?>'><?=$row->lecturerDept;?></option>
											<?php foreach($depts->result() as $deptrow): ?>																
											<option value = '<?=$deptrow->deptname;?>' ><?=$deptrow->deptname;?></option>
											<?php endforeach; ?>
										</select>
									</div>
									<div class='form-group'>
										<input type='email' class='form-control' name='lecturerEmail' placeholder='Lecturer Email' value='<?=$row->lecturerEmail;?>' required>
									</div>
									<div class="form-group">
										<input type="number" class="form-control" name='lecturerPhone' placeholder="Lecturer Phone No." value='<?=$row->lecturerPhone;?>' required>
									</div>
									<div class="form-group">
										<input type='text' name='lecturerCourses' id="e_courses" class="form-control" value="<?=$row->lecturerCourses;?>" data-suggestions="<?php foreach($courses->result() as $crow):?><?=$crow->courseName?>,<?php endforeach; ?>">
									</div>
									<div class="form-group">
										<input type='text' name='lecturerDates' id="e_examdate" class="form-control" value="<?=$row->lecturerDates;?>"  data-suggestions="<?php foreach($examdates->result() as $erow):?><?=date_format(date_create($erow->examDate), 'l F jS Y');?>,<?php endforeach; ?>">
									</div>
									<button type="submit" class="btn btn-default mb10"><i class="fa fa-floppy-o"></i> Save</button>
								<?php echo form_close();?>
						</div>
						<?php endforeach;?>
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