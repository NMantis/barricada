<?php

function in_prog($emp_id , $date , $shift,$current,$day)
{
    include 'connect.php';
    
   
    
    try
    {
        $stmt = $pdo->prepare("INSERT INTO `c_programa`(`id_e_employees`, `date`,  `shift`,`current`,`day`) VALUES (?,?,?,?,?)");
        $stmt -> bindParam(1,$emp_id);
        $stmt -> bindParam(2,$date);
        $stmt -> bindParam(3,$shift);
        $stmt -> bindParam(4,$current);
        $stmt -> bindParam(5,$day);
        
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        
    }
    catch (PDOException $e)
    {
        die("Error occurred:" . $e->getMessage());
    }
}

function last_programma(){
    include 'connect.php';
    $return_id = array();
    
    try
    {
        
        $sql= "SELECT id_e_employees,day,shift FROM c_programa WHERE current like '1' ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }
    catch (PDOException $e)
    {
        die("Error occurred:" . $e->getMessage());
    }
    
    $metr = 0;
    while ($r = $stmt->fetch())
    {
        $return_id[$metr]['id_e_employees'] = $r['id_e_employees'];
        $return_id[$metr]['day'] =$r['day'];
        $return_id[$metr]['shift'] = $r['shift'];
        $return_id[$metr]['id_e_employees'] = $r['id_e_employees'];
        
        $metr++; 
    }
    return $return_id;
    
}
function add_brand($item_id , $title , $status , $ex_stat)
{
	include 'connect.php';

	
	try 
	{
		$stmt = $pdo->prepare("INSERT INTO `p_brand`(`id_p_items`, `title`,  `status` , `exp_stat`) VALUES (?,?,?,?)");
		$stmt -> bindParam(1,$item_id);
		$stmt -> bindParam(2,$title);
		$stmt -> bindParam(3,$status);
		$stmt -> bindParam(4,$ex_stat);
	
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		} 
		catch (PDOException $e) 
		{
		die("Error occurred:" . $e->getMessage());
		}
	}


function add_category( $title , $status)
{
	include 'connect.php';

	
	try 
	{
		$stmt = $pdo->prepare("INSERT INTO `p_categories`(`title`,  `status`) VALUES (?,?)");
		$stmt -> bindParam(1,$title);
		$stmt -> bindParam(2,$status);
	
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);

		} 
		catch (PDOException $e) 
		{
		die("Error occurred:" . $e->getMessage());
		}
	}

function add_item($category_id , $title , $status)
{
	include 'connect.php';

	
	try 
	{
		$stmt = $pdo->prepare("INSERT INTO `p_items`(`id_p_categories`, `title`,  `status`) VALUES (?,?,?)");
		$stmt -> bindParam(1,$category_id);
		$stmt -> bindParam(2,$title);
		$stmt -> bindParam(3,$status);
	
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);

		} 
		catch (PDOException $e) 
		{
		die("Error occurred:" . $e->getMessage());
		}
	}


function add_unit($unit_id , $price, $purc_date, $exp_date)
{
	include 'connect.php';

	
	try 
	{
		$stmt = $pdo->prepare("INSERT INTO `p_units`(`id_p_brand`, `price`, `purc_date`,  `exp_date`) VALUES (?,?,?,?)");
		$stmt -> bindParam(1,$unit_id);
		$stmt -> bindParam(2,$price);
		$stmt -> bindParam(3,$purc_date);
		$stmt -> bindParam(4,$exp_date);
	
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);

		} 
		catch (PDOException $e) 
		{
		die("Error occurred:" . $e->getMessage());
		}
	}


function completed_units($brand_id, $price, $purc_date, $exp_date,$sell_date)
{
	include 'connect.php';

	
	try 
	{
		$stmt = $pdo->prepare("INSERT INTO `p_units_comp`(`id_p_brand`, `price`,  `purc_date`,  `exp_date`,  `sell_date`) VALUES (?,?,?,?,?)");
		$stmt -> bindParam(1,$brand_id);
		$stmt -> bindParam(2,$price);
		$stmt -> bindParam(3,$purc_date);
		$stmt -> bindParam(4,$exp_date);
		$stmt -> bindParam(5,$sell_date);
	
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);

		} 
		catch (PDOException $e) 
		{
		die("Error occurred:" . $e->getMessage());
		}
	}


