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
	
						<?php
							$this->db->select('*');		
							$this->db->from('examdates');
							$this->db->where('examDateId', $this->uri->segment(3));
							$timedate = $this->db->get();

							 foreach($timedate->result() as $trow):
						?>
						<h5><strong><?=date_format(date_create($trow->examDate), 'l F jS, Y');?></strong></h5>
						<?php
							endforeach; 
						?>						
						
						<?php if($timetable->num_rows() > 0):?>
						<?php if($this->session->userdata('username') == 'exam officer'):?>
						<a href="<?=base_url();?>dashboard/generate_invigilators/<?=$this->uri->segment(3);?>" class="btn btn-default">Post/Re-Post Invigilators</a>
						<a href="#" class="pull-right btn btn-default">Send to Mail</a>
						<?php endif;?>
						<table class="table-hover">
							<thead>
								<tr>
									<th>Course</th>
									<th>Venue</th>
									<th>Session</th>
									<th>Invigilator</th>
								</tr>
							</thead>

							<tbody>
								<?php foreach($timetable->result() as $mrow): ?>
								<tr>									
									<td><?=$mrow->courseName;?></td>
									<td><?=$mrow->courseVenue;?></td>
									<td><?=$mrow->courseSession;?></td>
									<td>
										<?php
											$invigilatorId = '('.$mrow->invigilatorId.')';
											$invigilatorId = str_replace('(,', '(', $invigilatorId);
											$invigilatorId = str_replace(',)', ')', $invigilatorId);
											$invigilatorId2 = $mrow->invigilatorId;
											if($invigilatorId2 != ''){
											$gettingInvigilator = "SELECT lecturerCode FROM lecturers WHERE lecturerId IN $invigilatorId";
											$getinvigilator = $this->db->query($gettingInvigilator);

											if($getinvigilator->num_rows() > 0){
											foreach($getinvigilator->result() as $inrow){ 
										?>
										<?=ucwords($inrow->lecturerCode);?>, 
										<?php 
												}
											}
										}
										?>									
									</td>
								</tr>
								<?php endforeach;?>
							</tbody>
						</table>
						<?php endif; ?>
						<?php if($timetable->num_rows() < 1):?>
							<div class='alert alert-error'>
								<h6>No timetable for selected date.</h6>
							</div>
						<?php endif; ?>
					</div>
				</div>

				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container links-widget">
							<ul>
								<li class="active"><a href="<?=base_url();?>dashboard">My Dashboard</a></li>
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