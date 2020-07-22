<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
    User
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fas fa-arrow-alt-circle-right"></i> Home</a></li>
         <li><a href="#"> User</a></li>
        <li class="active">Add User</li>
      </ol>
    </section>
      

   <form    id="myForm">
       
    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Add User</h3>
        </div>
            
   <div class="alert alert-success" style="display: none;"></div>
   
   <div class="alert alert-danger" style="display: none;"></div>
        <!-- /.box-header -->
        <div class="box-body">
          
		  <div class="row">
            <div class="col-md-6">
         <label>Select Company Name</label>
        <select name="company" id="company" class="form-control">
       
   
    </select>
  </div>
	       <div class="col-md-6">
              <label>Enter First Name</label>
    <input name="first_name" id="" class="form-control">
       
    </div>
      <div class="col-md-6">
              <label>Enter Last Name</label>
    <input name="last_name" id="" class="form-control">
       
    </div>

  <div class="col-md-6">
              <label>Enter Username</label>
    <input name="username" id="" class="form-control">
       
    </div>

  <div class="col-md-6">
              <label>Enter Email</label>
    <input name="email" id="" class="form-control">
       
    </div>


  <div class="col-md-6">
              <label>Enter Password</label>
    <input name="password" id="" class="form-control">
       
    </div>

  <div class="col-md-6">
              <label>Enter Contact Number</label>
    <input name="contact" id="" class="form-control">
       
    </div>



  <div class="col-md-6">
              <label>Enter dob</label>
    <input name="dob" type=date id="" class="form-control">
       
    </div>

  <div class="col-md-6">
              <label>Address</label>
    <textarea name="address" id="address" value="" class="form-control">
       </textarea>
    </div>
      <div class="col-xs-6">
              <label class=form-label>Type</label>
    <select name="type" id="type"  class="form-control">
       <option value="">Select</option>
      <option value="admin">Admin</option>
        <option value="user">User</option>
</select>
    </div>

	
          </div>
          
   
    
   
 
</div>   
        </form>
		  <div class="row">
		    <div class="col-md-3">
			
			</div>


        
            
            <!-- /.col -->
            <div class="col-md-6" style="text-align: center;padding-top:40px;">
              <!-- /.form-group -->
              <div class="form-group">
                 <button style="background-color:#00A157;margin:0px !important;" type="reset" class="btn bg-olive margin">Cancel</button>
				 <button style="background-color:#00A157;margin:0px !important;" type="button" class="btn bg-olive margin"  id=submit  >Submit</button>
				 <a href="<?php echo site_url('User/view_user');?>" style="background-color:#00A157 ;margin:0px !important;" type="button" class="btn bg-olive margin">View User</a>
              </div>
              <!-- /.form-group -->
            </div>
			<div class="col-md-3">
			
			</div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
		  
        </div>
        <!-- /.box-body -->
        
      </div>
      <!-- /.box -->

      <!-- /.row -->

    </section>
    <!-- /.content -->
       
   </form>
   
 
  </div>
 

  <div class="control-sidebar-bg"></div>

<!-- ./wrapper -->

   

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    
<script>
    $(function(){
$('#submit').click(function(){
      
    var fname=$('input[name=first_name]');
    var lname=$('input[name=last_name]');

    var email=$('input[name=email]');
    var contact=$('input[name=contact]');
    var dob=$('input[name=dob]');
       var company=$('select[name=company]');
          var type=$('select[name=type]');
    var username=$('input[name=username]');
    var password=$('input[name=password]');
 
    var address=$('textarea[name=address]');
    
  var result='';
  if(fname.val()==''){
    fname.parent().addClass('has-error');
  }
  else{
    fname.parent().removeClass('has-error');
    result+='1';
  }  
  if(company.val()==''){
    company.parent().addClass('has-error');
  }
  else{
    company.parent().removeClass('has-error');
    result+='1';
  }
   
    if(lname.val()==''){
    lname.parent().addClass('has-error');
  }
  else{
    lname.parent().removeClass('has-error');
    result+='1';
  }
    if(email.val()==''){
    email.parent().addClass('has-error');
  }
  else{
    email.parent().removeClass('has-error');
    result+='1';
  }
    if(contact.val()==''){
    contact.parent().addClass('has-error');
  }
  else{
  contact.parent().removeClass('has-error');
    result+='1';
  }
    if(dob.val()==''){
    dob.parent().addClass('has-error');
  }
  else{
    dob.parent().removeClass('has-error');
    result+='1';
  }
      if(address.val()==''){
    address.parent().addClass('has-error');
  }
  else{
    address.parent().removeClass('has-error');
    result+='1';
  }
    
    if(username.val()==''){
    username.parent().addClass('has-error');
  }
  else{
    username.parent().removeClass('has-error');
    result+='1';
  }
    if(password.val()==''){
    password.parent().addClass('has-error');
  }
  else{
    password.parent().removeClass('has-error');
    result+='1';
  }
  
   if(type.val()==''){
    type.parent().addClass('has-error');
  }
  else{
    type.parent().removeClass('has-error');
    result+='1';
  }
  


  if(result=='1111111111'){

    var data=$('#myForm').serialize();
  

  
    $.ajax({
      type:'post',
    data:data,
    datatype:'json',
 
    url:"<?php echo site_url('User/insert')?>",
      success:function(res){
        $('.alert-success').html('Data added Successfully').fadeIn().delay('4000').fadeOut('slow');
        $('#myForm')[0].reset();

      },
      error:function(){
        alert('error');
      }
    });
  }


});


 function showcompany(){
    $.ajax({
      type:'post',
      dataType:'json',
      url:'<?php echo site_url('User/show_company')?>',
      success:function(res){
      
        var html=''; 
             html+='<option value="" >Select </option>';

        $.each(res,function(i,item){

            html+='<option value='+item.id+'>'+item.company_name+'</option>';
       
        });
        $('#company').html(html);
      
      }

    });


  };
  showcompany();
});
</script>