function add_emp($name, $last_name, $afm)
{
	include 'connect.php';

	
	try 
	{
		$temp = '1';
		$stmt = $pdo->prepare("INSERT INTO `e_employees`(`name`, `last_name`,  `AFM` , `status`) VALUES (?,?,?,?)");
		$stmt -> bindParam(1,$name);
		$stmt -> bindParam(2,$last_name);
		$stmt -> bindParam(3,$afm);
		$stmt -> bindParam(4,$temp);
	
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);

		} 
		catch (PDOException $e) 
		{
		die("Error occurred:" . $e->getMessage());
		}
	}



function add_pay($emp_id, $pay, $date , $hours)
{
	include 'connect.php';

	
	try 
	{
		$stmt = $pdo->prepare("INSERT INTO `e_payments`(`id_emp`, `payment`,  `date` , `hours`) VALUES (?,?,?,?)");
		$stmt -> bindParam(1,$emp_id);
		$stmt -> bindParam(2,$pay);
		$stmt -> bindParam(3,$date);
		$stmt -> bindParam(4,$hours);
	
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);

		} 
		catch (PDOException $e) 
		{
		die("Error occurred:" . $e->getMessage());
		}
	}


                        //UPDATE
						
function status_brand($status , $item_id)
{
	include 'connect.php';

	 
	 try 
	{
		$stmt = $pdo->prepare("UPDATE `p_brand` SET `status`= :status WHERE id like :item_id ");
		$stmt->bindValue(':status',$status);
		$stmt->bindValue(':item_id',$item_id);
			
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);

		} 
		catch (PDOException $e) 
		{
		die("Error occurred:" . $e->getMessage());
		}
	 

}

function status_employees($status , $item_id)
{
	include 'connect.php';

	 
	 try 
	{
		$stmt = $pdo->prepare("UPDATE `e_employees` SET `status`= :status WHERE id like :item_id ");
		$stmt->bindValue(':status',$status);
		$stmt->bindValue(':item_id',$item_id);
			
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);

	} 
		catch (PDOException $e) 
		{
		die("Error occurred:" . $e->getMessage());
		}
	 

}


function status_items($status , $category_id)
{
	include 'connect.php';

	 
	 try 
	{
		$stmt = $pdo->prepare("UPDATE `p_items` SET `status`= :status WHERE id like :category_id");
		$stmt->bindValue(':status',$status);
		$stmt->bindValue(':category_id',$category_id);
			
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);

		} 
		catch (PDOException $e) 
		{
		die("Error occurred:" . $e->getMessage());
		}

}

function status_categories($status , $id)
{
	include 'connect.php';

	 
	 try 
	{
		$stmt = $pdo->prepare("UPDATE `p_categories` SET `status`= :status WHERE id like :id");
		$stmt->bindValue(':status',$status);
		$stmt->bindValue(':id',$id);
			
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);

		} 
		catch (PDOException $e) 
		{
		die("Error occurred:" . $e->getMessage());
		}
	 

}




							//SELECT
							
function category($status)
{
	include 'connect.php';
    $return_id = array();
	  
	try 
	{
		
		$sql= "SELECT * FROM p_categories WHERE status like :status"; 
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':status',$status);
		$stmt->execute();
		} 
		catch (PDOException $e) 
		{
		die("Error occurred:" . $e->getMessage());
		}
		$metr =0;
	  while ($r = $stmt->fetch())
	  {
		   
	    $return_id[$metr]['id'] = $r['id'];
		$return_id[$metr]['title'] = $r['title'];
		$return_id[$metr]['status'] = $r['status'];
        $metr++;
	  }
	  return $return_id;
	
}

