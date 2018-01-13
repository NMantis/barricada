<?php


		
function deutera($ipal,$yesterday,$parayesterday,$adeies,$extra_day,$minus_day){
		

		$deutera=array(0,0,0);
		
		
		$i=0;
		while(($deutera[0]==0)&&($i<count($ipal))){										
				if($i == 0)
				{
					for($j =0; $j < count($ipal); $j++)
					{
						$double_repo=false;
						$repo=false;
						
						if($ipal[$j][1]!=$yesterday){
						$repo=true;
						if($ipal[$j][1]!=$parayesterday)
							$double_repo=true;
						}
						
						if(($double_repo)&&($adeies[$ipal[$j][0]][0][0]!=1)){
								$deutera[0]=$ipal[$j][0];
						}
					}
				}
	
				if ($deutera[0] == 0)
				{
					$repo=false;
				
				if($ipal[$i][1]!=$yesterday){
					$repo=true;
				}
				
				if((!$repo)&&($adeies[$ipal[$i][0]][0][0]!=1)&&(!$ipal[$i][2])){
						$deutera[0]=$ipal[$i][0];
						
						
				}
			}
			$i++;
		}
			
			
		if(count($ipal)==6){
			if($deutera[1]==0){
			for($i=0;$i<count($ipal);$i++){
				
				if(($deutera[0]!=$ipal[$i][0])&&($adeies[$ipal[$i][0]][0][1]!=1)&&($ipal[$i][1]!=$yesterday))
					$deutera[1]=$ipal[$i][0];
					
					
				}
			}
			
		}else{
		if($deutera[1]==0){
			for($i=0;$i<count($ipal);$i++){
				
				if(($deutera[0]!=$ipal[$i][0])&&($adeies[$ipal[$i][0]][0][1]!=1)&&($ipal[$i][1]!=$yesterday)){
					$deutera[1]=$ipal[$i][0];
					
				}
			}
		}
		

		
		}
		if($deutera[2]==0){
			for($i=0;$i<count($ipal);$i++){
				if(($deutera[0]!=$ipal[$i][0])&&($deutera[1]!=$ipal[$i][0])&&($adeies[$ipal[$i][0]][0][1]!=1))
				{
					$deutera[2]=$ipal[$i][0];
				}
			}
		}
		
		
		if($minus_day==1){
			$deutera[2]='-';
			return $deutera;
		}
		
		
		if($extra_day==1){
			for($i=0;$i<count($ipal);$i++){
				if(($deutera[0]!=$ipal[$i][0])&&($deutera[1]!=$ipal[$i][0])&&($deutera[2]!=$ipal[$i][0])&&($adeies[$ipal[$i][0]][0][1]!=1))
				{
					$deutera[3]=$ipal[$i][0];
				}
			}
		}
						
			return $deutera;
			
}

