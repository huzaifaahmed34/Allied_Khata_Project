<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
    Company
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fas fa-arrow-alt-circle-right"></i> Home</a></li>
         <li><a href="#">Company </a></li>
        <li class="active">Add Company</li>
      </ol>
    </section>
      

   <form   id="myForm" >
       
    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Add Company</h3>
        </div>
            
   <div class="alert alert-success" style="display: none;"></div>
   
   <div class="alert alert-danger" style="display: none;"></div>
        <!-- /.box-header -->
        <div class="box-body">
          
		  <div class="row">
		      <div class="col-md-6">
        <label>Company Name</label>
      <input name=company_name   class="form-control" placeholder="Enter Company Name">
    </div>
            <div class="col-md-6">
              <label>Enter Phone</label>
   <input name=phone  class="form-control" placeholder="Enter Phone">
    </div>
      <div class="col-md-6">
        <label>Fax</label>
       <input name=fax   class="form-control" placeholder="Enter Fax Number">

    </div>
      <div class="col-md-6">
         <label>Email</label>
    <input type="text" class="form-control" placeholder="Enter Email" name="email"/>
    </div>
       <div class="col-md-6">
         <label>City</label>
    <input type="text" class="form-control" placeholder="Enter City Name" name="city"/>
    </div>
    <div class="col-md-6">
       <label>Address</label>
    <input type="text" class="form-control"  placeholder="Enter Address" name="address">
    </div>
     <div class="col-md-6">
       <label>Logo</label>
  <input type="file" class="form-control"  name="logo">
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
				 <button style="background-color:#00A157;margin:0px !important;" type="submit" class="btn bg-olive margin" id=proceed  >Submit</button>
				 <a href="<?php echo site_url('Company/View_company');?>" style="background-color:#00A157 ;margin:0px !important;" type="button" class="btn bg-olive margin">View Company</a>
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



$('#myForm').on('submit',function(e){
  e.preventDefault();


     
  var name=$('input[name=company_name]');
  var phone=$('input[name=phone]');

 var fax=$('input[name=fax]');
 var address=$('input[name=address]');
 var city=$('input[name=city]');
 var email=$('input[name=email]');


 var logo=$('input[name=logo]');
 
        


       var result = '';
   
if(name.val()==''){
           name.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          name.parent().parent().removeClass('has-error');
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
      if(fax.val()==''){
           fax.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          fax.parent().parent().removeClass('has-error');
            result +='1';
      }
      if(logo.val()==''){
           logo.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          logo.parent().parent().removeClass('has-error');
            result +='1';
      }
          if(email.val()==''){
           email.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          email.parent().parent().removeClass('has-error');
            result +='1';
      }

      if(result=='1111111'){


    url='<?php echo site_url('Company/save_company')?>';
    data=$('#myForm').serialize();



$.ajax({
  type:'POST',
  data:new FormData(this),
  dataType:'JSON',
  url:url,
    contentType:false,
    cache:false,
   processData:false,
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