function items($status)
{
	include 'connect.php';
    $return_id = array();
	  
	try 
	{
		
		$sql= "SELECT id,id_p_categories,title FROM p_items WHERE status like :status order by id_p_categories ASC"; 
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':status',$status);
		$stmt->execute();
		} 
		catch (PDOException $e) 
		{
		die("Error occurred:" . $e->getMessage());
		}
		$metr =0;
	  while ($r = $stmt->fetch())
	  {
		   
	    $return_id[$metr]['id'] = $r['id'];
		$return_id[$metr]['id_p_categories'] = $r['id_p_categories'];
		$return_id[$metr]['title'] = $r['title'];
        $metr++;
	  }
	  return $return_id;
	
}



function items_from_cat($cat)
{
    include 'connect.php';
    $return_id = array();
    
    try
    {
        
        $sql= "SELECT id,title FROM p_items WHERE id_p_categories like :cat AND status like 1";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':cat',$cat);
        $stmt->execute();
    }
    catch (PDOException $e)
    {
        die("Error occurred:" . $e->getMessage());
    }
    $metr =0;
    while ($r = $stmt->fetch())
    {
        
        $return_id[$metr]['id'] = $r['id'];
        $return_id[$metr]['title'] = $r['title'];
        $metr++;
    }
    return $return_id;
    
}

function brand($status)
{
	include 'connect.php';
    $return_id = array();
	  
	try 
	{
		
		$sql= "SELECT id,id_p_items,title FROM p_brand WHERE status like :status "; 
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':status',$status);
		$stmt->execute();
		} 
		catch (PDOException $e) 
		{
		die("Error occurred:" . $e->getMessage());
		}
		$metr =0;
	  while ($r = $stmt->fetch())
	  {
		   
	    $return_id[$metr]['id'] = $r['id'];
		$return_id[$metr]['title'] = $r['title'];
		$return_id[$metr]['id_p_items'] = $r['id_p_items'];
        $metr++;
	  }
	  return $return_id;
	
}


function brand_from_item($item)
{
    include 'connect.php';
    $return_id = array();
    
    try
    {
        
        $sql= "SELECT id,title FROM p_brand WHERE id_p_items like :item";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':item',$item);
        $stmt->execute();
    }
    catch (PDOException $e)
    {
        die("Error occurred:" . $e->getMessage());
    }
    $metr =0;
    while ($r = $stmt->fetch())
    {
        
        $return_id[$metr]['id'] = $r['id'];
        $return_id[$metr]['title'] = $r['title'];
        $metr++;
    }
    return $return_id;
    
}


function brand_from_drand($item)
{
    include 'connect.php';
    $return_id = array();
    
    try
    {
        
        $sql= "SELECT p_brand.id , p_brand.title , p_brand.exp_stat FROM p_brand WHERE p_brand.id like :item";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':item',$item);
        $stmt->execute();
    }
    catch (PDOException $e)
    {
        die("Error occurred:" . $e->getMessage());
    }
    $metr =0;
    while ($r = $stmt->fetch())
    {
        
        $return_id[$metr]['id'] = $r['id'];
        $return_id[$metr]['title'] = $r['title'];
        $return_id[$metr]['exp_stat'] = $r['exp_stat'];
        $metr++;
    }
    return $return_id;
    
}



function units_by_id($id)
{
	include 'connect.php';
    $return_id = array();
	  
	try 
	{
		
		$sql= "SELECT id_p_brand,price,purc_date,exp_date FROM p_units WHERE id like :id"; 
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':id',$id);
		$stmt->execute();
		} 
		catch (PDOException $e) 
		{
		die("Error occurred:" . $e->getMessage());
		}
		$metr =0;
	  while ($r = $stmt->fetch())
	  {
		   
	    $return_id[$metr]['id_p_brand'] = $r['id_p_brand'];
		$return_id[$metr]['price'] = $r['price'];
		$return_id[$metr]['purc_date'] = $r['purc_date'];
		$return_id[$metr]['exp_date'] = $r['exp_date'];
        $metr++;
	  }
	  return $return_id;
	
}


