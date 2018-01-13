var payments;
var emps_by_hour

var delete_emp_id;
var delete_item_id;
var delete_cat_id;
var delete_brand_id;
var brand_id;
var prog_final;
var date = new Date();
var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
$(".dp_stock_history").datepicker({});


$('#dp_par').datepicker({
    format: 'mm-dd-yyyy',
});

$('#dp_par').datepicker('setDate', today);


$('#dp_exp').datepicker({
    format: 'mm-dd-yyyy',
});

$('#dp_exp').datepicker('setDate', today);


$('#dp_sell').datepicker({
    format: 'mm-dd-yyyy',
});

$('#dp_sell').datepicker('setDate', today);

$('#dp_stock_hist').datepicker({
    format: 'yyyy-mm-dd',
});



$('#dp_stock_hist').datepicker('setDate', today);

$('#dp_pay_hist').datepicker({
    format: 'yyyy-mm-dd',

});

$('#dp_pay_hist').datepicker('setDate', today);


$('#delete_emp').on('shown.bs.modal', function(e) {
  $('#delete_emp').modal('hide');
  delete_emp_id = e.relatedTarget.dataset.yourparameter;
  $('#delete_confirm_emp').modal('show');
});


$('#dp_prog_hist').datepicker({
    format: 'mm-dd-yyyy',
});



$(document).on("click", "#delete_button_emp", function () 
{
		   $.post("galaria/function_controler.php", //Required URL of the page on server
		   { // Data Sending With Request To Server
				  function_c:"status_employees",
				  field_1:'0',
				  field_2:delete_emp_id,
		   },
		   function(response,status)
		   { // Required Callback Function
			location.reload();
		   });
});

$(document).on("click", "#add_emp_button", function () 
{
	

	var emp_name = document.getElementById("emp_name").value;
	var emp_last_name = document.getElementById("emp_last_name").value;
	var emp_afm = document.getElementById("emp_afm").value;

	
	if((emp_name != '') && (emp_last_name != '') && (emp_afm != ''))
	{		
	
	
	   $.post("galaria/function_controler.php", //Required URL of the page on server
	   { // Data Sending With Request To Server
			  function_c:"add_emp",
			  field_1:emp_name,
			  field_2:emp_last_name,
			  field_3:emp_afm,
	   },
	   function(response,status)
	   { // Required Callback Function
			

			window.location.href = 'index.php?page=empl_home';
		
	   });
	}
	else
	{
		alert('βαλτα όλα');
	}
	   
});

function createArray(length) {
    var arr = new Array(length || 0),
        i = length;

    if (arguments.length > 1) {
        var args = Array.prototype.slice.call(arguments, 1);
        while(i--) arr[length-1 - i] = createArray.apply(this, args);
    }

    return arr;
}



$(document).on("click", "#payment_emp_button", function () 
{
 if(document.getElementById("payment_ernings").value != "")
 {
	var table = createArray(20 , 5);
	var count = 0;
	
	
	
	for (var x=0; x<30; x++) {
	    if (document.getElementById('work_h_' + x)) {
	    	var el = document.getElementById("work_h_" + x);
	    	table[count][1] = el.value;
	    	table[count][0] = el.getAttribute("name");
	    	table[count][2] = document.getElementById("work_b_" + x).value;
	    	table[count][3] = document.getElementById("name_" + x).innerHTML;
	    	table[count][4] = document.getElementById("last_" + x).innerHTML;
	    	
	    	
	    	if(table[count][1] == "")
	    		table[count][1] =0;
	    	if(table[count][2] == "")
	    		table[count][2] =0;
	    	
	    	count++;
	    }
	}
	
	payments = table.filter(function(n){ return n != undefined }); 
	//console.log(payments);
	
	var emp_count = 0;
	var total_work_h = 0;
	var total_forgoten = 0;
	for(var i = 0; i<payments.length; i++)
	 {
		
		if((payments[i][0] != "") && (payments[i][0] != "0") && (payments[i][0] != null))
		{
			if((payments[i][1] != "") && (payments[i][1] != "0") && (payments[i][0] != null))
			{
				emp_count++;
				total_work_h = total_work_h + parseFloat(payments[i][1]);
			}
			if((payments[i][2] != "") && (payments[i][2] != "0") && (payments[i][2] != null))
			{
				total_forgoten = total_forgoten + parseFloat(payments[i][2]);
			}
		}
	 
	 }
	

	 emps_by_hour =0;

	
	 var total = document.getElementById("payment_ernings").value;
	 
	 total =  parseFloat(total);
     emps_by_hour = (total - total_forgoten) / total_work_h;
    
     var div = document.getElementById("payment_div");
     
     var cont = "";
    
     cont += "<table  class='table table-bordered table-condensed table-hover table-striped'>" +
     		"<thead>" +
     		"<tr>" +
     		"<th>A/A</th>" +
     		"<th>Όνομα</th>" +
     		"<th>Επίθετο</th>" +
     		"<th>Ώρες</th>" +
     		"<th>Ποσό Πληρομής(€)</th>" +
     		"</tr>" +
     		"</thead>" +
     		"<tbody>";

     var cf =1;
     var k =0;
     var total_w_h = 0;
    while(((payments[k][0] != "") && (payments[k][0] != "0") && (payments[k][0] != null)))
    	 {
    	// alert('edw1');
	    	 if((payments[k][0] != "") && (payments[k][0] != "0") && (payments[k][0] != null))
	 		{
	    		 if((payments[k][1] != "") && (payments[k][1] != "0") && (payments[k][0] != null))
		 			{
	    			 cont += "<tr>"+
			    	 	"<td style='width : 5%;'>"+ cf + "</td>"+
			    	 	"<td style='width : 30%;'>"+ payments[k][3] + "</td>"+
			    	 	"<td style='width : 30%;'>"+ payments[k][4] + "</td>"+
			    	 	"<td style='width : 30%;'>"+ payments[k][1] + "</td>"+
			    	 	"<td style='width : 30%;'>"+ Number((((parseFloat(payments[k][1]) * emps_by_hour) + parseFloat(payments[k][2]))).toFixed(2)); + "</td>"+
		    	 	"</tr>";	
	    			 cf++;
	    			 total_w_h = total_w_h + parseFloat(payments[k][1]);
		 			}
	    		 else if((payments[k][2] != "") && (payments[k][2] != "0") && (payments[k][2] != null))
	    			 {
	    			 cont += "<tr>"+
			    	 	"<td style='width : 5%;'>"+ cf + "</td>"+
			    	 	"<td style='width : 30%;'>"+ payments[k][3] + "</td>"+
			    	 	"<td style='width : 30%;'>"+ payments[k][4] + "</td>"+
			    	 	"<td style='width : 30%;'>"+ payments[k][1] + "</td>"+
			    	 	"<td style='width : 30%;'>"+ (parseFloat(payments[k][2])) + "</td>"+
			    	 	"</tr>";
	    			 cf++;
	    			 }
	 		}
    	 	k++;
    	 }
		

	
     cont +="</tbody>"+
	          "</table>";
     
    div.innerHTML = cont;
     document.getElementById("total_h").innerHTML = total_w_h;
    $("#payment_emp_modal").modal("show");

 }
 else
	 {
	 	alert('βαλε εσοδα');
	 }
});


