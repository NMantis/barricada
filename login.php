<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login Page</title>
    
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.css">
    
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="assets/css/main.css">
    
    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="assets/lib/metismenu/metisMenu.css">
    
    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="assets/lib/onoffcanvas/onoffcanvas.css">
    
    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="assets/lib/animate.css/animate.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="login">

      <div class="form-signin">
    <div class="text-center">
        <img src="assets/img/logo.png" alt="Metis Logo">
    </div>
    <hr>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form action="galaria/securelogin/includes/process_login.php" method="POST" name="login_form" onsubmit="return formhash(this, this.password);">
                <p class="text-muted text-center">
                    Enter your username and password
                </p>
                <input type="text" id="username" name="email" placeholder="Username" class="form-control top">
                <input type="password" id="password" name="password"  placeholder="Password" class="form-control bottom">

                
				<input type="submit" value="login" id="login_b" class="btn btn-default submit" />
            </form>
        </div>
    </div>
    <hr>

  </div>

	<script>
function formhash(form, password)
{
   var p = document.createElement("input");
   form.appendChild(p);
   p.name = "p";
   p.type = "hidden"
   p.value = hex_sha512(password.value);
   password.value = "";
   return true;
}
</script>
    <!--jQuery -->
    <script src="assets/lib/jquery/jquery.js"></script>

    <!--Bootstrap -->
    <script src="assets/lib/bootstrap/js/bootstrap.js"></script>


    <script type="text/javascript">
        (function($) {
            $(document).ready(function() {
                $('.list-inline li > a').click(function() {
                    var activeForm = $(this).attr('href') + ' > form';
                    //console.log(activeForm);
                    $(activeForm).addClass('animated fadeIn');
                    //set timer to 1 seconds, after that, unload the animate animation
                    setTimeout(function() {
                        $(activeForm).removeClass('animated fadeIn');
                    }, 1000);
                });
            });
        })(jQuery);
    </script>
</body>

<script>
$(document).on("click", "#login_b", function () 
{
//alert('a');
     var username  = document.getElementById("username").value;
	 var password = document.getElementById("password").value;
	 
	 var check = true;
      
	 if(username=='')
     {
       alert("Παρακαλώ συμπληρώστε το username");
	   check = false;
     }
	 else if(password=='')
     {
       alert("Παρακαλώ συμπληρώστε το password");
	   check = false;
     }
     if(check ==true )
		 {
		 
		   $.post("galaria/SecureLogin/includes/process_login.php", //Required URL of the page on server
		   { // Data Sending With Request To Server
			  email:username,
			  p:password,
		   },
		   function(response,status)
		   { // Required Callback Function
			 window.location.href = "index.php";	
		   });
		 }
});
</script>

<script type="text/JavaScript" src="galaria/SecureLogin/js/sha512.js"></script> 

</html>