function units_by_brand($brand_id)
{
	include 'connect.php';
    $return_id = array();
	  
	try 
	{
		
		$sql= "SELECT id,price,max(purc_date),min(exp_date)FROM p_units  WHERE id_p_brand like :brand_id "; 
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':brand_id',$brand_id);
		$stmt->execute();
		} 
		catch (PDOException $e) 
		{
		die("Error occurred:" . $e->getMessage());
		}
		
	  while ($r = $stmt->fetch())
	  {
		   
	    $return_id['id'] = $r['id'];
		$return_id['price'] = $r['price'];
		$return_id['max(purc_date)'] = $r['max(purc_date)'];
		$return_id['min(exp_date)'] = $r['min(exp_date)'];

    
	  }
	  return $return_id;
	
}

function employee()
{
	include 'connect.php';
    $return_id = array();
	  
	try 
	{
		
		$sql= "SELECT id,name,last_name,afm,status FROM e_employees where status like '1'"; 
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		} 
		catch (PDOException $e) 
		{
		die("Error occurred:" . $e->getMessage());
		}
		$metr =0;
	  while ($r = $stmt->fetch())
	  {
		   
	    $return_id[$metr]['id'] = $r['id'];
		$return_id[$metr]['name'] = $r['name'];
		$return_id[$metr]['last_name'] = $r['last_name'];
		$return_id[$metr]['afm'] = $r['afm'];
		$return_id[$metr]['status'] = $r['status'];
        $metr++;
	  }
	  return $return_id;
	
}

function payments($employee_id)
{
	include 'connect.php';
    $return_id = array();
	  
	try 
	{
		
		$sql= "SELECT id,payment,date FROM payments WHERE id_emp like :employee_id "; 
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':employee_id',$employee_id);
		$stmt->execute();
		} 
		catch (PDOException $e) 
		{
		die("Error occurred:" . $e->getMessage());
		}
		$metr =0;
	  while ($r = $stmt->fetch())
	  {
		   
	    $return_id[$metr]['id'] = $r['id'];
		$return_id[$metr]['payment'] = $r['payment'];
		$return_id[$metr]['date'] = $r['date'];
        $metr++;
	  }
	  return $return_id;
	
}







function count_units($brand)
{
    include 'connect.php';
    $return_id = array();
    
    try
    {
        
        $sql= "SELECT count(id_p_brand) from p_units where id_p_brand like :brand";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':brand',$brand);
        $stmt->execute();
    }
    catch (PDOException $e)
    {
        die("Error occurred:" . $e->getMessage());
    }
    $metr =0;
    while ($r = $stmt->fetch())
    {
        
        $return_id[$metr]['count'] = $r['count(id_p_brand)'];
        $metr++;
    }
    return $return_id;
    
}

function units()
{
	include 'connect.php';
    $return_id = array();
	  
	try 
	{
		
		$sql= "SELECT id,id_p_brand,price,purc_date,exp_date FROM p_units "; 
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		} 
		catch (PDOException $e) 
		{
		die("Error occurred:" . $e->getMessage());
		}
		$metr =0;
	  while ($r = $stmt->fetch())
	  {
		$return_id[$metr]['id'] = $r['id'];
	    $return_id[$metr]['id_p_brand'] = $r['id_p_brand'];
		$return_id[$metr]['price'] = $r['price'];
		$return_id[$metr]['purc_date'] = $r['purc_date'];
		$return_id[$metr]['exp_date'] = $r['exp_date'];
        $metr++;
	  }
	  return $return_id;
	
}


function complete_unit($brand_id , $hmer_pol)
{
    include 'connect.php';
    $return_id = array();
    
    try
    {
        
        $sql= "SELECT id,price,purc_date,exp_date, id_p_brand  FROM p_units WHERE id_p_brand like :brand_id ORDER BY exp_date ASC LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':brand_id',$brand_id);
        $stmt->execute();
    }
    catch (PDOException $e)
    {
        die("Error occurred:" . $e->getMessage());
    }
    $metr =0;
    while ($r = $stmt->fetch())
    {
        $return_id[$metr]['id'] = $r['id'];
        $return_id[$metr]['id_p_brand'] = $r['id_p_brand'];
        $return_id[$metr]['price'] = $r['price'];
        $return_id[$metr]['purc_date'] = $r['purc_date'];
        $return_id[$metr]['exp_date'] = $r['exp_date'];
        $metr++;
    }
    
    
    completed_units($return_id[0]['id_p_brand'], $return_id[0]['price'], $return_id[0]['purc_date'], $return_id[0]['exp_date'], $hmer_pol);
    
 
    try
    {
        
        $sql= "DELETE FROM p_units WHERE id_p_brand like :brand_id order by exp_date ASC LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':brand_id',$brand_id);
        $stmt->execute();
    }
    catch (PDOException $e)
    {
        die("Error occurred:" . $e->getMessage());
    }
    
    
    return $return_id;
    
}










