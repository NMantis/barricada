<?php include 'galaria/functions.php'; 
$a=category(1);
?>

<style type="text/css">
#form_add .tab-content {
    margin-top: 20px;
}
</style>


<div id="content">
	<div class="outer">
		<div class="inner bg-light lter">
			<div class="col-lg-12">
			

<div class="row">
	<div class="col-lg-2">	
	</div>
	
	
    <div class="col-lg-8">			
                <div class="box">
                    <header>
                        <h5>Προσθήκη</h5>
                    </header>
                    
                    <br>
                    <br>
                   <form id="form_add" class="form-horizontal">
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#basic-tab" data-toggle="tab">Κατηγορία</a></li>
                            <li><a href="#database-tab" data-toggle="tab" id="sec_title"></a></li>
                        </ul>
                    
                        <div class="tab-content">
                            <!-- First tab -->
                            <div class="tab-pane active" id="basic-tab">
                               
                                   <div class="form-group">
                                    <label class="control-label col-lg-4">Κατηγορία</label>
                                
                                    <div class="col-lg-8">
                                        <select id='select_cat'  name='select_cat'  class="form-control">
                                        <option value="">-</option>
                                        <?php for($i=0;$i<count($a);$i++){?>
    										<option value='<?php echo $a[$i]['id'];?>'> <?php echo $a[$i]['title'];?> </option>
    									<?php } ?>
                                        </select>
                                    </div>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Είδος</label>
                                
                                    <div class="col-lg-8">
                                        <select id='select_prod' name='select_prod' class="form-control">
    									 <option value="">-</option>
                                        </select>
                                    </div>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Μάρκα</label>
                                
                                    <div class="col-lg-8">
                                        <select id='select_brand' name='select_brand' class="form-control">
                                        <option value="">-</option>  
                                        </select>
                                    </div>
                                </div>
                               
                            </div>

                            <!-- Second tab -->
                            <div class="tab-pane" id="database-tab">
                                
                                    <div class="form-group">
                                        <label class="control-label col-lg-4" for="dp_par">Ημερ.Παραλαβής</label>
                
                                        <div class="col-lg-8">
                                            <div class="input-group input-append date" id="dp_par">
                                                <input class="form-control" type="text" id="dp_par_v" readonly>
                                                <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                               		 </div>
                               		 
                               		 
                               		  <div class="form-group">
                                        <label class="control-label col-lg-4">Απόθεμα</label>
                                    
                                        <div class="col-lg-8">
                                            <input type="number"   id="c_quantity" name="c_quantity" readonly>
                                        </div>
                               		 </div>
                               		 
                               		 
                               		 
                               		 <div class="form-group">
                                        <label class="control-label col-lg-4">Ποσότητα</label>
                                    
                                        <div class="col-lg-8">
                                            <input type="number"   id="quantity" min=1 name="quantity" value='1'>
                                        </div>
                               		 </div>
                               		 
                               		 
                               		 <div class="form-group">
                                        <label class="control-label col-lg-4">Τιμή μονάδας</label>
                                    
                                        <div class="col-lg-8">
                                            <input type="number" step="0.05" min=0 id="price_pu" name="price_pu" >
                                        </div>
                               		 </div>
                               		 
                                
                               		
                               		 <div class="form-group" id="exp_div">
                                        <label class="control-label col-lg-4" for="dp_exp">Ημερ.λήξεις</label>
                
                                        <div class="col-lg-8">
                                            <div class="input-group input-append date" id="dp_exp">
                                                <input class="form-control" type="text" id="dp_exp_v" readonly>
                                                <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                               		 </div>
                                
                            </div>

      					  <!-- Previous/Next buttons -->
                            <ul class="pager wizard">
                                <li class="previous"><a class="btn btn-metis-1 btn-lg btn-round" style='color: black;' href="javascript: void(0);">Back</a></li>
                                <li class="next"><a class="btn btn-metis-2 btn-lg btn-round"  style='color: black;' href="javascript: void(0);">Next</a></li>
                            </ul>
                        </div>
                    </form>

                </div>
            </div>
    </div>
			
			

			</div>

		</div>
		<!-- /.inner -->
	</div>
	<!-- /.outer -->
</div>