$(document).on("click", "#add_pay_button", function () 
		{
			var k =0;
			while(((payments[k][0] != "") && (payments[k][0] != "0") && (payments[k][0] != null)))
			 {
		    		 if((payments[k][1] != "") && (payments[k][1] != "0") && (payments[k][0] != null))  
					 {
		    			var num =  Number((((parseFloat(payments[k][1]) * emps_by_hour) + parseFloat(payments[k][2]))).toFixed(2));
		    			var dt = new Date().toISOString().slice(0, 19).replace('T', ' ');
		    			
					   $.post("galaria/function_controler.php", //Required URL of the page on server
					   { // Data Sending With Request To Server
							  function_c:"add_pay",
							  field_1:payments[k][0],
							  field_2:num,//pay
							  field_3:dt,//date
							  field_4:payments[k][1],//hours
					   },
					   function(response,status)
					   { // Required Callback Function
						//console.log(response);
					   });
		 		    } else if((payments[k][2] != "") && (payments[k][2] != "0") && (payments[k][2] != null))
		    		{
				    			var num = parseFloat(payments[k][2]);
				    			var dt = new Date().toISOString().slice(0, 19).replace('T', ' ');
				    			
							   $.post("galaria/function_controler.php", //Required URL of the page on server
							   { // Data Sending With Request To Server
									  function_c:"add_pay",
									  field_1:payments[k][0],
									  field_2:num,//pay
									  field_3:dt,//date
									  field_4:0,//hours
							   },
							   function(response,status)
							   { // Required Callback Function
								//console.log(response);
							   });
				 	 }
		    		 k++;		 
		     }
		    	
		 window.location.href = 'index.php?page=empl_pay';
			
			   
		});




function removeOptions(selectbox)
{
    var i;
    for(i = selectbox.options.length - 1 ; i >= 0 ; i--)
    {
        selectbox.remove(i);
    }
    
    
}

function addOptions(selectbox , text , value)
{
    var x = selectbox;
    var option = document.createElement("option");
    option.text = text;
    option.value = value;
    x.add(option);
}



if(document.getElementById('select_cat') !== null)
{
	document.getElementById('select_cat').onchange = function() {
		  var index = this.selectedIndex;
		  var inputValue = this.children[index].value;
		  document.getElementById("sec_title").innerHTML = "";
		  removeOptions(document.getElementById("select_prod"));
		  addOptions(document.getElementById("select_prod") , "-" , "");
		  
		  removeOptions(document.getElementById("select_brand"));
		  addOptions(document.getElementById("select_brand") , "-" , "");
		  
		  
		  $.post("galaria/function_controler.php", //Required URL of the page on server
				   { // Data Sending With Request To Server
						  function_c:"select_cat",
						  field_1:inputValue,
				   },
				   function(response,status)
				   { // Required Callback Function
	
					   var data = JSON.parse(response);
	
					   for(var i =0; i<data.length; i++)
						   {
						   		addOptions(document.getElementById("select_prod") , data[i]['title'] , data[i]['id']);
						   }
			});
	}
}