function count_no_completed($date){
    include 'connect.php';
    $return_id = array();
    
    try
    {
        
        $sql= "SELECT id_p_brand,id,price,purc_date, COUNT(*) FROM p_units WHERE purc_date <= concat(:date ,' %') GROUP BY id_p_brand ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':date',$date);
        $stmt->execute();
    }
    catch (PDOException $e)
    {
        die("Error occurred:" . $e->getMessage());
    }
    $metr =0;
    while ($r = $stmt->fetch())
    {
        
        $a = array();
        try
        {
            $a['COUNT(*)'] = 0;
            $sql= "SELECT  COUNT(*) FROM p_units WHERE purc_date <= concat(:date ,' %') AND id_p_brand like ".$r['id_p_brand'];
            $stmt1 = $pdo->prepare($sql);
            $stmt1->bindValue(':date',$date);
            $stmt1->execute();
        }
        catch (PDOException $e)
        {
            die("Error occurred:" . $e->getMessage());
        }
        
        while ($r3 = $stmt1->fetch())
        {
            $a['COUNT(*)'] = $r3['COUNT(*)'];
        }
        
        
        $return_id[$metr]['id_p_brand'] = $r['id_p_brand'];
        $return_id[$metr]['COUNT(*)'] = 0;
        $return_id[$metr]['COUNT(*)'] =  $a['COUNT(*)'];
        $return_id[$metr]['id'] = $r['id'];
        $return_id[$metr]['price'] = $r['price'];
        $return_id[$metr]['purc_date'] = $r['purc_date'];
        $metr++;
    }
    return $return_id;
    
}














function count_completed($date){
			 include 'connect.php';
    $return_id = array();
    
    try
    {
        
        $sql= "SELECT id_p_brand,id,price,purc_date,sell_date, COUNT(*) FROM p_units_comp WHERE purc_date <= concat(:date ,' %') OR sell_date > concat(:date ,' %') GROUP BY id_p_brand ";
        $stmt = $pdo->prepare($sql);
		$stmt->bindValue(':date',$date);
        $stmt->execute();
    }
    catch (PDOException $e)
    {
        die("Error occurred:" . $e->getMessage());
    }
    $metr =0;
    while ($r = $stmt->fetch())
    {
       
        $a = array();
        try
        {
            $a['COUNT(*)'] = 0;
            $sql= "SELECT  COUNT(*) FROM p_units_comp WHERE purc_date <= concat(:date ,' %') AND sell_date > concat(:date ,' %') AND id_p_brand like ".$r['id_p_brand'];
            $stmt1 = $pdo->prepare($sql);
            $stmt1->bindValue(':date',$date);
            $stmt1->execute();
        }
        catch (PDOException $e)
        {
            die("Error occurred:" . $e->getMessage());
        }
       
        while ($r3 = $stmt1->fetch())
        {
            $a['COUNT(*)'] = $r3['COUNT(*)'];
        }
        
        
        $return_id[$metr]['id_p_brand'] = $r['id_p_brand'];
        $return_id[$metr]['COUNT(*)'] = 0;
        $return_id[$metr]['COUNT(*)'] =  $a['COUNT(*)'];
		$return_id[$metr]['id'] = $r['id'];
        $return_id[$metr]['price'] = $r['price'];
        $return_id[$metr]['purc_date'] = $r['purc_date'];
        $return_id[$metr]['sell_date'] = $r['sell_date'];
        $metr++;
    }
	 return $return_id;
			
}


