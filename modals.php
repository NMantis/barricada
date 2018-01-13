 <div id="add_emp_modal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
						
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							
                            <h4 class="modal-title" style='color:black;'><b>Προσθήκη Υπαλλήλου</b></h4>
                        </div>
                        <div class="modal-body">
                            
							<style>
							.control-label{
								color:black;
							}
							</style>
							
										 <form class="form-horizontal">

										<div class="form-group">
											<label for="text1" class="control-label col-lg-4">Όνομα :</label>

											<div class="col-lg-8">
												<input type="text" id="emp_name" placeholder="Όνομα" class="form-control"/>
											</div>
										</div>
										<!-- /.form-group -->

										<div class="form-group">
											<label for="pass1" class="control-label col-lg-4">Επώνυμο :</label>

											<div class="col-lg-8">
												<input class="form-control" type="text" id="emp_last_name"
													   placeholder="Επώνυμο" class="form-control"/>
											</div>
										</div>
										<!-- /.form-group -->

										<div class="form-group">
											<label class="control-label col-lg-4">ΑΦΜ :</label>

											<div class="col-lg-8">
												<input type="number"  placeholder="ΑΦΜ" id="emp_afm"  class="form-control"/>
											</div>
										</div>
									 
										<!-- /.form-group -->
									</form>
    
							
                        </div>
                        <div class="modal-footer">
							<button type="button" class="btn btn-default" id="add_emp_button">ΟΚ</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
</div>




 <div id="delete_emp" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
</div>


<div id="delete_confirm_emp" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
						
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							
                            <h4 class="modal-title" style='color:black;'><b>Διαγραφή Υπαλλήλου</b></h4>
                        </div>
                        <div class="modal-body">
                            
                        </div>
                        <div class="modal-footer">
							<button type="button" class="btn btn-primary" id="delete_button_emp" data-dismiss="modal">Συνέχεια</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">'Ακύρωση</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
</div>


<div id="payment_emp_modal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
						
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							
                            <h4 class="modal-title" style='color:black;'><b>Πληρομές</b></h4>
                        </div>
                        <div class="modal-body">
                            
                            <div id="payment_div" class="body">
							</div>
							
							<div>					
									<table  class="table table-bordered table-condensed table-hover table-striped">
										<tbody>
												<tr>
													<td style='width : 50%;'>Συνολικες ώρες</td>
													<td id='total_h' style='width : 50%;'></td>
												</tr>
										</tbody>
										
									</table>
							</div>
                            
                            
                        </div>
                        <div class="modal-footer">
							<button type="button" id="add_pay_button" class="btn btn-primary"  data-dismiss="modal">Συνέχεια</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">'Ακύρωση</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
</div>


 <div id="add_cat" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
						
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							
                            <h4 class="modal-title" style='color:black;'><b>Προσθήκη Κατηγορίας</b></h4>
                        </div>
                        <div class="modal-body">
                            
							<style>
							.control-label{
								color:black;
							}
							</style>
							
										 <form class="form-horizontal">

										<div class="form-group">
											<label for="text1" class="control-label col-lg-4">Όνομα :</label>

											<div class="col-lg-8">
												<input type="text" id="cat_name" placeholder="Όνομα" class="form-control"/>
											</div>
										</div>
										
										
					
										<!-- /.form-group -->
									</form>
    
							
                        </div>
                        <div class="modal-footer">
							<button type="button" class="btn btn-default" id="add_cat_button">ΟΚ</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
</div>



 <div id="delete_cat" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
</div>

          <div id="delete_confirm_cat" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
						
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							
                            <h4 class="modal-title" style='color:black;'><b>Διαγραφή Κατηγορίας</b></h4>
                        </div>
                        <div class="modal-body">
                            
                        </div>
                        <div class="modal-footer">
							<button type="button" class="btn btn-primary" id="delete_button_cat" data-dismiss="modal">Συνέχεια</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">'Ακύρωση</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
</div>





