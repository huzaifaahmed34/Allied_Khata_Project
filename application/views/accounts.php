<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>

</head>
<body>
  =
    <form   id="myForm" method="post">
       <h1 style="margin-top:20px">Allied Khata</h1>
    <div class="container">
       <h2 style="margin-top:20px">Add Customer</h2>
       
          <div class="alert alert-success a1" style="display: none;"></div>

        <div class="row">
           <div class="col-md-6">
        <label>Select Type</label>
    <select name="type" id="type" class="form-control">
        <option value="">Select</option>
         <option value="Individual">Individual</option>
          <option value="Company">Company</option>
   
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
      
    </div>


        <div class="container">
       <h2 style="margin-top:20px">Manager</h2>
       
        
                <div class="row">
             
          
      <div class="col-md-12">
         <label>Designation</label>
    <select name="designation" id="designation" class="form-control">
        <option value="">Select</option>
          <option value="America">America</option>
          <option value="Austria">Austria</option>
    </select>
    </div>
       <div class="col-md-2">
         <label>First Name</label>
    <input type="text" class="form-control" placeholder="First Name" name="firstname">
    </div>
    <div class="col-md-2">
           <label>Last Name</label>
   <input type="text" class="form-control" placeholder="Last Name" name="lastname">
    </div>
    
<div class="col-md-2">
       <label>Email</label>
    <input type="text" class="form-control" placeholder="Email" name="email1">
    </div>  
    <div class="col-md-2">
       <label>Phone</label>
    <input type="text" class="form-control" placeholder="Phone" name="phone1">
    </div> 
    
    
     <div class="col-md-2 " style="margin-top: 23px;">
    <input type="button" class="btn btn-success" id="btnSave1" value="Add"/>
    </div>
 
</div>    </div>
        </form>

<hr>

 
    <hr>
<div class="container">

	<!-- Page Heading -->
    <div class="row">
        
            <table class="table table-striped" id="mydata">
                <thead>
                    <tr><th>Serial no</th>
                        <th>Designation</th>
                        <th>Firstname</th>
                        <th>last name</th>
                         <th>Email</th>
                          <th>Phone</th>
                      
                         <th>Action</th>
                     
                        
                    </tr>
                </thead>
                <tbody id="show_data">
                    
                </tbody>
            </table>
             <form method="post" action="<?php echo site_url(); ?>/Post/action">
            <button type=button class="btn btn-primary" id=proceed >Proceed</button>


    </form>
        </div>

    </div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 

    
