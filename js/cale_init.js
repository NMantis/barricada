


        //----------- BEGIN FULLCALENDAR CODE -------------------------*/
  function cale_init() {
	

        var date = new Date();
        
		var curr = new Date(date); // get current date
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
		

			   $.post("galaria/function_controler.php", //Required URL of the page on server
			   { // Data Sending With Request To Server
					  function_c:"find_prog_date",
					  field_1:res[0],
					  
			   },
			   function(response,status)
			   { // Required Callback Function
				   //console.log(response);
				   var div = document.getElementById("row12345");
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
				    		// console.log(ct);
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
						  // console.log(data);
						 
									     
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
									     		cont += "<td width ='12%'><a style='color : white;'>0</a> Πρωί </td>";
									     	else
									     		cont += "<td width ='12%'><a style='color : white;'>1</a> Βράδι "+h+" </td>";
									     	
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
												    	 			cont += "<td width ='12%'><b>"+ data[a]['last_name'] + "</b></td>";
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
				   			div.innerHTML = '<center><h4>Δεν υπαρχει πρόγραμμα για την τρέχουσα εβδομάδα</center></h4>';
					});
}
        /*----------- END FULLCALENDAR CODE -------------------------*/
