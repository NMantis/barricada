<?php include 'galaria/functions.php';
$a=employee();

?>

<div id="content">
	<div class="outer">
		<div class="inner bg-light lter">



			<div class="col-lg-12">
			
									<div class="col-lg-4">   
                                     </div>   
                                        
                                     <div class="col-lg-4">
                                     <br>             
                                         <div class="col-lg-10">       
                                           <div class="form-group">
                                            <label class="control-label col-lg-4">Προσθήκη Βάρδιας</label>
                                        
                                            <div class="col-lg-8">
                                                <select id='add_shift_pr'  name='add_shift_pra'  class="form-control">
                                                <option value="-">-</option>
                                                    <option value="1">Δευτέρα</option>
                                                    <option value="2">Τρίτη</option>
                                                    <option value="3">Τετάρτη</option>
                                                    <option value="4">Πέμπτη</option>
                                                    <option value="5">Παρασκευή</option>
                                                    <option value="6">Σάββατο</option>
                                                    <option value="7">Κυριακή</option>
                                                </select>
                                            </div>
                                          </div>
                                          
                                          </div>
                                          
                                          <div class="col-lg-10"> 
                                          <br>      
                                           <div class="form-group">
                                            <label class="control-label col-lg-4">Αφαίρεση Βάρδιας</label>
                                        
                                            <div class="col-lg-8">
                                                <select id='minus_shift_pr'  name='minus_shift_pra'  class="form-control">
                                                <option value="-">-</option>
                                                	<option value="1">Δευτέρα</option>
                                                    <option value="2">Τρίτη</option>
                                                    <option value="3">Τετάρτη</option>
                                                    <option value="4">Πέμπτη</option>
                                                    <option value="5">Παρασκευή</option>
                                                    <option value="6">Σάββατο</option>
                                                    <option value="7">Κυριακή</option>
                                                </select>
                                            </div>
                                          </div>
                                          </div>
                                       </div>
                                       
                                       
                                    <div class="row">
                                    	
                                    </div>
                                    
                                    
									<div class="col-lg-1">
									</div>
						
									<div class="col-lg-10">		
									<br>
                                              <div id="collapse4" class="body">
            									<table  class="table table-bordered table-condensed table-hover table-striped">
            										<thead>
            										<tr>
            											<th>Όνομα</th>
            											<th>Επίθετο</th>
            											<th>Δ|Ε</th>
            											<th>Δ</th>
            											<th>Τ</th>
            											<th>Τ</th>
            											<th>Π</th>
            											<th>Π</th>
            											<th>Σ</th>
            											<th>Κ</th>
            										</tr>
            										</thead>
            										<tbody>
            											<?php for($i=0;$i<count($a);$i++){
            												?>
            												<tr>
            													<td style='width : 20%;'><?php echo $a[$i]['name'];?></td>
            													<td style='width : 20%;'><?php echo $a[$i]['last_name'];?></td>
            													
            													<td style='width : 8%;'>
            													<div class="checkbox">
                													<label> <input class="uniform" type="checkbox"
                														name="type" value="<?php echo $a[$i]['id'];?>">
                													</label>
                												</div>
                												
                												
    															</td>
    															
    															<td style='width : 7%;'>
            													<div class="checkbox">
                													<label><input class="uniform" type="checkbox"
                														name="type" value="<?php echo $a[$i]['id'];?>_0_0">Π
                													</label>
                												</div>
                												
                												<div class="checkbox">
                													<label><input class="uniform" type="checkbox"
                														name="type" value="<?php echo $a[$i]['id'];?>_0_1">Β
                													</label>
                												</div>
                												
    															</td>
    															
    															<td style='width : 7%;'>
            													<div class="checkbox">
                													<label><input class="uniform" type="checkbox"
                													name="type" value="<?php echo $a[$i]['id'];?>_1_0">Π
                													</label>
                												</div>
                												
                												<div class="checkbox">
                													<label><input class="uniform" type="checkbox"
                														name="type" value="<?php echo $a[$i]['id'];?>_1_1">Β
                													</label>
                												</div>
                												
    															</td>
    															
    															<td style='width : 7%;'>
            													<div class="checkbox">
                													<label><input class="uniform" type="checkbox"
                													name="type" value="<?php echo $a[$i]['id'];?>_2_0">Π
                													</label>
                												</div>
                												
                												<div class="checkbox">
                													<label><input class="uniform" type="checkbox"
                														name="type" value="<?php echo $a[$i]['id'];?>_2_1">Β
                													</label>
                												</div>
                												
    															</td>
    															
    															<td style='width : 7%;'>
            													<div class="checkbox">
                													<label><input class="uniform" type="checkbox"
                														name="type" value="<?php echo $a[$i]['id'];?>_3_0">Π
                													</label>
                												</div>
                												
                												<div class="checkbox">
                													<label><input class="uniform" type="checkbox"
                													name="type" value="<?php echo $a[$i]['id'];?>_3_1">Β
                													</label>
                												</div>
                												
    															</td>
    															
    															<td style='width : 7%;'>
            													<div class="checkbox">
                													<label><input class="uniform" type="checkbox"
                														name="type" value="<?php echo $a[$i]['id'];?>_4_0">Π
                													</label>
                												</div>
                												
                												<div class="checkbox">
                													<label><input class="uniform" type="checkbox"
                														name="type" value="<?php echo $a[$i]['id'];?>_4_1">Β
                													</label>
                												</div>
                												
    															</td>
    															
    															<td style='width : 7%;'>
            													<div class="checkbox">
                													<label><input class="uniform" type="checkbox"
                														name="type" value="<?php echo $a[$i]['id'];?>_5_0">Π
                													</label>
                												</div>
                												
                												<div class="checkbox">
                													<label><input class="uniform" type="checkbox"
                														name="type" value="<?php echo $a[$i]['id'];?>_5_1">Β
                													</label>
                												</div>
                												
    															</td>
    															
    															<td style='width : 7%;'>
            													<div class="checkbox">
                													<label><input class="uniform" type="checkbox"
                													name="type" value="<?php echo $a[$i]['id'];?>_6_0">Π
                													</label>
                												</div>
                												
                												<div class="checkbox">
                													<label><input class="uniform" type="checkbox"
                														name="type" value="<?php echo $a[$i]['id'];?>_6_1">Β
                													</label>
                												</div>
                												
    															</td>
    															
            												</tr>
            											<?php } ?>
            										</tbody>
            										
            									</table>
            								</div>
            								
            								<center><button  class="btn btn-metis-5 btn-bg btn-grad" id="program_strt">εκδοση προγραμματος</button></center>
                                        
                                            </div>
                                            
                                     




			</div>
		</div>
	</div>
	<br> <br> <br>

</div>