if(document.getElementById('select_prod') !== null)
{
	document.getElementById('select_prod').onchange = function() {
		  var index = this.selectedIndex;
		  var inputValue = this.children[index].value;
		  document.getElementById("sec_title").innerHTML = "";
		  
		  removeOptions(document.getElementById("select_brand"));
		  addOptions(document.getElementById("select_brand") , "-" , "");
	
		  
		  $.post("galaria/function_controler.php", //Required URL of the page on server
				   { // Data Sending With Request To Server
						  function_c:"select_brand",
						  field_1:inputValue,
				   },
				   function(response,status)
				   { // Required Callback Function
	
					   var data = JSON.parse(response);
	
					   for(var i =0; i<data.length; i++)
						   {
						   		addOptions(document.getElementById("select_brand") , data[i]['title'] , data[i]['id']);
						   }
			});
	}
}





if(document.getElementById('select_brand') !== null)
{
	document.getElementById('select_brand').onchange = function() {
		  var index = this.selectedIndex;
		  var inputValue = this.children[index].value;
		  var inputext = this.children[index].text;
		  var brand_id = 0;
		  document.getElementById('c_quantity').value = '';
		 
		  $("#exp_div").hide();
		  
		  
		  document.getElementById("sec_title").innerHTML = inputext;
		  $.post("galaria/function_controler.php", //Required URL of the page on server
				   { // Data Sending With Request To Server
						  function_c:"select_brand_b",
						  field_1:inputValue,
				   },
				   function(response,status)
				   { // Required Callback Function
					   var data = JSON.parse(response);
					   var brand_id = data[0]['id'];
					   document.getElementById('c_quantity').value = data[0]['count'];
					   //console.log(data);
			   		if(data[0]['exp_stat'] == '1')
			   		{
			   			$("#exp_div").show();
			   		}
						   		
						   
			});
	}
}


if(document.getElementById('select_brand_sell') !== null)
{
	document.getElementById('select_brand_sell').onchange = function() {
		  var index = this.selectedIndex;
		  var inputValue = this.children[index].value;
		  var inputext = this.children[index].text;
		  var brand_id = 0;
		  var brand_id = inputValue;
		 
		  $("#exp_div").hide();
		  
		  
		  document.getElementById("sec_title").innerHTML = inputext;
		  $.post("galaria/function_controler.php", //Required URL of the page on server
				   { // Data Sending With Request To Server
						  function_c:"count_units",
						  field_1:inputValue,
				   },
				   function(response,status)
				   { // Required Callback Function
					   var data = JSON.parse(response);
					   document.getElementById('c_quantity_sell').value = data[0]['count'];
					   var input = document.getElementById("quantity_sp_sell");
					    input.setAttribute("max", data[0]['count']);   
			});
	}
}



if(document.getElementById('select_prod_sell') !== null)
{
	document.getElementById('select_prod_sell').onchange = function() {
		  var index = this.selectedIndex;
		  var inputValue = this.children[index].value;
		  document.getElementById("sec_title").innerHTML = "";
		  
		  removeOptions(document.getElementById("select_brand_sell"));
		  addOptions(document.getElementById("select_brand_sell") , "-" , "");
	
		  
		  $.post("galaria/function_controler.php", //Required URL of the page on server
				   { // Data Sending With Request To Server
						  function_c:"select_brand",
						  field_1:inputValue,
				   },
				   function(response,status)
				   { // Required Callback Function
	
					   var data = JSON.parse(response);
	
					   for(var i =0; i<data.length; i++)
						   {
						   		addOptions(document.getElementById("select_brand_sell") , data[i]['title'] , data[i]['id']);
						   }
			});
	}
}




if(document.getElementById('select_cat_sell') !== null)
{
	document.getElementById('select_cat_sell').onchange = function() {
		  var index = this.selectedIndex;
		  var inputValue = this.children[index].value;
		  document.getElementById("sec_title").innerHTML = "";
		  removeOptions(document.getElementById("select_prod_sell"));
		  addOptions(document.getElementById("select_prod_sell") , "-" , "");
		  
		  removeOptions(document.getElementById("select_brand_sell"));
		  addOptions(document.getElementById("select_brand_sell") , "-" , "");
		  
		  
		  $.post("galaria/function_controler.php", //Required URL of the page on server
				   { // Data Sending With Request To Server
						  function_c:"select_cat",
						  field_1:inputValue,
				   },
				   function(response,status)
				   { // Required Callback Function
	
					   var data = JSON.parse(response);
	
					   for(var i =0; i<data.length; i++)
						   {
						   		addOptions(document.getElementById("select_prod_sell") , data[i]['title'] , data[i]['id']);
						   }
			});
	}
}


$(document).on("click", "#add_cat_button", function () 
		{
			

			var cat_name = document.getElementById("cat_name").value;
			
			
			if(cat_name != '')
			{		
			
			
			   $.post("galaria/function_controler.php", //Required URL of the page on server
			   { // Data Sending With Request To Server
					  function_c:"add_cat",
					  field_1:cat_name,
					 
			   },
			   function(response,status)
			   { // Required Callback Function
					
					window.location.href = 'index.php?page=set_kava';
				
			   });
			}
			else
			{
				alert('βάλτο');
			}
			   
		});