<script>
    $(function(){
count=0;     
       var itemList=[];

$('#type').on('change',function(){

 if($('#type').val()=='Individual'){
  $('select[name=designation]').attr('disabled','disabled');
  $('input[name=firstname]').attr('disabled','disabled');
  $('input[name=lastname]').attr('disabled','disabled');
  $('input[name=email1]').attr('disabled','disabled');
  $('input[name=phone1]').attr('disabled','disabled');
   $('#btnSave1').attr('disabled','disabled');
 
 }
 else{

   $('select[name=designation]').removeAttr('disabled','disabled');
  $('input[name=firstname]').removeAttr('disabled','disabled');
  $('input[name=lastname]').removeAttr('disabled','disabled');
  $('input[name=email1]').removeAttr('disabled','disabled');
  $('input[name=phone1]').removeAttr('disabled','disabled');
   $('#btnSave1').removeAttr('disabled','disabled');
 
 }

});

	$('#btnSave1').click(function(){

  
       var type=$('select[name=type]');
        var designation=$('select[name=designation]');
  var fullname=$('input[name=fullname]');
  var phone=$('input[name=phone]');

 var city=$('input[name=city]');
 var address=$('input[name=address]');
 var uid=$('input[name=uid]');
 var email=$('input[name=email]');


 var website=$('input[name=website]');
 
        

 var firstname=$('input[name=firstname]');
 var lastname=$('input[name=lastname]');
 
 var email1=$('input[name=email1]');
 var phone1=$('input[name=phone1]');

       var result = '';
   
          if(designation.val()==''){
           designation.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          designation.parent().parent().removeClass('has-error');
            result +='1';
      }

         if(firstname.val()==''){
           firstname.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          firstname.parent().parent().removeClass('has-error');
            result +='1';
      }
       if(lastname.val()==''){
           lastname.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          lastname.parent().parent().removeClass('has-error');
            result +='1';
      }
if(email1.val()==''){
           email1.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          email1.parent().parent().removeClass('has-error');
            result +='1';
      }
    if(phone1.val()==''){
           phone1.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          phone1.parent().parent().removeClass('has-error');
            result +='1';
      }

      if(result=='11111'){

      $('select[name=type]').attr('readonly','readonly');
      $('input[name=fullname]').attr('readonly','readonly');

 $('input[name=phone]').attr('readonly','readonly');
 $('input[name=city]').attr('readonly','readonly');

$('input[name=address]').attr('readonly','readonly');
 $('input[name=uid]').attr('readonly','readonly');
$('input[name=email]').attr('readonly','readonly');
 $('input[name=website]').attr('readonly','readonly');














          type=type.val();
        designation=designation.val();
phone=phone.val();
address=address.val();
email=email.val();
city=city.val();
website=website.val();

firstname=firstname.val();
lastname=lastname.val();

email1=email1.val();
phone1=phone1.val();
fullname=fullname.val();
uid=uid.val();

itemList.push([count,type,fullname,phone,city,address,uid,email,website,designation,firstname,lastname,email1,phone1]);
					var html = '';
					var i;

					for(i=0; i<itemList.length; i++){
						
				if(itemList[i]==''){}else{	
						html +='<tr id='+itemList[i][0]+'><td>'+itemList[i][0]+'</td>'+
		                        '<td >'+itemList[i][9]+'</td>'+
                               '<td >'+itemList[i][10]+'</td>'+
		                        '<td>'+itemList[i][11]+'</td>'+
                            '<td>'+itemList[i][12]+'</td>'+
                             '<td>'+itemList[i][13]+'</td>'+
                           '<td>' +
        '<button class="btn btn-danger delete">' +
        'Delete' +
        '</button>' +
        '</td>' +'</tr>';
			   		}			}		$('#show_data').html(html);

count++;
     }  });
$('#show_data').on('click', '.delete', function() {
    $(this).parent().parent('tr').remove();
var m=$(this).parent().parent('tr').attr('id');

console.log(itemList);
if(itemList[m][0]==m){
itemList[m]=[];};

});
  $('#proceed').click(function(){
    
    if(itemList.length>0){
  url='<?php echo site_url('Allied/save_accounts_manager')?>';
  data={itemList:itemList};
}
else{
    url='<?php echo site_url('Allied/save_accounts')?>';
    data=$('#myForm').serialize();
}


$.ajax({
  type:'POST',
  data:data,
  dataType:'JSON',
  url:url,
  success:function(){
    $('#myForm')[0].reset();
    $('#show_data tr').remove();

      $('select[name=type]').removeAttr('readonly','readonly');
      $('input[name=fullname]').removeAttr('readonly','readonly');

 $('input[name=phone]').removeAttr('readonly','readonly');
 $('input[name=city]').removeAttr('readonly','readonly');

$('input[name=address]').removeAttr('readonly','readonly');
 $('input[name=uid]').removeAttr('readonly','readonly');
$('input[name=email]').removeAttr('readonly','readonly');
 $('input[name=website]').removeAttr('readonly','readonly');

    itemList=[];
    count=0;
    


      $('.alert-success').html('Data successfully added').fadeIn().delay(8000).fadeOut('slow');


  },
  error:function(){
    alert('data not added');
  }

});
  });


  function showdesignation(){
    $.ajax({
      type:'post',
      dataType:'json',
      url:'<?php echo site_url('Allied/showdesignation')?>',
      success:function(res){
      
        var html=''; 
             html+='<option >Select </option>';

        $.each(res,function(i,item){
            html+='<option value='+item.id+'>'+item.name+'</option>';
        });
        $('#designation').html(html);
      
      }

    });


  };
  showdesignation();
  
 
});

    </script>
 
</body>
</html>