function triti($ipal,$deutera,$yesterday,$adeies,$extra_day,$minus_day){
	
		$triti=array(0,0,0);

		
		$i=0;
		while(($triti[0]==0)&&($i<count($ipal))){										
				if($i == 0)
				{
					for($j =0; $j < count($ipal); $j++)
					{
						$double_repo=false;
						$repo=false;
						
						if(($deutera[0]!=$ipal[$j][0])&&($deutera[1]!=$ipal[$j][0])&&($deutera[2]!=$ipal[$j][0])){
							$repo=true;
							if($ipal[$j][1]!=$yesterday)
								$double_repo=true;
						}	
						
						if(($double_repo)&&($adeies[$ipal[$j][0]][1][0]!=1)){
								$triti[0]=$ipal[$j][0];
						}
					}
				}
				if ($triti[0] == 0)
				{
					$repo=false;
				if(($deutera[0]!=$ipal[$i][0])&&($deutera[1]!=$ipal[$i][0])&&($deutera[2]!=$ipal[$i][0])){
					$repo=true;
				}
				
				if((!$repo)&&($adeies[$ipal[$i][0]][1][0]!=1)&&($deutera[1]!=$ipal[$i][0])&&($deutera[2]!=$ipal[$i][0])){
					$triti[0]=$ipal[$i][0];
					
				}
			}
			$i++;
		}
		
		$i=0;
		while(($triti[1]==0)&&($i<count($ipal))){
				if($i==0){
					for($j =0; $j < count($ipal); $j++)
					{
						//repo.test
						if(($deutera[0]!=$ipal[$j][0])&&($deutera[1]!=$ipal[$j][0])&&($deutera[2]!=$ipal[$j][0])&&($triti[0]!=$ipal[$j][0])&&($adeies[$ipal[$j][0]][1][1]!=1)){
								$triti[1]=$ipal[$j][0];
						}
					}
				}
				if($triti[1]==0){
					if(($triti[0]!=$ipal[$i][0])&&($adeies[$ipal[$i][0]][1][1]!=1)){
							$triti[1]=$ipal[$i][0];
							
					}
				}
				$i++;
		}
		
		
		if($minus_day==2){
			$triti[2]='-';
			return $triti;
		}
		
		
		$i=0;
		while(($triti[2]==0)&&($i<count($ipal))){
				if($i==0){
					for($j =0; $j < count($ipal); $j++)
					{
						$repo=false;
						if(($deutera[0]!=$ipal[$j][0])&&($deutera[1]!=$ipal[$j][0])&&($deutera[2]!=$ipal[$j][0])){
							$repo=true;
							
							if(($triti[0]!=$ipal[$j][0])&&($triti[1]!=$ipal[$j][0])&&($adeies[$ipal[$j][0]][1][1]!=1))
								$triti[2]=$ipal[$j][0];
						}
					}
				}
				if($triti[2]==0){
					if(($triti[0]!=$ipal[$i][0])&&($triti[1]!=$ipal[$i][0])&&($adeies[$ipal[$i][0]][1][1]!=1)){
							$triti[2]=$ipal[$i][0];
							
					}
				}
				$i++;
		}
		

		
		
	return $triti;
	
}


function tetarti($ipal,$deutera,$triti,$adeies,$extra_day,$minus_day){
	
	$tetarti=array(0,0,0);
		
		$i=0;
		while(($tetarti[0]==0)&&($i<=count($ipal))){										
				if($i == 0)
				{
					for($j =0; $j < count($ipal); $j++)
					{
						if(!(in_array($ipal[$j][0],$triti)))
						
							if((!(in_array($ipal[$j][0],$deutera)))&&($adeies[$ipal[$j][0]][2][0]!=1)){
						
								$tetarti[0]=$ipal[$j][0];
								$j=2000;
						}
					}
				}
				if($tetarti[0]==0){
					if((in_array($ipal[$i][0],$triti))&&($adeies[$ipal[$i][0]][2][0]!=1)&&(array_search($ipal[$i][0],$triti)==0)){
						$tetarti[0]=$ipal[$i][0];	
						$i=2000;
						
					}	
				}
			$i++;
		}
		if($tetarti[0]==0)
			if($adeies[$triti[0]][2][0]!=1)
				$tetarti[0]=$triti[0];
		
		if($tetarti[1]==0){
			for($i=0;$i<count($ipal);$i++){
				if(($tetarti[0]!=$ipal[$i][0])&&($adeies[$ipal[$i][0]][2][1]!=1)){
					$tetarti[1]=$ipal[$i][0];
				}
			}
		}
		
		if($minus_day==3){
			$tetarti[2]='-';
			return $tetarti;
		}
		
		
		if($tetarti[2]==0){
			for($i=0;$i<count($ipal);$i++){
				if((($tetarti[0]!=$ipal[$i][0])&&($tetarti[1]!=$ipal[$i][0]))&&($adeies[$ipal[$i][0]][2][1]!=1))
				{
					$tetarti[2]=$ipal[$i][0];
					
				}
			}
		}
		
		if($extra_day==3){
			for($i=0;$i<count($ipal);$i++){
				if((($tetarti[0]!=$ipal[$i][0])&&($tetarti[1]!=$ipal[$i][0])&&($tetarti[2]!=$ipal[$i][0]))&&($adeies[$ipal[$i][0]][2][1]!=1))
				{
					$tetarti[3]=$ipal[$i][0];
					
				}
			}
		}
		
	return $tetarti;
}


