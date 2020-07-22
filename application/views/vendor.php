<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>

</head>
<body>
  <a href="<?php echo site_url('MyLogin/logout') ?>">Log Out</a>
    <form   id="myForm" method="post">
       <h1 style="margin-top:20px">Allied Khata</h1>
    <div class="container">
       <h2 style="margin-top:20px">Add Vendor</h2>
       
          <div class="alert alert-success a1" style="display: none;"></div>

        <div class="row">
           <div class="col-md-6">
        <label>Select Type</label>
    <select name="type" id="type" class="form-control">
        <option value="">Select</option>
         <option value="Vendor">Vendor</option>
        
   
    </select>
    </div>
            <div class="col-md-6">
              <label>Enter Fullname</label>
   <input name=fullname   class="form-control" placeholder="Enter Fullname">
    </div>
      <div class="col-md-6">
        <label>Enter Phone</label>
       <input name=phone   class="form-control" placeholder="Enter Phone">

    </div>
      <div class="col-md-6">
         <label>City</label>
    <input type="text" class="form-control" placeholder="Enter City" name="city"/>
    </div>
       <div class="col-md-6">
         <label>Address</label>
    <input type="text" class="form-control" placeholder="Address" name="address"/>
    </div>
    <div class="col-md-6">
       <label>UID#</label>
    <input type="text" class="form-control"  placeholder="Enter UID" name="uid">
    </div>
     <div class="col-md-6">
       <label>Email</label>
  <input type="text" class="form-control"  placeholder="Enter Email" name="email">
    </div>

  
<div class="col-md-6">
       <label>Website</label>
    <input type="text" class="form-control" placeholder="Enter Website" name="website">
    </div>  

    
 
</div>
        <button style="margin-top: 20px" type=button class="btn btn-primary" id=proceed >Proceed</button>

    </div>
   
          

        </form>
    </div>
<hr>

 
         

        </div>

    </div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 

    
<script>
    $(function(){




  $('#proceed').click(function(){    
  
    var type=$('select[name=type]');
       
  var fullname=$('input[name=fullname]');
  var phone=$('input[name=phone]');

 var city=$('input[name=city]');
 var address=$('input[name=address]');
 var uid=$('input[name=uid]');
 var email=$('input[name=email]');


 var website=$('input[name=website]');
 
        


       var result = '';
   
          if(type.val()==''){
           type.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          type.parent().parent().removeClass('has-error');
            result +='1';
      }

         if(fullname.val()==''){
           fullname.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          fullname.parent().parent().removeClass('has-error');
            result +='1';
      }
       if(phone.val()==''){
           phone.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          phone.parent().parent().removeClass('has-error');
            result +='1';
      }
if(city.val()==''){
           city.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          city.parent().parent().removeClass('has-error');
            result +='1';
      }
    if(address.val()==''){
           address.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          address.parent().parent().removeClass('has-error');
            result +='1';
      }
      if(uid.val()==''){
           uid.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          uid.parent().parent().removeClass('has-error');
            result +='1';
      }
      if(website.val()==''){
           website.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          website.parent().parent().removeClass('has-error');
            result +='1';
      }
          if(email.val()==''){
           email.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          email.parent().parent().removeClass('has-error');
            result +='1';
      }

      if(result=='11111111'){


    url='<?php echo site_url('Allied/save_vendor')?>';
    data=$('#myForm').serialize();



$.ajax({
  type:'POST',
  data:data,
  dataType:'JSON',
  url:url,
  success:function(){
    $('#myForm')[0].reset();
 
  
    


      $('.alert-success').html('Data successfully added').fadeIn().delay(8000).fadeOut('slow');


  },
  error:function(){
    alert('data not added');
  }

});
}
});
  });





    </script>
 
</body>
</html>