$('#delete_cat').on('shown.bs.modal', function(e) {
	  $('#delete_cat').modal('hide');
	  delete_cat_id = e.relatedTarget.dataset.yourparameter;
	  $('#delete_confirm_cat').modal('show');
	});




	$(document).on("click", "#delete_button_cat", function () 
	{
			   $.post("galaria/function_controler.php", //Required URL of the page on server
			   { // Data Sending With Request To Server
					  function_c:"status_categories",
					  field_1:'0',
					  field_2:delete_cat_id,
			   },
			   function(response,status)
			   { // Required Callback Function
				location.reload();
			   });
	});

	
	
	$(document).on("click", "#add_item_button", function () 
			{
				

				var item_name = document.getElementById("item_name").value;
				var e = document.getElementById("cat_select");
            	var cat_id = e.options[e.selectedIndex].value;
				
				
				
				if((item_name != '')&&(cat_id != ''))
				{		
				
				
				   $.post("galaria/function_controler.php", //Required URL of the page on server
				   { // Data Sending With Request To Server
						  function_c:"add_item",
						  field_1:item_name,
						  field_2:cat_id,
				   },
				   function(response,status)
				   { // Required Callback Function
						
						window.location.href = 'index.php?page=set_kava';
					
				   });
				}
				else
				{
					alert('βάλτα όλα');
				}
				   
			});
	
	$('#delete_item').on('shown.bs.modal', function(e) {
		  $('#delete_item').modal('hide');
		  delete_item_id = e.relatedTarget.dataset.yourparameter;
		  $('#delete_confirm_item').modal('show');
		});




		$(document).on("click", "#delete_button_item", function () 
		{

				   $.post("galaria/function_controler.php", //Required URL of the page on server
				   { // Data Sending With Request To Server
						  function_c:"status_items",
						  field_1:'0',
						  field_2:delete_item_id,
				   },
				   function(response,status)
				   { // Required Callback Function
					location.reload();
				   });
		});
	
	
	

$(document).on("click", "#add_brand_button", function () 
{
	

	var brand_name = document.getElementById("brand_name").value;
	var e = document.getElementById("select_item");
	var item_id = e.options[e.selectedIndex].value;
	
	e = document.getElementById("exp_choice");
	var exp_choice = e.options[e.selectedIndex].value;
	
	
	
	if((brand_name != '')&&(item_id != ''))
	{		
	
	
	   $.post("galaria/function_controler.php", //Required URL of the page on server
	   { // Data Sending With Request To Server
			  function_c:"add_brand",
			  field_1:brand_name,
			  field_2:item_id,
			  field_3:exp_choice,
	   },
	   function(response,status)
	   { // Required Callback Function
			
			window.location.href = 'index.php?page=set_kava';
		
	   });
	}
	else
	{
		alert('βάλτα όλα');
	}
	   
});

$('#delete_brand').on('shown.bs.modal', function(e) {
	  $('#delete_brand').modal('hide');
	  delete_brand_id = e.relatedTarget.dataset.yourparameter;
	  $('#delete_confirm_brand').modal('show');
	});




	$(document).on("click", "#delete_button_brand", function () 
	{
			   $.post("galaria/function_controler.php", //Required URL of the page on server
			   { // Data Sending With Request To Server
					  function_c:"status_brand",
					  field_1:'0',
					  field_2:delete_brand_id,
			   },
			   function(response,status)
			   { // Required Callback Function
				location.reload();
			   });
	});
	
	
	
	function getCheckedBoxes(chkboxName) {
		  var checkboxes = document.getElementsByName(chkboxName);
		  var checkboxesChecked = [];
		  // loop over them all
		  for (var i=0; i<checkboxes.length; i++) {
		     // And stick the checked ones onto an array...
		     if (checkboxes[i].checked) {
		        checkboxesChecked.push(checkboxes[i].value);
		     }
		  }
		  // Return the array if it is non-empty, or null
		  return checkboxesChecked.length > 0 ? checkboxesChecked : null;
		}

		
	
	
