
<?php include 'galaria/functions.php'; 
	$a=employee();
	
?>
<div id="content">
	<div class="outer">
		<div class="inner bg-light lter">
			<div class="col-lg-12">
			<br>
	
						<div class="row">
														
							<div class="col-lg-1">
							</div>
						
						<div class="col-lg-10">
							<div class="box">
								<header>
									<div class="icons"><i class="fa fa-table"></i></div>
									
									<h5>Υπάλληλοι</h5>
									<div class="toolbar">
									<button  class="btn btn-metis-5 btn-sm btn-grad" data-toggle='modal' data-target='#add_emp_modal'  title="">Προσθήκη Υπαλλήλου</button>
									</div>
								</header>
								<div id="collapse4" class="body">
									<table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
										<thead>
										<tr>
											<th>A/A</th>
											<th>Όνομα</th>
											<th>Επίθετο</th>
											<th>ΑΦΜ</th>
											<th></th>
										</tr>
										</thead>
										<tbody>
											<?php for($i=0;$i<count($a);$i++){
												?>
												<tr>
													<td><?php echo  $i+1; ?></td>
													<td><?php echo $a[$i]['name'];?></td>
													<td><?php echo $a[$i]['last_name'];?></td>
													<td><?php echo $a[$i]['afm'];?></td>
													<td><center><button class="btn btn-metis-5 btn-sm btn-grad" data-toggle='modal' data-target="#delete_emp" data-yourparameter="<?php  echo $a[$i]['id']; ?>"title=""><span class="fa fa-remove"></span></button></center></td>
												</tr>
											<?php } ?>
										</tbody>                
									</table>
								</div>
							</div>
						</div>
					</div>

			</div>

		</div>
		<!-- /.inner -->
	</div>
	<!-- /.outer -->
</div>
