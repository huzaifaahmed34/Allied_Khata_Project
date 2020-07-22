<?php
// Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}


$ipAddress = get_client_ip();



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Signup Now</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/main.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			    <form id="myForm" action="<?php echo site_url('SignUp/insert_user1')?>" method="post">
			<div class="row" style="margin-right:0px;margin-left:0px;width: 100%;">
			    <div class="col-md-12">
			        <span class="login100-form-title">
		
						ALLIED KHATA
						<h5 style="color:grey;" ><br>Unlimited users, no credit card required</h5>
 
					</span>
					
			    </div>
			</div>
			<div class="alert alert-success" style="display: none;"></div>
   
   <div class="alert alert-danger" style="display: none;"></div>
			
			<div class="row" style="margin-right:0px;margin-left:0px;width: 100%;">
			    <div class="col-md-1">
			       
			    </div>
			    <div class="col-md-5">
			        
					
                    <div class="msg"><?php echo $this->session->flashdata('msg'); ?>
                    	<?php echo $this->session->flashdata('msg'); ?>
                    </div>
                    <h6 class="pull-center" style="text-align: center;margin-bottom: 20px;"><i class="fas fa-user-edit"></i> Personal Information</h6>
					<div class="wrap-input100 validate-input" data-validate = "Name is required ">
					   <input class="input100" type="text" name="u_name" placeholder="First Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input masked" data-validate = "Mobile# is required" >
						<input class="input100" type="text" name="mobile" placeholder="Mobile#" id="mobile_number">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-mobile"></i>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "CNIC is required">
						<input class="input100" type="text" name="cnic" placeholder="CNIC" id="cnic">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-address-card"></i>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Address is required">
						<input class="input100" type="text" name="address" placeholder="Address">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="far fa-address-book"></i>
						</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Address is required">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="far fa-address-book"></i>
						</span>
					</div>
					
				
			    </div>
			    <div class="col-md-5">
			       	<h6 class="pull-center" style="text-align: center;margin-bottom: 20px;"><i class="fas fa-briefcase"></i> Business Information</h6>	
					
						<div class="wrap-input100 validate-input" data-validate = "Name is required ">
					   <input class="input100" type="text" name="last_name" placeholder="Last Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Name is required ">
					   <input class="input100" type="text" name="user_name" placeholder="User Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Business Name is required">
						<input class="input100" type="email" name="b_name" placeholder="Business Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-briefcase"></i>
						</span>
					</div>
					
					 
					<div class="wrap-input100 validate-input" data-validate = "City is required">
						<input class="input100" type="text" name="city" placeholder="City">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-city"></i>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Enter Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-lock"></i>
						</span>
					</div>
				 
				
			    </div>
			    <div class="col-md-1">
			        
			    </div>

			</div>
			<div class="row" style="margin-right:0px;margin-left:0px;width: 100%;" >
			    <div class="col-md-4">
			        
			    </div>
			    <div class="col-md-4">
			        <div class="container-login100-form-btn">
						<button class="login100-form-btn" type="button" name="saveBtn" id="saveBtn">
						<i class="fas fa-sign-in-alt"> </i>&nbsp Sign Up
						</button>
					</div>
			    </div>
			    <div class="col-md-4">
			        
			    </div>
			</div>	
					</form>
			<div class="row" style="margin-right:0px;margin-left:0px;width: 100%;" >
			    <div class="col-md-4">
			        
			    </div>
			    <div class="col-md-4">
			        <div class="text-center p-t-136">
						<a class="txt2" href="<?php echo base_url('index.php/login'); ?>">
							Login your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
			    </div>
			    <div class="col-md-4">
			        
			    </div>
			</div>
			</div>
			
			
		
		</div>
	</div>
	
	

		
	<script src="<?php echo base_url()?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url()?>assets/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assets/vendor/select2/select2.min.js"></script>
	<script src="<?php echo base_url()?>assets/vendor/tilt/tilt.jquery.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.maskedinput.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<script type="text/javascript">

		$(document).ready(function($){
			$('#mobile_number').mask('9999-9999999');
			$('#cnic').mask('99999-9999999-9');
		});

		$(function(){

   $('#saveBtn').click(function(){
          var url = $('#myForm').attr('action');

          var data = $('#myForm').serialize();
 
            //validation
         
            var u_name = $('input[name=u_name]');
            var mobile=$('input[name=mobile]');
            var cnic=$('input[name=cnic]');
            var address=$('input[name=address]');
            var password=$('input[name=password]');
            var city=$('input[name=city]');
            var b_name=$('input[name=b_name]');
            var b_type=$('input[name=b_type]');
  var user_name=$('input[name=user_name]');

  var last_name=$('input[name=last_name]');



          //alert('Data Added Sucessfully'); 
          var result = '';
          if(u_name.val()==''){
           u_name.parent().parent().addClass('has-error').val('This Field is Required');
            }else{
          u_name.parent().parent().removeClass('has-error');
          
                result +='1';
            }
       
            if(user_name.val()==''){
           user_name.parent().parent().addClass('has-error').val('This Field is Required');
            }else{
          user_name.parent().parent().removeClass('has-error');
          
                result +='1';
            }
       
            if(last_name.val()==''){
           last_name.parent().parent().addClass('has-error').val('This Field is Required');
            }else{
          last_name.parent().parent().removeClass('has-error');
          
                result +='1';
            }
       
        
       if(mobile.val()==''){
           mobile.parent().parent().addClass('has-error').val('This Field is Required');
            }
           else{
          mobile.parent().parent().removeClass('has-error');
            result +='1';
            }
       
     
       
         if(cnic.val()==''){
           cnic.parent().parent().addClass('has-error').val('This Field is Required');
            }
           else{
          cnic.parent().parent().removeClass('has-error');
            result +='1';
            }

            if(address.val()==''){
           address.parent().parent().addClass('has-error').val('This Field is Required');
            }
           else{
          address.parent().parent().removeClass('has-error');
            result +='1';
            }

            if(password.val()==''){
           password.parent().parent().addClass('has-error').val('This Field is Required');
            }
           else{
          password.parent().parent().removeClass('has-error');
            result +='1';
            }
             if(city.val()==''){
           city.parent().parent().addClass('has-error').val('This Field is Required');
            }
           else{
          city.parent().parent().removeClass('has-error');
            result +='1';
            }

            if(b_name.val()==''){
           b_name.parent().parent().addClass('has-error').val('This Field is Required');
            }
           else{
          b_name.parent().parent().removeClass('has-error');
            result +='1';
            }

            if(b_type.val()==''){
           b_type.parent().parent().addClass('has-error').val('This Field is Required');
            }
           else{
          b_type.parent().parent().removeClass('has-error');
            result +='1';
            }

    
       
       if(result==1111111111)
           {
               
            $.ajax({
                type:'POST',
                url:url,
                data:data,
                datatype:"JSON",
                success:function(responce)
                {   $('.alert-success').html('User  Added successfully').fadeIn().delay(4000).fadeOut('slow');         
            $.ajax({
                type:'POST',
                url:'<?php echo site_url('SignUp/send_mail')?>',
               
                datatype:"JSON",
                success:function(responce)
                {  
console.log(responce);
  $('#myForm')[0].reset();
              

}
})
                	// alert(responce);
              
                },
                error:function()
                {
                        $('.alert-danger').html('User Not  Added!').fadeIn().delay(4000).fadeOut('slow');
                }
            });
           }
       
   });
});
	</script>

</body>
</html>