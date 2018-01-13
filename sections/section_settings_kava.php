
<?php include 'galaria/functions.php'; 
	$a=category('1');
	$b=items('1');
	$c=brand('1');
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
									
									<h5>Κατηγορίες Προιόντων</h5>
									<div class="toolbar">
									<button  class="btn btn-metis-5 btn-sm btn-grad" data-toggle='modal' data-target='#add_cat'  title="">Προσθήκη Κατηγορίας</button>
									</div>
								</header>
								<div id="collapse4" class="body">
									<table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
										<thead>
										<tr>
											<th>A/A</th>
											<th>Κατηγορία</th>
											<th></th>
										</tr>
										</thead>
										<tbody>
											<?php for($i=0;$i<count($a);$i++){
												?>
												<tr>
													<td><?php echo  $i+1; ?></td>
													<td><?php echo $a[$i]['title'];?></td>
													<td><center><button class="btn btn-metis-5 btn-sm btn-grad" data-toggle='modal' data-target="#delete_cat" data-yourparameter="<?php  echo $a[$i]['id']; ?>"title=""><span class="fa fa-remove"></span></button></center></td>
												</tr>
											<?php } ?>
										</tbody>                
									</table>
								</div>
							</div>
						</div>
						
							<div class="col-lg-1">
							</div>
						
						<div class="col-lg-5">
							<div class="box">
								<header>
									<div class="icons"><i class="fa fa-table"></i></div>
									
									<h5> Προιόντa</h5>
									<div class="toolbar">
									<button  class="btn btn-metis-5 btn-sm btn-grad" data-toggle='modal' data-target='#add_item'  title="">Προσθήκη Προιόντων</button>
									</div>
								</header>
								<div id="collapse4" class="body">
									<table id="dataTable1" class="table table-bordered table-condensed table-hover table-striped">
										<thead>
										<tr>
											<th>A/A</th>
											<th>Όνομα</th>
											<th></th>
										</tr>
										</thead>
										<tbody>
											<?php for($i=0;$i<count($b);$i++){
												?>
												<tr>
													<td style="width:20%;"><?php echo  $i+1; ?></td>
													<td style="width:70%;"><center><?php echo $b[$i]['title'];?></center></td>
													<td style="width:20%;"><center><button class="btn btn-metis-5 btn-sm btn-grad" data-toggle='modal' data-target="#delete_item" data-yourparameter="<?php  echo $b[$i]['id']; ?>"title=""><span class="fa fa-remove"></span></button></center></td>
												</tr>
											<?php } ?>
										</tbody>                
									</table>
								</div>
							</div>
						</div>
						
						<div class="col-lg-1">
						</div>
							
						<div class="col-lg-5">
							<div class="box">
								<header>
									<div class="icons"><i class="fa fa-table"></i></div>
									
									<h5>Μάρκες</h5>
									<div class="toolbar">
									<button  class="btn btn-metis-5 btn-sm btn-grad" data-toggle='modal' data-target='#add_brand'  title="">Προσθήκη Μάρκας</button>
									</div>
								</header>
								<div id="collapse4" class="body">
									<table id="dataTable2" class="table table-bordered table-condensed table-hover table-striped">
										<thead>
										<tr>
											<th>A/A</th>
											<th>Μάρκα</th>
											<th></th>
										</tr>
										</thead>
										<tbody>
											<?php for($i=0;$i<count($c);$i++){
												?>
												<tr>
													<td style="width:20%;"><?php echo  $i+1; ?></td>
													<td style="width:70%;"><center><?php echo $c[$i]['title'];?></center></td>
													<td style="width:20%;"><center><button class="btn btn-metis-5 btn-sm btn-grad" data-toggle='modal' data-target="#delete_brand" data-yourparameter="<?php  echo $c[$i]['id']; ?>"title=""><span class="fa fa-remove"></span></button></center></td>
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




