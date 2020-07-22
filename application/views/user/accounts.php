<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
    Customer
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fas fa-arrow-alt-circle-right"></i> Home</a></li>
         <li><a href="#">Customer </a></li>
        <li class="active">Add Customer</li>
      </ol>
    </section>
      

   <form   id="myForm" >
       
    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Add Customer</h3>
        </div>
            
   <div class="alert alert-success" style="display: none;"></div>
   
   <div class="alert alert-danger" style="display: none;"></div>
        <!-- /.box-header -->
        <div class="box-body">
          
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
   <input  type=text name=fullname   class="form-control" placeholder="Enter Fullname">
    </div>
      <div class="col-md-6">
        <label>Enter Phone</label>
       <input type=text name=phone   class="form-control" placeholder="Enter Phone">

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
          
             
     
       
        
                <div class="row" id=hide>
                  <div class=col-md-12>
               <h3 style="margin-top:20px">Add Manager</h3>
          </div>
      <div class="col-md-12">
         <label>Designation</label>
    <select name="designation" id="designation" class="form-control">
        <option value="">Select</option>
         
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
    <input type="button" class="btn  bg-olive" style="background-color:#00A157;" id="btnSave1" value="Add"/>
    </div>
 
</div>   
        </form>
		  <div class="row">
		    <div class="col-md-3">
			
			</div>


        
            
        
              <!-- /.form-group -->
            </div>
			<div class="col-md-3">
			
			</div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
		  
      
      <!-- /.box -->

      <div class="row">
        <div class="col-md-12">
<div class=table-responsive>
 <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                      <th>Serial no</th>
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
        </div>
        </div>


            <!-- /.col -->
            <div class="col-md-12" style="text-align: center;padding-top:40px;">
              <!-- /.form-group -->
              <div class="form-group">
                 <button style="background-color:#00A157;margin:0px !important;" type="button" class="btn bg-olive margin formcancel">Cancel</button>
         <button style="background-color:#00A157;margin:0px !important;" type="button" class="btn bg-olive margin" id=proceed  >Submit</button>
         <a href="<?php echo site_url('Customer/Accounts_view');?>" style="background-color:#00A157 ;margin:0px !important;" type="button" class="btn bg-olive margin">View Customer</a>
              </div>
        <!-- /.col (left) -->
        <div class="col-md-6">

        
           

   

        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
       
   </form>
   
 
  </div>  </div>
        <!-- /.box-body -->
        
      </div>
 

  <div class="control-sidebar-bg"></div>

<!-- ./wrapper -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

   <script src="<?php echo base_url('assets/js/print.min.js')?>"></script>

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
   $('#hide').css('display','none');
 
 }
 else{

   $('select[name=designation]').removeAttr('disabled','disabled');
  $('input[name=firstname]').removeAttr('disabled','disabled');
  $('input[name=lastname]').removeAttr('disabled','disabled');
  $('input[name=email1]').removeAttr('disabled','disabled');
  $('input[name=phone1]').removeAttr('disabled','disabled');
   $('#btnSave1').removeAttr('disabled','disabled');
  $('#hide').css('display','block');
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
            html +='<tr id='+itemList[i][0]+'>'+
            '<td>'+itemList[i][0]+'</td>'+
             '<td >'+itemList[i][9]+'</td>'+
             '<td >'+itemList[i][10]+'</td>'+
             '<td>'+itemList[i][11]+'</td>'+
             '<td>'+itemList[i][12]+'</td>'+
            '<td>'+itemList[i][13]+'</td>'+
             '<td>' +
        '<button class="btn btn-danger delete">' +
        'Delete' +'</button>' +'</td>' +
        '</tr>';
            }     }  
             $('#show_data').html(html);

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
  url='<?php echo site_url('Customer/save_accounts_manager')?>';
  data={itemList:itemList};
}
else{
    url='<?php echo site_url('Customer/save_accounts')?>';
    data=$('#myForm').serialize();

  
}

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

   if(email.val()==''){
           email.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          email.parent().parent().removeClass('has-error');
            result +='1';
      }
         if(website.val()==''){
           website.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          website.parent().parent().removeClass('has-error');
            result +='1';
      }
      if(result=='11111111'){

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
}
  });



  function showdesignation(){
    $.ajax({
      type:'post',
      dataType:'json',
      url:'<?php echo site_url('Customer/showdesignation')?>',
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
  
 $('.formcancel').click(function(){

$('#myForm')[0].reset();
itemList=[];
$('#show_data').html('');
count=0;  
subtotal=0;
$('#total').html('0');

});

});

    </script>
 
</body>
</html>