function pempti($ipal,$triti,$tetarti,$adeies,$extra_day,$minus_day){
	$pempti=array(0,0,0);
		
		$i=0;
		while(($pempti[0]==0)&&($i<count($ipal))){										
				if($i == 0)
				{
					for($j =0; $j < count($ipal); $j++)
					{
						if(!(in_array($ipal[$j][0],$tetarti)))
						
							if((!(in_array($ipal[$j][0],$triti)))&&($adeies[$ipal[$j][0]][3][0]!=1)){
						
								$pempti[0]=$ipal[$j][0];
								$j=2000;
						}
						
					}
				}
				if($pempti[0]==0){
					if((in_array($ipal[$i][0],$tetarti))&&($adeies[$ipal[$i][0]][3][0]!=1)&&(array_search($ipal[$i][0],$tetarti)==0)){
						$pempti[0]=$ipal[$i][0];	
						$i=2000;
						
					}	
						
				
				} 
			$i++;
		}
		if($pempti[0]==0)
			if($adeies[$tetarti[0]][3][0]!=1)
				$pempti[0]=$tetarti[0];					
		
		if($pempti[1]==0){
			for($i=0;$i<count($ipal);$i++){
				if(($pempti[0]!=$ipal[$i][0])&&($adeies[$ipal[$i][0]][3][1]!=1)){
					$pempti[1]=$ipal[$i][0];
			
				}
			}
		}
		
		if($minus_day==4){
			$pempti[2]='-';
			return $pempti;
		}
		
		if($pempti[2]==0){
			for($i=0;$i<count($ipal);$i++){
				if((($pempti[0]!=$ipal[$i][0])&&($pempti[1]!=$ipal[$i][0]))&&($adeies[$ipal[$i][0]][3][1]!=1))
				{
					$pempti[2]=$ipal[$i][0];
					
				}
			}
		}
		
		if($extra_day==4){
			for($i=0;$i<count($ipal);$i++){
				if((($pempti[0]!=$ipal[$i][0])&&($pempti[1]!=$ipal[$i][0])&&($pempti[2]!=$ipal[$i][0]))&&($adeies[$ipal[$i][0]][3][1]!=1))
				{
					$pempti[3]=$ipal[$i][0];
					
				}
			}
		}
		
	return $pempti;
	
	
}