function sold_by_month($date,$maxdate,$brand){
			 include 'connect.php';
    $return_id = array();
    
    try
    {
        
        $sql= "SELECT count(id_p_brand) FROM p_units_comp WHERE id_p_brand like :brand AND sell_date < concat(:maxdate ,' %') AND sell_date > concat(:date ,' %')";
        $stmt = $pdo->prepare($sql);
		$stmt->bindValue(':date',$date);
		$stmt->bindValue(':maxdate',$maxdate);
		$stmt->bindValue(':brand',$brand);
        $stmt->execute();
    }
    catch (PDOException $e)
    {
        die("Error occurred:" . $e->getMessage());
    }
    $metr =0;
    while ($r = $stmt->fetch())
    {
        $return_id['count(id_p_brand)'] = $r['count(id_p_brand)'];

    }
	 return $return_id;
			
}


function get_name($b_id){
			 include 'connect.php';
    $return_id = array();
    
    try
    {
        
        $sql= "SELECT title FROM p_brand WHERE id like :b_id ";
        $stmt = $pdo->prepare($sql);
		$stmt->bindValue(':b_id',$b_id);

        $stmt->execute();
    }
    catch (PDOException $e)
    {
        die("Error occurred:" . $e->getMessage());
    }
    $metr =0;
    while ($r = $stmt->fetch())
    {
        $return_id['title'] = $r['title'];

    }
	 return $return_id;
	
}

function purc_by_month($date,$maxdate,$brand){
			 include 'connect.php';
    $return_id = array();
    
    try
    {
        
        $sql= "SELECT count(id_p_brand) FROM p_units_comp WHERE id_p_brand like :brand AND purc_date < concat(:maxdate ,' %') AND purc_date > concat(:date ,' %')";
        $stmt = $pdo->prepare($sql);
		$stmt->bindValue(':date',$date);
		$stmt->bindValue(':maxdate',$maxdate);
		$stmt->bindValue(':brand',$brand);
        $stmt->execute();
    }
    catch (PDOException $e)
    {
        die("Error occurred:" . $e->getMessage());
    }
    $metr =0;
    while ($r = $stmt->fetch())
    {
        $return_id['count(id_p_brand)'] = $r['count(id_p_brand)'];

    }
	 return $return_id;
			
}


function purc_this_month($date,$maxdate,$brand){
    include 'connect.php';
    $return_id = array();
    
    try
    {
        
        $sql= "SELECT count(id_p_brand) FROM p_units WHERE id_p_brand like :brand AND purc_date < concat(:maxdate ,' %') AND purc_date > concat(:date ,' %')";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':date',$date);
        $stmt->bindValue(':maxdate',$maxdate);
        $stmt->bindValue(':brand',$brand);
        $stmt->execute();
    }
    catch (PDOException $e)
    {
        die("Error occurred:" . $e->getMessage());
    }
    $metr =0;
    while ($r = $stmt->fetch())
    {
        $return_id['count(id_p_brand)'] = $r['count(id_p_brand)'];
        
    }
    return $return_id;
    
}

