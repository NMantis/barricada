<?php
include 'galaria/login_check.php';
include 'head.php';
include 'top_menu.php';
include 'side_menu.php';

if(isset($_GET['page']))
{
	$a = $_GET['page'];
		if($a == 'empl_home')
		{
			include 'sections/section_employs.php';
		}
		if($a == 'empl_pay')
		{
			include 'sections/section_payment_emp.php';
		}
	    if($a == 'cal_pre')
	    {
	        include 'sections/section_programa.php';
	        
	    }
        if($a == 'cal_add')
        {
            include 'sections/section_programa_add.php';
        }
	    if($a == 'add_pro')
	    {
	        include 'sections/section_add_product.php';
	    }
	    if($a == 'rem_pro')
	    {
	        include 'sections/section_remove_product.php';
	    }
	    if($a=='set_kava')
	    {
	        include 'sections/section_settings_kava.php';
	    }
		if($a=='view_stock')
		{
			include 'sections/section_stock.php';
		}
		if($a=='hi_stock')
		{
			include 'sections/section_stock_history.php';
		}
		if($a=='hi_pay')
		{
			include 'sections/section_payments_history.php';
		}
		if($a=='hi_pro')
		{
		    include 'sections/section_program_history.php';
		}
}
else
	include 'home.php';


include 'footer.php';
include 'modals.php';
include 'scripts.php';

if(isset($_GET['page']))
{
    $a = $_GET['page'];
    if($a == 'cal_pre')
    {
        echo "<script>cale_init();</script>";
        
    }
}

?>