function paraskeui($ipal,$tetarti,$pempti,$adeies,$extra_day,$minus_day){
	$paraskeui=array(0,0,0);
		global $meres;
		
		$i=0;
		while(($paraskeui[0]==0)&&($i<count($ipal))){										
				if($i == 0)
				{
					for($j =0; $j < count($ipal); $j++)
					{
						if(!(in_array($ipal[$j][0],$pempti)))
						
							if((!(in_array($ipal[$j][0],$tetarti)))&&($adeies[$ipal[$j][0]][4][0]!=1)){
						
								$paraskeui[0]=$ipal[$j][0];
								$meres[$ipal[$j][0]]++;
								$j=2000;
						}
					}

				}
				if($paraskeui[0]==0){
		
					if((in_array($ipal[$i][0],$pempti))&&($adeies[$ipal[$i][0]][4][0]!=1)&&(array_search($ipal[$i][0],$pempti)==0)){
						$paraskeui[0]=$ipal[$i][0];	
						$meres[$ipal[$i][0]]++;
						$i=2000;
						
					}	
				}
			$i++;
		}
		if($paraskeui[0]==0)
			if($adeies[$pempti[0]][4][0]!=1)
				$paraskeui[0]=$pempti[0];
		
		if($paraskeui[1]==0){
			for($i=0;$i<count($ipal);$i++){
				if(($paraskeui[0]!=$ipal[$i][0])&&($adeies[$ipal[$i][0]][4][1]!=1)&&($meres[$ipal[$i][0]]==min($meres))){
					$paraskeui[1]=$ipal[$i][0];
						$meres[$ipal[$i][0]]++;
						$i=2000;
				
				}
			}
		}
		
		if($paraskeui[1]==0){
			for($i=0;$i<count($ipal);$i++){
				if(($paraskeui[0]!=$ipal[$i][0])&&($adeies[$ipal[$i][0]][4][1]!=1)&&($meres[$ipal[$i][0]]>=min($meres))&&($meres[$ipal[$i][0]]<=max($meres))){
					$paraskeui[1]=$ipal[$i][0];
					$meres[$ipal[$i][0]]++;
					$i=2000;
				
				}
			}
		}
		
		if($minus_day==5){
			$paraskeui[2]='-';
			return $paraskeui;
		}
		
		
		
		if($paraskeui[2]==0){
			for($i=0;$i<count($ipal);$i++){
				if((($paraskeui[0]!=$ipal[$i][0])&&($paraskeui[1]!=$ipal[$i][0]))&&($adeies[$ipal[$i][0]][4][1]!=1)&&($meres[$ipal[$i][0]]==min($meres)))
				{
					$paraskeui[2]=$ipal[$i][0];
					$meres[$ipal[$i][0]]++;
					$i=2000;
				}
			}
		}
		
		if($paraskeui[2]==0){
			for($i=0;$i<count($ipal);$i++){
				if((($paraskeui[0]!=$ipal[$i][0])&&($paraskeui[1]!=$ipal[$i][0]))&&($adeies[$ipal[$i][0]][4][1]!=1)&&($meres[$ipal[$i][0]]>=min($meres))&&($meres[$ipal[$i][0]]<=max($meres)))
				{
					$paraskeui[2]=$ipal[$i][0];
					$meres[$ipal[$i][0]]++;
					$i=2000;
				}
			}
		}
		
		if($extra_day==5){
			for($i=0;$i<count($ipal);$i++){
				if((($paraskeui[0]!=$ipal[$i][0])&&($paraskeui[1]!=$ipal[$i][0])&&($paraskeui[2]!=$ipal[$i][0]))&&($adeies[$ipal[$i][0]][4][1]!=1)&&($meres[$ipal[$i][0]]==min($meres)))
				{
					$paraskeui[3]=$ipal[$i][0];
					$meres[$ipal[$i][0]]++;
					$i=2000;
				}
			}
			
				for($i=0;$i<count($ipal);$i++){
					if((($paraskeui[0]!=$ipal[$i][0])&&($paraskeui[1]!=$ipal[$i][0])&&($paraskeui[2]!=$ipal[$i][0]))&&($adeies[$ipal[$i][0]][4][1]!=1)&&($meres[$ipal[$i][0]]>=min($meres))&&($meres[$ipal[$i][0]]<=max($meres)))
					{
						$paraskeui[3]=$ipal[$i][0];
						$meres[$ipal[$i][0]]++;
						$i=2000;
					}
				}
		}
		
	return $paraskeui;
	
	
}


