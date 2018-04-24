	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content">
					<div class="white-container mb0">
						<h6>All Invigilators</h6>
						<a href="<?=base_url();?>dashboard/newinvigilator" class="btn btn-default">Add New Invigilator</a>
						<table class="table-hover">
							<thead>
								<tr>
									<th></th>
									<th>Name</th>
									<th></th>
									<th></th>
								</tr>
							</thead>

							<tbody>
								<?php 
									$serial=1;
									$inc =1;
								?>
								<?php foreach($invigilators->result() as $row): ?>
								<tr>									
									<td><?=$serial;?></td>
									<td><?=ucwords($row->lecturerTitle);?> <?=ucwords($row->lecturerName);?></td>
									<td><a href="<?=base_url();?>dashboard/editinvigilator/<?=$row->loginId;?>" class="btn btn-default">Edit</a></td>
									<td><a href="<?=base_url();?>dashboard/deleteinvigilator/<?=$row->loginId;?>" class="btn btn-default">Delete</a></td>
								</tr>
								<?php $serial = $serial + $inc;?>
								<?php endforeach;?>
							</tbody>
						</table>
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