<?php 
$meres=array();

function week_extra($ipal , $adeies , $extra_day,$minus_day){
		include 'func2.php' ;
		$yesterday='date7';
		$parayesterday='date6';
			$i=0;
			global $meres;
do{

					shuffle($ipal);
					$deutera=deutera($ipal,$yesterday,$parayesterday,$adeies,$extra_day,$minus_day);

					
					$pin[0]=$deutera;
					shuffle($ipal);
					
					$triti=triti($ipal,$deutera,$yesterday,$adeies,$extra_day,$minus_day);

					
					$pin[1]= $triti;
					shuffle($ipal);
					
					$tetarti=tetarti($ipal,$deutera,$triti,$adeies,$extra_day,$minus_day);

					
					$pin[2]= $tetarti;
					shuffle($ipal);
					
					$pempti=pempti($ipal,$triti,$tetarti,$adeies,$extra_day,$minus_day);

					
					$pin[3]= $pempti;
					shuffle($ipal);
					
						$test=array_merge($deutera,$triti,$tetarti,$pempti);
						$meres=array_count_values($test);
			
					$paraskeui=paraskeui($ipal,$tetarti,$pempti,$adeies,$extra_day,$minus_day);


				
					$pin[4] = $paraskeui;
					shuffle($ipal);							
													
						$penthimero=array_merge($deutera,$triti,$tetarti,$pempti,$paraskeui);				
						$meres=array_count_values($penthimero);

					$savvato=savvato($ipal,$pempti,$paraskeui,$adeies,$extra_day,$minus_day);

					
					$pin[5]= $savvato;
					shuffle($ipal);
					
						$sxedon_week=array_merge($penthimero,$savvato);
						$meres=array_count_values($sxedon_week);

					$kiriaki=kiriaki($ipal,$paraskeui,$savvato,$adeies,$extra_day,$minus_day);

				

					$pin[6]=$kiriaki;
					$week=array_merge($sxedon_week,$kiriaki);

					$i++;
					

	}while(in_array('0',$week)&&($i<5));
    
	return $pin;
}


?>