$(document).on("click", "#program_strt", function () 
{
	// Call as
	var checkedBoxes = getCheckedBoxes("type");
			//console.log(checkedBoxes);
			
	var e = document.getElementById("add_shift_pr");
	var day_plush = e.options[e.selectedIndex].value;
	
	var e = document.getElementById("minus_shift_pr");
	var day_minus = e.options[e.selectedIndex].value;
	

	
	
			
	 $.post("galaria/function_controler.php", //Required URL of the page on server
			   { // Data Sending With Request To Server
					  function_c:"test",
					  field_1:checkedBoxes,
					  field_2:day_plush,
					  field_3:day_minus,
			   },
			   function(response,status)
			   { // Required Callback Function
				   //console.log(response);
				   var data=JSON.parse(response);
				   //console.log(data);
				    prog_final=data;
				   
				    
				    $.post("galaria/function_controler.php", //Required URL of the page on server
							   { // Data Sending With Request To Server
									  function_c:"find_last_date",
							   },
							   function(response,status)
							   { // Required Callback Function
								 
								   var data1=JSON.parse(response);
								   //console.log(data);
								   var curr = new Date(data1); // get current date
									var first = curr.getDate() - curr.getDay(); // First day is the day of the month - the day of the week
									var last = first + 6; // last day is the first day + 6
									first = first + 1;
									last = last + 2;
									var lastday = new Date(curr.setDate(last)).toISOString().slice(0, 19).replace('T', ' ');
									var firstday = new Date(curr.setDate(first)).toISOString().slice(0, 19).replace('T', ' ');
									
									var first_days = new Array();
									for(var j=0;j<7;j++)
										{
											first = first + 1;
											first_days[j] = new Date(curr.setDate(first)).toISOString().slice(0, 19).replace('T', ' ');
										}
									
									
									
									
									var div = document.getElementById("pro");
								     
								     var cont = "";
								    
								     cont += 

										 "<div id='collapse4'>" +
										  "<div id='row5'>"+
										  "</div>"+
								    	 	"<table  id='view_pro' class='table table-bordered table-condensed table-hover table-striped'>" +
								     		"<thead>" +
								     		"<tr>" +
								     		"<th>Βάρδια</th>" +
								     		"<th>Δευτέρα ("+ first_days[0].split(" ")[0].split("-")[2] +"-"+ first_days[0].split(" ")[0].split("-")[1]  +")</th>" +
								     		"<th>Τρίτη ("+ first_days[1].split(" ")[0].split("-")[2] +"-"+ first_days[0].split(" ")[0].split("-")[1]  +")</th>" +
								     		"<th>Τετάρτη ("+ first_days[2].split(" ")[0].split("-")[2] +"-"+ first_days[0].split(" ")[0].split("-")[1]  +")</th>" +
								     		"<th>Πέμπτη ("+ first_days[3].split(" ")[0].split("-")[2] +"-"+ first_days[0].split(" ")[0].split("-")[1]  +")</th>" +
								     		"<th>Παρασκευή ("+ first_days[4].split(" ")[0].split("-")[2] +"-"+ first_days[0].split(" ")[0].split("-")[1]  +")</th>" +
								     		"<th>Σάββατο ("+ first_days[5].split(" ")[0].split("-")[2] +"-"+ first_days[0].split(" ")[0].split("-")[1]  +")</th>" +
								     		"<th>Κυριακή ("+ first_days[6].split(" ")[0].split("-")[2] +"-"+ first_days[0].split(" ")[0].split("-")[1]  +")</th>" +
								     		"</tr>" +
								     		"</thead>" +
								     		"<tbody>";

							
								for(var j=4;j<8;j++){
									
								
									    			 cont += "<tr>";
									    			 if(j==4)
												     		cont += "<td width ='12%'><a style='color : white;'>0</a> <b>Πρωί</b> </td>";
												     	else
												     		cont += "<td width ='12%'><a style='color : white;'>1</a> <b>Βράδι "+(j-4)+"</b> </td>";
									    	    cont += "<td>"+ data[0][j] + "</td>"+
											    	 	"<td>"+ data[1][j] + "</td>"+
											    	 	"<td>"+ data[2][j] + "</td>"+
											    	 	"<td>"+ data[3][j] + "</td>"+
											    	 	"<td>"+ data[4][j] + "</td>"+
											    	 	"<td>"+ data[5][j] + "</td>"+
											    	 	"<td>"+ data[6][j] + "</td>"+
											    	

					 	
										    	 	"</tr>";	
								}
							
									
								     cont +="</tbody>"+
									          "</table>"+
									     		"</div>" +
									     		"</div>" +
									     		"</div>";
								     
								    div.innerHTML = cont;
								    $('#show_prog').modal('show');
								  
								    
									
									
					});	

				   
								
		});
});	

	
	
	
	
	
	
	if(document.getElementById('select_categ') !== null)
	{
		document.getElementById('select_categ').onchange = function() {
			  var index = this.selectedIndex;
			  var inputValue = this.children[index].value;
			  removeOptions(document.getElementById("select_item"));
			  addOptions(document.getElementById("select_item") , "-" , "");

			  
			  
			  $.post("galaria/function_controler.php", //Required URL of the page on server
					   { // Data Sending With Request To Server
							  function_c:"select_cat",
							  field_1:inputValue,
					   },
					   function(response,status)
					   { // Required Callback Function
		
						   var data = JSON.parse(response);
		
						   for(var i =0; i<data.length; i++)
							   {
							   		addOptions(document.getElementById("select_item") , data[i]['title'] , data[i]['id']);
							   }
				});
		}
	}


	if(document.getElementById('select_item') !== null)
	{
		document.getElementById('select_item').onchange = function() {
			  var index = this.selectedIndex;
			  var inputValue = this.children[index].value;

		
			  
			  $.post("galaria/function_controler.php", //Required URL of the page on server
					   { // Data Sending With Request To Server
							  function_c:"units_by_brand",
							  field_1:inputValue,
					   },
					   function(response,status)
					   { // Required Callback Function
						   
						   var data = JSON.parse(response);
						 
						   var div = document.getElementById("row12");
						     
						     var cont = "";
						    
						     cont += 
						    	 "<div class='col-lg-1'>"+
						    	 "</div>" +
						    	 "<div class='col-lg-10'>"+
								 "<div class='box'>"+
								 "<header>"+
								 "<div class='icons'><i class='fa fa-table'></i></div>"+
								 "<h5>Απόθεμα</h5>"+
								 "</header>"+
								 "<div id='collapse4'>" +
								  "<div id='row12'>"+
								  "</div>"+
						    	 	"<table  id='stock_table' class='table table-bordered table-condensed table-hover table-striped'>" +
						     		"<thead>" +
						     		"<tr>" +
						     		"<th>A/A</th>" +
						     		"<th>Μάρκα</th>" +
						     		"<th>Ποσότητα</th>" +
						     		"<th>Τιμή Μονάδος</th>" +
						     		"<th>Ημερομηνία Αγοράς</th>" +
						     		"<th>Ημερομηνία Λήξης</th>" +
						     		"</tr>" +
						     		"</thead>" +
						     		"<tbody>";

						  for(var i=0;i<data.length;i++){
							  if(data[i]['count'] =='0'){
								  data[i]['price'] = '---';
								  data[i]['max']= '---';
								  data[i]['min']= '---';
							  }else{
								  data[i]['max']=data[i]['max'].split(" ")[0];
								  data[i]['min']=data[i]['min'].split(" ")[0];
							  }
							    			 cont += "<tr>"+
									    	 	"<td style='width : 5%;'>"+ (i + 1) +"</td>"+
									    	 	"<td style='width : 20%;'>"+ data[i]['title'] + "</td>"+
									    	 	"<td style='width : 5%;'>"+ data[i]['count'] + "</td>"+
									    	 	"<td style='width : 10%;'>"+ data[i]['price'] + "</td>"+
									    	 	"<td style='width : 30%;'>"+ data[i]['max'] + "</td>"+
									    	 	"<td style='width : 30%;'>"+ data[i]['min'] + "</td>"+
									    	 	
								    	 	"</tr>";	

						  }
							
						     cont +="</tbody>"+
							          "</table>"+
							     		"</div>" +
							     		"</div>" +
							     		"</div>";
						     
						    div.innerHTML = cont;
						    
						    $('#stock_table').dataTable({
						        //         "sDom": "<'pull-right'l>t<'row'<'col-lg-6'f><'col-lg-6'p>>",
						        //         "sPaginationType": "bootstrap",
						        //         "oLanguage": {
						        //             "sLengthMenu": "Show _MENU_ entries"
						        //         }
						      });
					
				});
		}
	}
	
	

	
	$(document).on("click", "#calc_stock_button", function () 
{
	
	var picked_date=new Date(document.getElementById("dp_stock_history").value);
	picked_date.setDate(0);
	var max_date=new Date(document.getElementById("dp_stock_history").value);
	max_date.setDate(1);
	max_date.setMonth(max_date.getMonth()+1);
	var tora=0;
	
	if((today.getMonth()==picked_date.getMonth()+1)&&(today.getFullYear()==picked_date.getFullYear())){
		tora=1;
	}
	
	if((today.getMonth()<picked_date.getMonth()+1)&&(today.getFullYear()<=picked_date.getFullYear())){
		tora=2;
	}
	
		
		
	var n = max_date.toISOString();
	var parts = n.split('T');
	max_date = parts[0];

	n = picked_date.toISOString();
	parts = n.split('T');
	picked_date = parts[0];
	
	
	
		   $.post("galaria/function_controler.php", //Required URL of the page on server
		   { // Data Sending With Request To Server
				  function_c:"count_completed",
				  field_1:picked_date,
				  field_2:max_date,
				  field_3:tora,
				  
		   },
		   function(response,status)
		   { // Required Callback Function
			   //alert(response);
		   var data=JSON.parse(response);
		  
		  
		  var div = document.getElementById("row123");
						     
						     var cont = "";
						    
						     cont += 
						    	 "<div class='col-lg-1'>"+
						    	 "</div>" +
						    	 "<div class='col-lg-10'>"+
								 "<div class='box'>"+
								 "<header>"+
								 "<div class='icons'><i class='fa fa-table'></i></div>"+
								 "<h5>Ιστορικό</h5>"+
								 "</header>"+
								 "<div id='collapse4'>" +
								  "<div id='row123'>"+
								  "</div>"+
						    	 	"<table  id='hist_stock' class='table table-bordered table-condensed table-hover table-striped'>" +
						     		"<thead>" +
						     		"<tr>" +
						     		"<th>A/A</th>" +
						     		"<th>Μάρκα</th>" +
						     		"<th>Απόθεμα(αρχή του μήνα)</th>" +
						     		"<th>Πουλήθηκαν</th>" +
						     		"<th>Αγοράστηκαν</th>" +
						     		"</tr>" +
						     		"</thead>" +
						     		"<tbody>";

						  for(var i=0;i<data.length;i++){
							  if(data[i]['stock'] =='0')
								  data[i]['stock'] = '---';
								if(data[i]['sold'] =='0')
								  data[i]['sold'] = '---';
								  if(data[i]['bought'] =='0')
								  data[i]['bought'] = '---';
								 
							  
							    			 cont += "<tr>"+
									    	 	"<td style='width : 5%;'>"+ (i + 1) +"</td>"+
									    	 	"<td style='width : 20%;'>"+ data[i]['title'] + "</td>"+
									    	 	"<td style='width : 5%;'>"+ data[i]['stock'] + "</td>"+
									    	 	"<td style='width : 10%;'>"+ data[i]['sold'] + "</td>"+
									    	 	"<td style='width : 30%;'>"+ data[i]['bought'] + "</td>"+
									    	 	
								    	 	"</tr>";	

						  }
							
						     cont +="</tbody>"+
							          "</table>"+
							     		"</div>" +
							     		"</div>" +
							     		"</div>";
						     
						    div.innerHTML = cont;
						    
						    $('#hist_stock').dataTable({
						        //         "sDom": "<'pull-right'l>t<'row'<'col-lg-6'f><'col-lg-6'p>>",
						        //         "sPaginationType": "bootstrap",
						        //         "oLanguage": {
						        //             "sLengthMenu": "Show _MENU_ entries"
						        //         }
						      });
					
				});
		});
	
	
	
		$(document).on("click", "#calc_pay_button", function () 
{
	
	var picked_date=new Date(document.getElementById("dp_pay_history").value);
	picked_date.setDate(0);
	var max_date=new Date(document.getElementById("dp_pay_history").value);
	max_date.setDate(1);
	max_date.setMonth(max_date.getMonth()+1);
	
	var n = max_date.toISOString();
	var parts = n.split('T');
	max_date = parts[0];

	n = picked_date.toISOString();
	parts = n.split('T');
	picked_date = parts[0];
	
	

	
		
		   $.post("galaria/function_controler.php", //Required URL of the page on server
		   { // Data Sending With Request To Server
				  function_c:"get_emp_hist",
				  field_1:picked_date,
				  field_2:max_date,
				  
		   },
		   function(response,status)
		   { // Required Callback Function
		   //console.log(response);
		   var data=JSON.parse(response);

		  var div = document.getElementById("row5");
						     
						     var cont = "";
						    
						     cont += 
						    	 "<div class='col-lg-1'>"+
						    	 "</div>" +
						    	 "<div class='col-lg-10'>"+
								 "<div class='box'>"+
								 "<header>"+
								 "<div class='icons'><i class='fa fa-table'></i></div>"+
								 "<h5>Ιστορικό</h5>"+
								 "</header>"+
								 "<div id='collapse4'>" +
								  "<div id='row5'>"+
								  "</div>"+
						    	 	"<table  id='hist_pay' class='table table-bordered table-condensed table-hover table-striped'>" +
						     		"<thead>" +
						     		"<tr>" +
						     		"<th>A/A</th>" +
						     		"<th>Όνομα</th>" +
						     		"<th>Ώρες Εργασίας</th>" +
						     		"<th>Απολαβές</th>" +
						     		"</tr>" +
						     		"</thead>" +
						     		"<tbody>";

					for(var i=0;i<data.length;i++){
							    			 cont += "<tr>"+
									    	 	"<td style='width : 5%;'>"+ (i + 1) +"</td>"+
									    	 	"<td style='width : 20%;'>"+ data[i]['name'] + "</td>"+
									    	 	"<td style='width : 5%;'>"+ data[i]['hours'] + "</td>"+
									    	 	"<td style='width : 10%;'>"+ parseFloat(data[i]['payment']).toFixed(2) + "</td>"+  	 	
								    	 	"</tr>";	

					}
							
						     cont +="</tbody>"+
							          "</table>"+
							     		"</div>" +
							     		"</div>" +
							     		"</div>";
						     
						    div.innerHTML = cont;
						    
						    $('#hist_pay').dataTable({
						        //         "sDom": "<'pull-right'l>t<'row'<'col-lg-6'f><'col-lg-6'p>>",
						        //         "sPaginationType": "bootstrap",
						        //         "oLanguage": {
						        //             "sLengthMenu": "Show _MENU_ entries"
						        //         }
						      });
					
				});
		});
		
		

		$(document).on("click", "#finalize_prog", function () 
				{
			//var dt = new Date().toISOString().slice(0, 19).replace('T', ' ');
			

			
			$.post("galaria/function_controler.php", //Required URL of the page on server
					   { // Data Sending With Request To Server
							  function_c:"find_last_date",
					   },
					   function(response,status)
					   { // Required Callback Function
						 
						   var data=JSON.parse(response);
						   //console.log(data);
							var curr = new Date(data); // get current date
							var first = curr.getDate() - curr.getDay(); // First day is the day of the month - the day of the week
							var last = first + 6; // last day is the first day + 6
							last = last + 1;
							var lastday = new Date(curr.setDate(last)).toISOString().slice(0, 19).replace('T', ' ');
							

							
							//console.log(lastday)
							
							var dt = lastday;
							 $.post("galaria/function_controler.php", //Required URL of the page on server
									   { // Data Sending With Request To Server
											  function_c:"reset_prog",
											  field_1:'0',
									   },
									   function(response,status)
									   { // Required Callback Function
											for(var i=0;i<prog_final.length;i++){
												for(var j=0;j<4;j++){
													if(prog_final[i][j] != '-')
													{
														if(j==0)
															var shift=0;
														else
															var shift=1;
														
													   $.post("galaria/function_controler.php", //Required URL of the page on server
													   { // Data Sending With Request To Server
															  function_c:"in_prog",
															  field_1:prog_final[i][j],
															  field_2:dt,
															  field_3:shift,
															  field_4:'1',
															  field_5:"date"+(i+1),
													   },
													   function(response,status)
													   { // Required Callback Function
															
														
													   });
													}
												}
											}
											$('#show_prog').modal('hide');
											
									   });  
							
					   }); 
			
			
			
				});	
		
		
		
		
		
		
		$(document).on("click", "#calc_prog_button", function () 
				{
					
					var picked_date=new Date(document.getElementById("dp_prog_history").value);
					
					var curr = new Date(picked_date); // get current date
					var first = curr.getDate() - curr.getDay(); // First day is the day of the month - the day of the week
					var last = first + 6; // last day is the first day + 6
					first = first + 1;
					last = last + 2;
					var lastday = new Date(curr.setDate(last)).toISOString().slice(0, 19).replace('T', ' ');
					var firstday = new Date(curr.setDate(first)).toISOString().slice(0, 19).replace('T', ' ');
					
					var first_days = new Array();
					for(var j=0;j<7;j++)
						{
							first = first + 1;
							first_days[j] = new Date(curr.setDate(first)).toISOString().slice(0, 19).replace('T', ' ');
						}
					
					
					var res = firstday.split(" ");
					 var div = document.getElementById("row1234");

						   $.post("galaria/function_controler.php", //Required URL of the page on server
						   { // Data Sending With Request To Server
								  function_c:"find_prog_date",
								  field_1:res[0],
								  
						   },
						   function(response,status)
						   { // Required Callback Function
							   //console.log(response);
							   if(response != 0)
							   {
							   var data=JSON.parse(response);
							   
							   
						    	
							    	 for(var j=1;j<8;j++)
								     {
							    		 var ct =0;
							    		 for(var a = 0; a < data.length; a++)
								    	 	{
							    			 if((data[a]['day'] == ('date'+j)))
						    	 				{
							    				 	ct++;
						    	 				}
								    	 	}
							    		 //console.log(ct);
							    		 for(var t = ct; t < 4; t++)
								    	 {
							    			var str = response.substring(0, response.length - 1);
							    			str += ',{"date":" ","id_e_employees":"-","shift":"1","day":"'+('date'+j)+'","last_name":"-"}';
							    			str += ']';
							    			response = str;
								    	 }
								     }
	
							    	 
							    	 
							    	 
							    	 
								   var data1=JSON.parse(response);
								   data = data1;
								   //console.log(data);
								 
											     
											     var cont = "";
											    
											     cont += 
											    	 "<div class='col-lg-1'>"+
											    	 "</div>" +
											    	 "<div class='col-lg-10'>"+
													 "<div class='box'>"+
													 "<header>"+
													 "<div class='icons'><i class='fa fa-table'></i></div>"+
													 "<h5>Ιστορικό</h5>"+
													 "</header>"+
													 "<div id='collapse4'>" +
													  "<div id='row1234'>"+
													  "</div>"+
											    	 	"<table  id='hist_stock' class='table table-bordered table-condensed table-hover table-striped'>" +
											     		"<thead>" +
											     		"<tr>" +
											     		"<th>Βάρδια</th>" +
											     		"<th>Δευτέρα ("+ first_days[0].split(" ")[0].split("-")[2] +"-"+ first_days[0].split(" ")[0].split("-")[1]  +")</th>" +
											     		"<th>Τρίτη ("+ first_days[1].split(" ")[0].split("-")[2] +"-"+ first_days[0].split(" ")[0].split("-")[1]  +")</th>" +
											     		"<th>Τετάρτη ("+ first_days[2].split(" ")[0].split("-")[2] +"-"+ first_days[0].split(" ")[0].split("-")[1]  +")</th>" +
											     		"<th>Πέμπτη ("+ first_days[3].split(" ")[0].split("-")[2] +"-"+ first_days[0].split(" ")[0].split("-")[1]  +")</th>" +
											     		"<th>Παρασκευή ("+ first_days[4].split(" ")[0].split("-")[2] +"-"+ first_days[0].split(" ")[0].split("-")[1]  +")</th>" +
											     		"<th>Σάββατο ("+ first_days[5].split(" ")[0].split("-")[2] +"-"+ first_days[0].split(" ")[0].split("-")[1]  +")</th>" +
											     		"<th>Κυριακή ("+ first_days[6].split(" ")[0].split("-")[2] +"-"+ first_days[0].split(" ")[0].split("-")[1]  +")</th>" +
											     		"</tr>" +
											     		"</thead>" +
											     		"<tbody>";
											    
											   
											   
											   for(var h=0;h<4;h++) 
												{
												
											     cont += "<tr>";
											     	if(h==0)
											     		cont += "<td width ='12%'><a style='color : white;'>0</a> <b>Πρωί</b> </td>";
											     	else
											     		cont += "<td width ='12%'><a style='color : white;'>1</a> <b>Βράδι "+h+"</b> </td>";
											     	
												     for(var j=1;j<8;j++)
												     {
															var check = false;
															var ou = 1;
												    	 	for(var a = 0; a < data.length; a++)
												    	 	{
												    	 		if(data[a])
												    	 			{
												    	 				if((data[a]['day'] == ('date'+j)) && (check == false))
												    	 				{
														    	 			cont += "<td width ='12%'>"+ data[a]['last_name'] + "</td>";
														    	 			delete  data[a]; 
														    	 			check = true;
														    	 	        ou++;
												    	 				}
												    	 			}	
												    	 	}									    	 	
											    	 	
												     }
											     cont +="</tr>";
												}
	
											   
											     cont +="</tbody>"+
												          "</table>"+
												     		"</div>" +
												     		"</div>" +
												     		"</div>";
											     
											    div.innerHTML = cont;
											    
											    $('#hist_stock').dataTable({
											        //         "sDom": "<'pull-right'l>t<'row'<'col-lg-6'f><'col-lg-6'p>>",
											        //         "sPaginationType": "bootstrap",
											        //         "oLanguage": {
											        //             "sLengthMenu": "Show _MENU_ entries"
											        //         }
											      });
							   }
							   else
						   			div.innerHTML = '<center><h4>Δεν υπαρχει πρόγραμμα για την εβδομάδα</center></h4>';
								});
						});
		
		
		
