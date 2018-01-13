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

								<div id="collapse4" class="body">
									<table  class="table table-bordered table-condensed table-hover table-striped">
										<thead>
										<tr>
											<th>A/A</th>
											<th>Όνομα</th>
											<th>Επίθετο</th>
											<th>Ωρες εργασίας</th>
											<th>Υπόλοιπο(€)</th>
										</tr>
										</thead>
										<tbody>
											<?php for($i=0;$i<count($a);$i++){
												?>
												<tr>
													<td style='width : 5%;'><?php echo  $i+1; ?></td>
													<td id = "name_<?php echo $i; ?>" style='width : 30%;'><?php echo $a[$i]['name'];?></td>
													<td id = "last_<?php echo $i; ?>" style='width : 30%;'><?php echo $a[$i]['last_name'];?></td>
													<td><center><input type="number"   id="work_h_<?php echo $i; ?>" name="<?php echo $a[$i]['id'];; ?>" placeholder="Ωρες" class="form-control"></center></td>
													<td><center><input type="number" step="0.5"  id="work_b_<?php echo $i; ?>" placeholder="Euro" class="form-control"></center></td>
												</tr>
											<?php } ?>
										</tbody>
										
									</table>
								</div>
								
								<div id="collapse4" class="body">
									<table  class="table table-bordered table-condensed table-hover table-striped">
										<tbody>
												<tr>
													<td style='width : 20%;'>Καθαρά έσοδα :</td>
													<td><center><input type="number" id="payment_ernings" placeholder="Euro" class="form-control"></center></td>
												</tr> 
										</tbody>
										
									</table>
								</div>
								
								<center><button id="payment_emp_button"  class="btn btn-metis-5 btn-bg btn-grad" >Υπολογισμός</button></center>
						</div>
					</div>

			</div>

		</div>
		<!-- /.inner -->
	</div>
	<!-- /.outer -->
</div>