function get_emp_hist($date,$maxdate){
			 include 'connect.php';
    $return_id = array();
	$test=array();
	
    try
    {
        
        $sql= "SELECT DISTINCT id_emp FROM e_payments WHERE date >= concat(:date ,' %') AND date <= concat(:maxdate ,' %')";
        $stmt = $pdo->prepare($sql);
		$stmt->bindValue(':date',$date);
		$stmt->bindValue(':maxdate',$maxdate);
        $stmt->execute();
    }
    catch (PDOException $e)
    {
        die("Error occurred:" . $e->getMessage());
    }
        $metr =0;
    while ($r = $stmt->fetch())
    {
       
        $test[$metr]['id_emp'] = $r['id_emp'];
		
		$metr++;
		
    }
    
    

		
		for($i=0;$i<count($test);$i++){
			try
			{
			 $sql= "SELECT e_payments.id,sum(e_payments.payment),sum(e_payments.hours), e_employees.name FROM e_payments,e_employees WHERE e_employees.id like :test AND e_payments.date >= concat(:date ,' %') AND e_payments.date <= concat(:maxdate ,' %')
AND e_payments.id_emp like :test limit 1 ";
			 $stmt = $pdo->prepare($sql);
			 $stmt->bindValue(':date',$date);
			 $stmt->bindValue(':maxdate',$maxdate);
			 $stmt->bindValue(':test',$test[$i]['id_emp']);
			 $stmt->execute();
			}
			catch (PDOException $e)
			{
				die("Error occurred:" . $e->getMessage());
			}
		
			while ($r = $stmt->fetch())
			{
		   
				$return_id[$i]['id'] = $r['id'];
				$return_id[$i]['name']=$r['name'];
				$return_id[$i]['payment'] = $r['sum(e_payments.payment)'];
				$return_id[$i]['hours'] = $r['sum(e_payments.hours)'];
				

			}
		
		}
	 return $return_id;		

}



function programma_shit()
{
    include 'connect.php';
    $return_id = array();
    
    try
    {
        
        $sql= "SELECT id,name,last_name,afm,status FROM e_employees where status like '1'";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }
    catch (PDOException $e)
    {
        die("Error occurred:" . $e->getMessage());
    }
    $metr =0;
    while ($r = $stmt->fetch())
    {
        
        $return_id[$metr]['id'] = $r['id'];
        $return_id[$metr]['name'] = $r['name'];
        $return_id[$metr]['last_name'] = $r['last_name'];
        $return_id[$metr]['afm'] = $r['afm'];
        $return_id[$metr]['status'] = $r['status'];
        $metr++;
    }
    return $return_id;
    
}

function programma_db($id_e){
    include 'connect.php';
    $return_id = array();
    
    try
    {
        
        $sql= "SELECT id_e_employees,day,shift FROM c_programa WHERE id_e_employees like :id_e AND current like '1' ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id_e',$id_e);
        $stmt->execute();
    }
    catch (PDOException $e)
    {
        die("Error occurred:" . $e->getMessage());
    }

    while ($r = $stmt->fetch())
    {
        $return_id[0] = $r['id_e_employees'];
       
        
        $return_id[1] =$r['day'];
        $return_id[2] = $r['shift'];

        
    }
    return $return_id;
    
}


function programma_reset_current()
{
    include 'connect.php';
    
    
    try
    {
        $stmt = $pdo->prepare("UPDATE `c_programa` SET `current` = '0'");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        
    }
    catch (PDOException $e)
    {
        die("Error occurred:" . $e->getMessage());
    }
    
    
}


function find_last_date(){
    include 'connect.php';
    $return_id = array();
    
    try
    {
        
        $sql= "SELECT id_e_employees,day,shift,date FROM c_programa WHERE current like '1' ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }
    catch (PDOException $e)
    {
        die("Error occurred:" . $e->getMessage());
    }
    
    while ($r = $stmt->fetch())
    {
        
        $return_id = $r['date'];
        
    }
    return $return_id;
    
}
function find_prog_date($dt){
    include 'connect.php';
    $return_id = array();
    
    try
    {
        
        $sql= "SELECT id_e_employees,day,shift,date,e_employees.last_name FROM c_programa LEFT JOIN `e_employees` ON `e_employees`.`id` = `c_programa`.`id_e_employees` WHERE date like concat(:date ,' %') ORDER BY day ASC";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':date',$dt);
        $stmt->execute();
    }
    catch (PDOException $e)
    {
        die("Error occurred:" . $e->getMessage());
    }
    $metr=0;
    while ($r = $stmt->fetch())
    {
        $return_id[$metr]['date'] = $r['date'];
        $return_id[$metr]['id_e_employees'] = $r['id_e_employees'];
        $return_id[$metr]['shift'] = $r['shift'];
        $return_id[$metr]['day'] = $r['day'];
        $return_id[$metr]['last_name'] = $r['last_name'];
        $metr++;
    }
    if(!$return_id)
        return '0';
    else
    return $return_id;
    
}


?>