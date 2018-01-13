
$(document).ready(function() {
    $('#form_add')
    .bootstrapWizard({
        tabClass: 'nav nav-pills',
        onTabClick: function(tab, navigation, index) {
            return validateTab(index);
        },
        onNext: function(tab, navigation, index) {
        	
        	
            var numTabs    = $('#form_add').find('.tab-pane').length,
                isValidTab = validateTab(index - 1);
            if (!isValidTab) {
                return false;
            }

            if (index === numTabs) {
            	
            	var e = document.getElementById("select_brand");
            	var brand_id = e.options[e.selectedIndex].value;
            	
            	e = document.getElementById("dp_par_v");
            	
            	var dp_par =  e.value;
            	
                e = document.getElementById("quantity");
                
                var quantity = e.value;
                
            	e = document.getElementById("price_pu");
            	
            	var price_pu = e.value;
            	
            	e = document.getElementById("dp_exp_v");
            	
            	var dp_exp = e.value;
            	
            	if((quantity == "") || (price_pu == ""))
            	{
            		alert('Ξεκόλα');
            		return false;
            	}
            	
            	var parts = dp_par.split('-');
            	//please put attention to the month (parts[0]), Javascript counts months from 0:
            	// January - 0, February - 1, etc
            	
            	var mydate = new Date(parts[2],parts[0]-1,parts[1]); 

            	dp_par = mydate.toISOString().slice(0, 19).replace('T', ' ');
            	
            	
            	var parts = dp_exp.split('-');
            	//please put attention to the month (parts[0]), Javascript counts months from 0:
            	// January - 0, February - 1, etc
            	
            	var mydate = new Date(parts[2],parts[0]-1,parts[1]); 
            	
            	dp_exp =  mydate.toISOString().slice(0, 19).replace('T', ' ');
            	//edw add_unit
            	var j=0;
            	for(var i=0; i<quantity; i++)
            	{
            	 $.post("galaria/function_controler.php", //Required URL of the page on server
    			   { // Data Sending With Request To Server
    					  function_c:"add_unit",
    					  field_1:brand_id,
    					  field_2:price_pu,
    					  field_3:dp_par,
    					  field_4:dp_exp,
    			   },
    			   function(response,status)
    			   { // Required Callback Function
    					
    					j++;
    					if(j == quantity)
                		{
    						window.location.href = 'index.php?page=add_pro';
                		}
    				
    			   });
            	}
            	
                
            }
            else
        	{
            	var e = document.getElementById("select_cat");
            	var value = e.options[e.selectedIndex].value;
            	var text = e.options[e.selectedIndex].text;
            	
            	var e = document.getElementById("select_brand");
            	var value1 = e.options[e.selectedIndex].value;
            	var text1 = e.options[e.selectedIndex].text;
            	
            	var e = document.getElementById("select_prod");
            	var value2 = e.options[e.selectedIndex].value;
            	var text2 = e.options[e.selectedIndex].text;
            	
            	if((value == "") || (value1 == "") || (value2 == ""))
            	{
            		alert('Ξεκόλα');
            		return false;
            	}
            	 
        	}

            return true;
        },
        onPrevious: function(tab, navigation, index) {
            return validateTab(index + 1);
        },
        onTabShow: function(tab, navigation, index) {
            // Update the label of Next button when we are at the last tab
            var numTabs = $('#form_add').find('.tab-pane').length;
            $('#form_add')
                .find('.next')
                    .removeClass('disabled')    // Enable the Next button
                    .find('a')
                    .html(index === numTabs - 1 ? 'Add Product' : 'Next');

  
        }
    });
    
    
    
    $('#form_rem')
    .bootstrapWizard({
        tabClass: 'nav nav-pills',
        onTabClick: function(tab, navigation, index) {
            return validateTab_rem(index);
        },
        onNext: function(tab, navigation, index) {
        	
        	
            var numTabs    = $('#form_rem').find('.tab-pane').length,
                isValidTab = validateTab_rem(index - 1);
            if (!isValidTab) {
                return false;
            }

            if (index === numTabs) {
            	
            	var e = document.getElementById("select_brand_sell");
            	var brand_id = e.options[e.selectedIndex].value;
            	
            	e = document.getElementById("dp_sell_v");
            	
            	var dp_par =  e.value;
            	
                e = document.getElementById("quantity_sp_sell");
                
                var quantity = e.value;
               
            	
            	if(quantity == "") 
            	{
            		alert('Ξεκόλα');
            		return false;
            	}
            	
            	var parts = dp_par.split('-');
            	//please put attention to the month (parts[0]), Javascript counts months from 0:
            	// January - 0, February - 1, etc
            	
            	var mydate = new Date(parts[2],parts[0]-1,parts[1]); 

            	dp_par = mydate.toISOString().slice(0, 19).replace('T', ' ');
            	
            	
            	
            	//edw add_unit
            	var j=0;
            	for(var i=0; i<quantity; i++)
            	{
            	 $.post("galaria/function_controler.php", //Required URL of the page on server
    			   { // Data Sending With Request To Server
    					  function_c:"rem_unit",
    					  field_1:brand_id,
    					  field_2:dp_par,
    			   },
    			   function(response,status)
    			   { // Required Callback Function
    					
    					j++;
    					if(j == quantity)
                		{
    						window.location.href = 'index.php?page=rem_pro';
                		}
    				
    			   });
            	}
            	
                
            }
            else
        	{
            	var e = document.getElementById("select_cat_sell");
            	var value = e.options[e.selectedIndex].value;
            	var text = e.options[e.selectedIndex].text;
            	
            	var e = document.getElementById("select_brand_sell");
            	var value1 = e.options[e.selectedIndex].value;
            	var text1 = e.options[e.selectedIndex].text;
            	
            	var e = document.getElementById("select_prod_sell");
            	var value2 = e.options[e.selectedIndex].value;
            	var text2 = e.options[e.selectedIndex].text;
            	
            	if((value == "") || (value1 == "") || (value2 == ""))
            	{
            		alert('Ξεκόλα');
            		return false;
            	}
            	 
        	}

            return true;
        },
        onPrevious: function(tab, navigation, index) {
            return validateTab_rem(index + 1);
        },
        onTabShow: function(tab, navigation, index) {
            // Update the label of Next button when we are at the last tab
            var numTabs = $('#form_rem').find('.tab-pane').length;
            $('#form_rem')
                .find('.next')
                    .removeClass('disabled')    // Enable the Next button
                    .find('a')
                    .html(index === numTabs - 1 ? 'Add Product' : 'Next');

  
        }
    });
    
    
    function validateTab_rem(index) {
        var fv   = $('#form_rem').data('formValidation'), // FormValidation instance
            // The current tab
            $tab = $('#form_rem').find('.tab-pane').eq(index);



       

        return true;
    }

function validateTab(index) {
    var fv   = $('#form_add').data('formValidation'), // FormValidation instance
        // The current tab
        $tab = $('#form_add').find('.tab-pane').eq(index);



   

    return true;
}

});
