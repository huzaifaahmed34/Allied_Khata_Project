<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
    Employee
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fas fa-arrow-alt-circle-right"></i> Home</a></li>
         <li><a href="#">Employee </a></li>
        <li class="active">Add Employee</li>
      </ol>
    </section>
      

   <form   id="myForm" >
       
    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Add Employee</h3>
        </div>
            
   <div class="alert alert-success" style="display: none;"></div>
   
   <div class="alert alert-danger" style="display: none;"></div>
        <!-- /.box-header -->
        <div class="box-body">
          
		  <div class="row">
		    <div class="col-md-4">
        <label>Select Type</label>
    <select name="type" id="type" class="form-control">
        <option value="">Select</option>
         <option value="Employee">Employee</option>
        
   
    </select>
    </div>
            <div class="col-md-4">
              <label>Enter Firstname</label>
   <input name=firstname  class="form-control" placeholder="Enter Fullname">
    </div>
       <div class="col-md-4">
              <label>Enter lastname</label>
   <input name=lastname   class="form-control" placeholder="Enter Fullname">
    </div>
    
     <div class="col-md-4">
        <label>Enter Cnic</label>
       <input name=cnic   class="form-control" placeholder="Enter Cnic">

    </div>
      <div class="col-md-4">
        <label>Enter Phone 1</label>
       <input name=phone   class="form-control" placeholder="Enter Phone">

    </div>
    <div class="col-md-4">
        <label>Enter Phone 2</label>
       <input name=phone1   class="form-control" placeholder="Enter Phone 2">

    </div>
     <div class="col-md-4">
        <label>Enter Gender</label><br>Male
       <input type=radio name=gender   value=male  >Female
       <input type=radio name=gender   value=female >

    </div>
      <div class="col-md-4">
         <label>City</label>
    <input type="text" class="form-control" placeholder="Enter City" name="city"/>
    </div>
       <div class="col-md-4">
         <label>Address</label>
    <input type="text" class="form-control" placeholder="Address" name="address"/>
    </div>
 
     <div class="col-md-4">
       <label>Email</label>
  <input type="text" class="form-control"  placeholder="Enter Email" name="email">
    </div>

  

<div class="col-md-4">
       <label>Date of birth</label>
    <input type="date" class="form-control"  name="dob">
    </div>  

<div class="col-md-4">
       <label>Date of Join</label>
    <input type="date" class="form-control"  name="doj">
    </div>  
     <div class="col-md-4">
       <label>Job type</label>
    <select name="job" id="job" class="form-control">
          <option value="">Select</option>
        <option value="Full time">Full time</option>
         <option value="Part Time">Part time</option>
        
   
    </select>
    </div>
      
  <div class="col-md-4">
       <label>Basic Pay</label>
  <input type="text" class="form-control"  placeholder="Enter Basic pay" name="basicpay">
    </div>
      <div class="col-md-4">
       <label>Designation</label>
    <select name="designation" id="designation" class="form-control">
       
   
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
				 <button style="background-color:#00A157;margin:0px !important;" type="button" class="btn bg-olive margin" id=proceed  >Submit</button>
				 <a href="<?php echo site_url('Employee/employee_view');?>" style="background-color:#00A157 ;margin:0px !important;" type="button" class="btn bg-olive margin">View Employee</a>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

   <script src="<?php echo base_url('assets/js/print.min.js')?>"></script>
    
<script>
    $(function(){




  $('#proceed').click(function(){    
  
    var type=$('select[name=type]');
        var job=$('select[name=job]');
        var gender=$('input[name=gender]');
       
  var firstname=$('input[name=firstname]');
   var lastname=$('input[name=lastname]');
  var phone=$('input[name=phone]');
  var phone1=$('input[name=phone1]');
  var dob=$('input[name=dob]');
  var doj=$('input[name=doj]');
 var basicpay=$('input[name=basicpay]'); 
 var city=$('input[name=city]');
 var address=$('input[name=address]');
  var designation=$('select[name=designation]');
  var cnic=$('input[name=cnic]');
 
 var email=$('input[name=email]');

       var result = '';
   
          if(type.val()==''){
           type.parent().addClass('has-error').val('This Field is Required');
      }
           else{
          type.parent().removeClass('has-error');
            result +='1';
      }

         if(firstname.val()==''){
           firstname.parent().addClass('has-error').val('This Field is Required');
      }
           else{
          firstname.parent().removeClass('has-error');
            result +='1';
      }

         if(lastname.val()==''){
           lastname.parent().addClass('has-error').val('This Field is Required');
      }
           else{
          lastname.parent().removeClass('has-error');
            result +='1';
      }
       if(phone.val()==''){
           phone.parent().addClass('has-error').val('This Field is Required');
      }
           else{
          phone.parent().removeClass('has-error');
            result +='1';
      }
        if(cnic.val()==''){
           cnic.parent().addClass('has-error').val('This Field is Required');
      }
           else{
          cnic.parent().removeClass('has-error');
            result +='1';
      }
if(city.val()==''){
           city.parent().addClass('has-error').val('This Field is Required');
      }
           else{
          city.parent().removeClass('has-error');
            result +='1';
      }
    if(address.val()==''){
           address.parent().addClass('has-error').val('This Field is Required');
      }
           else{
          address.parent().removeClass('has-error');
            result +='1';
      }
      if(gender.val()==''){
           gender.parent().addClass('has-error').val('This Field is Required');
      }
           else{
          gender.parent().removeClass('has-error');
            result +='1';
      }
      if(phone1.val()==''){
           phone1.parent().addClass('has-error').val('This Field is Required');
      }
           else{
          phone1.parent().removeClass('has-error');
            result +='1';
      }
          if(email.val()==''){
           email.parent().addClass('has-error').val('This Field is Required');
      }
           else{
          email.parent().removeClass('has-error');
            result +='1';
      }
 if(doj.val()==''){
           doj.parent().addClass('has-error').val('This Field is Required');
      }
           else{
          doj.parent().removeClass('has-error');
            result +='1';
      }
 if(dob.val()==''){
           dob.parent().addClass('has-error').val('This Field is Required');
      }
           else{
          dob.parent().removeClass('has-error');
            result +='1';
      }
       if(basicpay.val()==''){
           basicpay.parent().addClass('has-error').val('This Field is Required');
      }
           else{
          basicpay.parent().removeClass('has-error');
            result +='1';
      }
 if(designation.val()==''){
           designation.parent().addClass('has-error').val('This Field is Required');
      }
           else{
          designation.parent().removeClass('has-error');
            result +='1';
      }
       if(job.val()==''){
           job.parent().addClass('has-error').val('This Field is Required');
      }
           else{
          job.parent().removeClass('has-error');
            result +='1';
      }

      if(result=='111111111111111'){


    url='<?php echo site_url('Employee/save_employee')?>';
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
 function showdesignation(){
    $.ajax({
      type:'post',
      dataType:'json',
      url:'<?php echo site_url('Designation/showdesignation')?>',
      success:function(res){
      
        var html=''; 
             html+='<option value="">Select </option>';

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