function savvato($ipal,$pempti,$paraskeui,$adeies,$extra_day,$minus_day){
	$savvato=array(0,0,0);
		global $meres;
		$i=0;
		while(($savvato[0]==0)&&($i<count($ipal))){										
				if($i == 0)
				{
					for($j =0; $j < count($ipal); $j++)
					{
						if(!(in_array($ipal[$j][0],$paraskeui)))
						
							if((!(in_array($ipal[$j][0],$pempti)))&&($adeies[$ipal[$j][0]][5][0]!=1)){
						
								$savvato[0]=$ipal[$j][0];
								$meres[$ipal[$j][0]]++;
								$j=2000;
						}
					}
				}
				if($savvato[0]==0){
				
					if((in_array($ipal[$i][0],$paraskeui))&&($adeies[$ipal[$i][0]][5][0]!=1)&&(array_search($ipal[$i][0],$paraskeui)==0)){
						$savvato[0]=$ipal[$i][0];	
						$meres[$ipal[$i][0]]++;
						$i=2000;
						
					}
					
				}
				$i++;
			} 
		
		if($savvato[0]==0)
			if($adeies[$paraskeui[0]][5][0]!=1)
				$savvato[0]=$paraskeui[0];
		
		if($savvato[1]==0){
			for($i=0;$i<count($ipal);$i++){
				if(($savvato[0]!=$ipal[$i][0])&&($adeies[$ipal[$i][0]][5][1]!=1)&&($meres[$ipal[$i][0]]==min($meres))){
					$savvato[1]=$ipal[$i][0];
					$meres[$ipal[$i][0]]++;
					$i=2000;
				}
			}
		}
		
		if($savvato[1]==0){
			for($i=0;$i<count($ipal);$i++){
				if(($savvato[0]!=$ipal[$i][0])&&($adeies[$ipal[$i][0]][5][1]!=1)&&($meres[$ipal[$i][0]]>=min($meres))&&($meres[$ipal[$i][0]]<=max($meres))){
					$savvato[1]=$ipal[$i][0];
					$meres[$ipal[$i][0]]++;
					$i=2000;
				}
			}
		}
		
		if($minus_day==6){
			$savvato[2]='-';
			return $savvato;
		}
		
		
		if($savvato[2]==0){
			for($i=0;$i<count($ipal);$i++){
				if((($savvato[0]!=$ipal[$i][0])&&($savvato[1]!=$ipal[$i][0]))&&($adeies[$ipal[$i][0]][5][1]!=1)&&($meres[$ipal[$i][0]]==min($meres)))
				{
					$savvato[2]=$ipal[$i][0];
					$meres[$ipal[$i][0]]++;
					$i=2000;
				}
			}
		}
		
		if($savvato[2]==0){
			for($i=0;$i<count($ipal);$i++){
				if((($savvato[0]!=$ipal[$i][0])&&($savvato[1]!=$ipal[$i][0]))&&($adeies[$ipal[$i][0]][5][1]!=1)&&($meres[$ipal[$i][0]]>=min($meres))&&($meres[$ipal[$i][0]]<=max($meres)))
				{
					$savvato[2]=$ipal[$i][0];
					$meres[$ipal[$i][0]]++;
					$i=2000;
				}
			}
		}
		
		if($extra_day==6){
			for($i=0;$i<count($ipal);$i++){
				if((($savvato[0]!=$ipal[$i][0])&&($savvato[1]!=$ipal[$i][0])&&($savvato[2]!=$ipal[$i][0]))&&($adeies[$ipal[$i][0]][5][1]!=1)&&($meres[$ipal[$i][0]]==min($meres)))
				{
					$savvato[3]=$ipal[$i][0];
					$meres[$ipal[$i][0]]++;
					$i=2000;
				}
			}
		
		
			
				for($i=0;$i<count($ipal);$i++){
					if((($savvato[0]!=$ipal[$i][0])&&($savvato[1]!=$ipal[$i][0])&&($savvato[2]!=$ipal[$i][0]))&&($adeies[$ipal[$i][0]][5][1]!=1)&&($meres[$ipal[$i][0]]>=min($meres))&&($meres[$ipal[$i][0]]<=max($meres)))
					{
						$savvato[3]=$ipal[$i][0];
						$meres[$ipal[$i][0]]++;
						$i=2000;
					}
				}
		}
		

	return $savvato;
	
	
}