<div id="add_item" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
						
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							
                            <h4 class="modal-title" style='color:black;'><b>Προσθήκη Προιόντος</b></h4>
                        </div>
                        <div class="modal-body">
                            
							<style>
							.control-label{
								color:black;
							}
							</style>
							
										 <form class="form-horizontal">

										<div class="form-group">
											<label for="text1" class="control-label col-lg-4">Όνομα :</label>

											<div class="col-lg-8">
												<input type="text" id="item_name" placeholder="Όνομα" class="form-control"/>
											</div>
										</div>
										<!-- /.form-group -->

									<div class="form-group">
                                                <label class="control-label col-lg-4">Κατηγορία</label>
                                            
                                                <div class="col-lg-8">
                                                    <select id='cat_select'  name='select_cat'  class="form-control">
                                                    <option value="">-</option>
                                                    <?php for($i=0;$i<count($a);$i++){?>
                										<option value='<?php echo $a[$i]['id'];?>'> <?php echo $a[$i]['title'];?> </option>
                									<?php } ?>
                                                    </select>
                                                </div>
                                            </div>
									
										<!-- /.form-group -->
									</form>
    
							
                        </div>
                        <div class="modal-footer">
							<button type="button" class="btn btn-default" id="add_item_button">ΟΚ</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
</div>



 <div id="delete_item" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
</div>

          <div id="delete_confirm_item" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
						
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							
                            <h4 class="modal-title" style='color:black;'><b>Διαγραφή Προιόντος</b></h4>
                        </div>
                        <div class="modal-body">
                            
                        </div>
                        <div class="modal-footer">
							<button type="button" class="btn btn-primary" id="delete_button_item" data-dismiss="modal">Συνέχεια</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">'Ακύρωση</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
</div>




<div id="add_brand" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
						
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							
                            <h4 class="modal-title" style='color:black;'><b>Προσθήκη Μάρκας</b></h4>
                        </div>
                        <div class="modal-body">
                            
							<style>
							.control-label{
								color:black;
							}
							</style>
							
										 <form class="form-horizontal">

										<div class="form-group">
											<label for="text1" class="control-label col-lg-4">Όνομα :</label>

											<div class="col-lg-8">
												<input type="text" id="brand_name" placeholder="Όνομα" class="form-control"/>
											</div>
										</div>
										<!-- /.form-group -->

									<div class="form-group">
                                                <label class="control-label col-lg-4">Προιόν</label>
                                            
                                                <div class="col-lg-8">
                                                    <select id='select_item'  name='select_item'  class="form-control">
                                                    <option value="">-</option>
                                                    <?php for($i=0;$i<count($b);$i++){?>
                										<option value='<?php echo $b[$i]['id'];?>'> <?php echo $b[$i]['title'];?> </option>
                									<?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                  
                                   		<div class="form-group">
                                                <label class="control-label col-lg-4">Λήγει?</label>
                                            
                                                <div class="col-lg-8">
                                                    <select id='exp_choice'  name='exp_choice'  class="form-control">
                                                    <option value="0">Όχι</option>
                                                    <option value="1">Ναί</option>
                                                    </select>
                                                </div>
                                            </div>
										<!-- /.form-group -->
									</form>
    
							
                        </div>
                        <div class="modal-footer">
							<button type="button" class="btn btn-default" id="add_brand_button">ΟΚ</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
</div>
             
             
 <div id="delete_brand" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
</div>

          <div id="delete_confirm_brand" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
						
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							
                            <h4 class="modal-title" style='color:black;'><b>Διαγραφή Μάρκας</b></h4>
                        </div>
                        <div class="modal-body">
                            
                        </div>
                        <div class="modal-footer">
							<button type="button" class="btn btn-primary" id="delete_button_brand" data-dismiss="modal">Συνέχεια</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">'Ακύρωση</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
</div>


<div id="show_prog" class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
						
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							
                            <h4 class="modal-title" style='color:black;'><b>Πρόγραμμα</b></h4>
                        </div>
                        <div class="modal-body">
                            <div id="pro">
                            </div>
							
                        </div>
                        <div class="modal-footer">
							<button type="button" class="btn btn-default" id="finalize_prog">ΟΚ</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
</div>     