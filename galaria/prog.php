<?php 
$meres=array();

function week($ipal , $adeies){
		include 'func_prog.php' ;
		$yesterday='date7';
		$parayesterday='date6';
			$i=0;
			$pin = array();
			global $meres;
do{

					shuffle($ipal);
					$deutera=deutera($ipal,$yesterday,$parayesterday,$adeies);

					$pin[0]=$deutera;
					shuffle($ipal);
					
					$triti=triti($ipal,$deutera,$yesterday,$adeies);

					$pin[1]= $triti;				
					shuffle($ipal);
					
					$tetarti=tetarti($ipal,$deutera,$triti,$adeies);

					$pin[2]= $tetarti;
			
					shuffle($ipal);
					
					$pempti=pempti($ipal,$triti,$tetarti,$adeies);

					$pin[3]= $pempti;
					shuffle($ipal);
					
						$test=array_merge($deutera,$triti,$tetarti,$pempti);
						$meres=array_count_values($test);
			
					$paraskeui=paraskeui($ipal,$tetarti,$pempti,$adeies);


					$pin[4] = $paraskeui;

					shuffle($ipal);							
													
						$penthimero=array_merge($deutera,$triti,$tetarti,$pempti,$paraskeui);				
						$meres=array_count_values($penthimero);

					$savvato=savvato($ipal,$pempti,$paraskeui,$adeies);

					$pin[5]= $savvato;
					shuffle($ipal);
					
						$sxedon_week=array_merge($penthimero,$savvato);
						$meres=array_count_values($sxedon_week);

					$kiriaki=kiriaki($ipal,$paraskeui,$savvato,$adeies);

					$pin[6]=$kiriaki;
			

							
					$week=array_merge($sxedon_week,$kiriaki);
					$meres=array_count_values($week);
		

					$i++;
					

	}while(in_array('0',$week)&&($i<5));
	
	return $pin;

}



?>




