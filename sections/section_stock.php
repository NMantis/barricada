<?php 
include 'galaria/functions.php';
$a=category(1);
?>

<div id="content">
	<div class="outer">
		<div class="inner bg-light lter">
			<div class="col-lg-12">
				<br>

				<div class="row">

					<div class="col-lg-12">
						<div class="col-lg-2">
								</div>
						<div class="col-lg-8">
							
							<div class="box inverse">
								<header>
									<div class="icons">
										<i class="fa fa-th-large"></i>
									</div>
									<h5>Selects</h5>


								</header>
								<br>
								<div>
									<form class="form-horizontal">

										<div class="form-group">
											<label class="control-label col-lg-4">Κατηγορία</label>

											<div class="col-lg-8">
												<select id='select_categ'  name='select_categ' class="form-control">
												<option value="-">-</option>
												 <?php for($i=0;$i<count($a);$i++){?>
    												<option value='<?php echo $a[$i]['id'];?>'> <?php echo $a[$i]['title'];?> </option>
    											<?php } ?>
												</select>
											</div>
											<br>
											<label class="control-label col-lg-4">Προιόν</label>

											<div class="col-lg-8">
												<select id='select_item' name='select_item' class="form-control">
												<option value="-">-</option>
												</select>
											</div>



										</div>



									</form>
								</div>
							</div>
						</div>
					</div>


					<div id="row12">
			<div class="col-lg-1">
			</div>
								
							</div>

							
							

				</div>

			</div>

		</div>
		<!-- /.inner -->
	</div>
	<!-- /.outer -->
</div>