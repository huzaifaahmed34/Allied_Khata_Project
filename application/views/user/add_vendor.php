<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
    Vendor
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fas fa-arrow-alt-circle-right"></i> Home</a></li>
         <li><a href="#"> Vendor </a></li>
        <li class="active">Add Vendor</li>
      </ol>
    </section>
      

   <form   id="myForm" >
       
    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Add Vendor</h3>
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
				 <a href="<?php echo site_url('Vendors/View_vendors');?>" style="background-color:#00A157 ;margin:0px !important;" type="button" class="btn bg-olive margin">View Vendor</a>
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


    url='<?php echo site_url('vendors/save_vendor')?>';
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

      $('.alert-danger').html('Data Not added').fadeIn().delay(8000).fadeOut('slow');

    alert('data not added');
  }

});
}
});
  });





    </script>
 
</body>
</html>