<?php

include 'functions.php';
include 'prog.php';
include 'extra.php';

if(isset($_POST['function_c']))
{
    if($_POST['function_c'] == 'add_emp')
    {
        $a= $_POST['field_1'];
        $b= $_POST['field_2'];
        $c= $_POST['field_3'];
        $d= add_emp($a , $b , $c);
        
        echo json_encode($d);
    }
    if($_POST['function_c'] == 'status_employees')
    {
        $a= $_POST['field_1'];
        $b= $_POST['field_2'];
        $d= status_employees($a , $b);
        
        echo json_encode($d);
    }
    if($_POST['function_c'] == 'add_pay')
    {
        $a= $_POST['field_1'];
        $b= $_POST['field_2'];
        $c= $_POST['field_3'];
        $d= $_POST['field_4'];
        
        $e= add_pay($a , $b , $c , $d);
        
        echo json_encode($e);
    }
    if($_POST['function_c'] == 'select_cat')
    {
        $a= $_POST['field_1'];
        
        $e= items_from_cat($a);
        
        echo json_encode($e);
    }
    if($_POST['function_c'] == 'select_brand')
    {
        $a= $_POST['field_1'];
        
        $e= brand_from_item($a);
        
        echo json_encode($e);
    }
    if($_POST['function_c'] == 'select_brand_b')
    {
        $a= $_POST['field_1'];
        
        $e= brand_from_drand($a);
        $j= count_units($a);
        
        $e[0]['count']= $j[0]['count'];
        
        echo json_encode($e);
    }
    if($_POST['function_c'] == 'add_unit')
    {
        $a= $_POST['field_1'];
        $c= $_POST['field_2'];
        $d= $_POST['field_3'];
        $s= $_POST['field_4'];
        
        $e= add_unit($a , $c, $d, $s);
        
        echo json_encode($e);
    }
    if($_POST['function_c'] == 'count_units')
    {
        $a= $_POST['field_1'];
        
        $e= count_units($a);
        
        echo json_encode($e);
    }
    if($_POST['function_c'] == 'add_cat')
    {
        $a= $_POST['field_1'];
        
        $e= add_category($a,'1');
        
        echo json_encode($e);
    }
    if($_POST['function_c'] == 'status_categories')
    {
        $a= $_POST['field_1'];
        $b= $_POST['field_2'];
        $d= status_categories($a , $b);
        
        echo json_encode($d);
    }
    if($_POST['function_c'] == 'add_item')
    {
        $a= $_POST['field_1'];
        $b= $_POST['field_2'];
        $e= add_item($b,$a,'1');
        
        echo json_encode($e);
    }
    if($_POST['function_c'] == 'status_items')
    {
        $a= $_POST['field_1'];
        $b= $_POST['field_2'];
        $d= status_items($a , $b);
        
        echo json_encode($d);
    }
	if($_POST['function_c'] == 'add_brand')
    {
        $a= $_POST['field_1'];
        $b= $_POST['field_2'];
        $c= $_POST['field_3'];
        $d= add_brand($b , $a, '1' , $c);
        
        echo json_encode($d);
    } if($_POST['function_c'] == 'status_brand')
    {
        $a= $_POST['field_1'];
        $b= $_POST['field_2'];
        $d= status_brand($a , $b);
        
        echo json_encode($d);
    }
    if($_POST['function_c'] == 'rem_unit')
    {
        $a= $_POST['field_1'];
        $b= $_POST['field_2'];
        $d= complete_unit($a , $b);
        
        echo json_encode($d);
    }
    if($_POST['function_c'] == 'units_by_brand')
    {
        
        $a= $_POST['field_1'];
        
        $e= brand_from_item($a);
    
        $brand=array();
        for($i=0;$i<count($e);$i++){
            $brand[$i]['title']=$e[$i]['title'];
            $j= count_units($e[$i]['id']);
            $brand[$i]['count']= $j[0]['count'];
            $b=units_by_brand($e[$i]['id']);
            $brand[$i]['min']=$b['min(exp_date)'];
            $brand[$i]['max']=$b['max(purc_date)'];
            $brand[$i]['price']=$b['price'];
        }
        
        
        echo json_encode($brand);
    }
    if($_POST['function_c'] == 'count_completed')
    {
        $a= $_POST['field_1'];
		$b= $_POST['field_2'];
		$lo= $_POST['field_3'];
        $d= count_completed($a);
        
        $z= count_no_completed($b);
        
        
		$data=array();
		
		for($i=0;$i<count($d);$i++){
			$data[$i]['title']=get_name($d[$i]['id_p_brand'])['title'];
			$data[$i]['stock']=$d[$i]['COUNT(*)'];
			$k=sold_by_month($a,$b,$d[$i]['id_p_brand']);
			$data[$i]['sold']=$k['count(id_p_brand)'];
			$p=purc_by_month($a,$b,$d[$i]['id_p_brand']);
			$data[$i]['bought']=$p['count(id_p_brand)'];
			
			
    			for($q=0;$q<count($z);$q++)
    			{
    			    if($d[$i]['id_p_brand'] == $z[$q]['id_p_brand'])
    			    {
    			        $data[$i]['stock'] += $z[$q]['COUNT(*)'];
    			        $yt = purc_this_month($a,$b,$z[$q]['id_p_brand']);
    			        $data[$i]['bought'] += $yt['count(id_p_brand)'];
    			        $z[$q]['id_p_brand'] = '0';
    			    }
    			}
    			
			    
		}
		
		if($lo >= 1)
		{
    		for($q=0;$q<count($z);$q++)
    		{
    		    if($z[$q]['id_p_brand'] != '0')
    		    {
    		        $a = count($data);
    		        $data[$a]['title']=get_name($z[$q]['id_p_brand'])['title'];
    		        $data[$a]['stock']=$z[$q]['COUNT(*)'];
    		        $data[$a]['sold'] = '0';
    		        $yt = purc_this_month($a,$b,$z[$q]['id_p_brand']);
    		        $data[$a]['bought'] = $yt['count(id_p_brand)'];
    		    }
    		}
		}
		
		
		
		
        
		echo json_encode($data);
    }
	if($_POST['function_c'] == 'get_emp_hist')
    {
        $a= $_POST['field_1'];
		$b= $_POST['field_2'];
        $d= get_emp_hist($a,$b);

        
        echo json_encode($d);
    }
    
    if($_POST['function_c'] == 'test')
    {
        $a= $_POST['field_1'];
        $qwe =  $_POST['field_2'];
        $qwer =  $_POST['field_3'];
        

        
        $b = employee();
        $j = [];
        
        $k = [];
        
        $f = [];
        
        for($i =0; $i < count($b); $i++)
        {
         
            $f[$i][0] = $b[$i]['id'];
            if(!isset(programma_db($b[$i]['id'])[1]))
                $f[$i][1] = '0';
                else
                $f[$i][1] = programma_db($b[$i]['id'])[1];
                if(!isset(programma_db($b[$i]['id'])[2]))
                $f[$i][2] = '0';
                else 
                    $f[$i][2] = programma_db($b[$i]['id'])[2];
            
           
            
            $j[$b[$i]['id']] =array();
            for($g=0; $g<7; $g++)
            {
                 $j[$b[$i]['id']][$g] = array();
                 for($r = 0; $r < count($a); $r++)
                 {
                     if(isset($a[$r]))
                     {
                     $temp = explode("_", $a[$r]);
                        if($temp[0] == $b[$i]['id'])
                        {
                            if(isset($temp[1]))
                            {
                                if($temp[1] == $g)
                                {
                                    if($temp[2] == 0)
                                        $j[$b[$i]['id']][$g][0] = 1;
                                    if($temp[2] == 1)
                                        $j[$b[$i]['id']][$g][1] = 1;
                                } 
                            }
                            else
                            {
                                $j[$b[$i]['id']][$g][0] = 1;
                                $j[$b[$i]['id']][$g][1] = 1;
                            }
                        }
                     }
                 }
                 if(!isset($j[$b[$i]['id']][$g][0]))
                     $j[$b[$i]['id']][$g][0] = 0;
                 if(!isset($j[$b[$i]['id']][$g][1]))
                     $j[$b[$i]['id']][$g][1] = 0;
            }

        }
       
        
        //atoma $f 
        //adies print_r ($j); 
        

     if(($qwe != '-') && ($qwer != '-'))
     {
         $lyl=week_extra($f,$j,$qwe,$qwer);
     }
     else 
     {
         $lyl=week($f,$j);
     }
     
    
     for($no=0;$no<count($lyl);$no++)
     {
         if(!isset($lyl[$no][3]))
         {
             $lyl[$no][3] = '-';
         }
     }
     for($no=0;$no<count($lyl);$no++)
     {
         for($yes=0;$yes<4;$yes++)
         {
             for($aa=0;$aa<count($b);$aa++)
             {
                 if($b[$aa]['id'] == $lyl[$no][$yes])
                     $lyl[$no][$yes+4]=$b[$aa]['last_name'];
                 if($lyl[$no][$yes] == '-')
                     $lyl[$no][$yes+4]='-';
             }
         }
     }
     
      echo json_encode($lyl);

    }
    if($_POST['function_c'] == 'in_prog')
    {
        $a= $_POST['field_1'];
        $b= $_POST['field_2'];
        $c= $_POST['field_3'];
        $d= $_POST['field_4'];
        $e= $_POST['field_5'];
        $f= in_prog($a,$b,$c,$d,$e);
        
        
        echo json_encode($f);
    }
    if($_POST['function_c'] == 'reset_prog')
    {
        $a= $_POST['field_1'];
        $f= programma_reset_current();
        
        
        echo json_encode($f);
    }
    if($_POST['function_c'] == 'find_last_date')
    {
        
        $f= find_last_date();
        
        
        echo json_encode($f);
    }
    if($_POST['function_c'] == 'find_prog_date')
    {
        $a= $_POST['field_1'];
        $f= find_prog_date($a);
        
        if($f != "0")
            echo json_encode($f);
        else 
            echo "0";
    }
    
}





?>