function kiriaki($ipal,$paraskeui,$savvato,$adeies,$extra_day,$minus_day){
	$kiriaki=array(0,0,0);
	global $meres;
		$i=0;
		while(($kiriaki[0]==0)&&($i<count($ipal))){										
				if($i == 0)
				{
					for($j =0; $j < count($ipal); $j++)
					{
						
						if(!(in_array($ipal[$j][0],$savvato)))
						
							if((!(in_array($ipal[$j][0],$paraskeui)))&&($adeies[$ipal[$j][0]][6][0]!=1)){
						
								$kiriaki[0]=$ipal[$j][0];
								$meres[$ipal[$j][0]]++;
								$j=2000;
						}
					}
				}
				if($kiriaki[0]==0){				
				
					if((in_array($ipal[$i][0],$savvato))&&($adeies[$ipal[$i][0]][6][0]!=1)&&(array_search($ipal[$i][0],$savvato)==0)){
						$kiriaki[0]=$ipal[$i][0];	
						$meres[$ipal[$i][0]]++;
						$i=2000;
						
					}
				}
				$i++;
		}
		
		
		if($kiriaki[0]==0)
			if($adeies[$savvato[0]][6][0]!=1)
				$kiriaki[0]=$savvato[0];
		
		if($kiriaki[1]==0){ 
			for($i=0;$i<count($ipal);$i++){
				if(($kiriaki[0]!=$ipal[$i][0])&&($adeies[$ipal[$i][0]][6][1]!=1)&&($meres[$ipal[$i][0]]==min($meres))){
					$kiriaki[1]=$ipal[$i][0];
					$meres[$ipal[$i][0]]++;	
					$i=2000;

				}
			}
		}
		
		if($kiriaki[1]==0){
			
			for($i=0;$i<count($ipal);$i++){
				if(($kiriaki[0]!=$ipal[$i][0])&&($adeies[$ipal[$i][0]][6][1]!=1)&&($meres[$ipal[$i][0]]>=min($meres))&&($meres[$ipal[$i][0]]<=max($meres))){
					$kiriaki[1]=$ipal[$i][0];
					$meres[$ipal[$i][0]]++;
					$i=2000;

				}
			}
		}
		
		if($minus_day==7){
			$kiriaki[2]='-';
			return $kiriaki;
		}
		
		
		if($kiriaki[2]==0){
			for($i=0;$i<count($ipal);$i++){
				if((($kiriaki[0]!=$ipal[$i][0])&&($kiriaki[1]!=$ipal[$i][0]))&&($adeies[$ipal[$i][0]][6][1]!=1)&&($meres[$ipal[$i][0]]==min($meres)))
				{
					$kiriaki[2]=$ipal[$i][0];
					$meres[$ipal[$i][0]]++;
					$i=2000;

				}
			}
		}
		//check gia 0
		if($kiriaki[2]==0){
			for($i=0;$i<count($ipal);$i++){
				if((($kiriaki[0]!=$ipal[$i][0])&&($kiriaki[1]!=$ipal[$i][0]))&&($adeies[$ipal[$i][0]][6][1]!=1)&&($meres[$ipal[$i][0]]>=min($meres))&&($meres[$ipal[$i][0]]<=max($meres)))
				{
					$kiriaki[2]=$ipal[$i][0];
					$meres[$ipal[$i][0]]++;
					$i=2000;

				}
			}
		}
		
		if($extra_day==7){
			for($i=0;$i<count($ipal);$i++){
				if((($kiriaki[0]!=$ipal[$i][0])&&($kiriaki[1]!=$ipal[$i][0])&&($kiriaki[2]!=$ipal[$i][0]))&&($adeies[$ipal[$i][0]][6][1]!=1)&&($meres[$ipal[$i][0]]==min($meres)))
				{
					$kiriaki[3]=$ipal[$i][0];
					$meres[$ipal[$i][0]]++;
					$i=2000;

				}
			}
		
		

				for($i=0;$i<count($ipal);$i++){
					if((($kiriaki[0]!=$ipal[$i][0])&&($kiriaki[1]!=$ipal[$i][0])&&($kiriaki[2]!=$ipal[$i][0]))&&($adeies[$ipal[$i][0]][6][1]!=1)&&($meres[$ipal[$i][0]]>=min($meres))&&($meres[$ipal[$i][0]]<=max($meres)))
					{
						$kiriaki[3]=$ipal[$i][0];
						$meres[$ipal[$i][0]]++;
						$i=2000;

					}
				}
		}
	return $kiriaki;
	
	
}
?>	