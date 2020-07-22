<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
   Bank Settings
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fas fa-arrow-alt-circle-right"></i> Home</a></li>
         <li><a href="#">Bank Settings </a></li>
        <li class="active">Add Bank</li>
      </ol>
    </section>
      

   <form   id="myForm" >
       
    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Add Bank</h3>
        </div>
            
   <div class="alert alert-success" style="display: none;"></div>
   
   <div class="alert alert-danger" style="display: none;"></div>
        <!-- /.box-header -->
        <div class="box-body">
          
		  <div class="row">
		      <div class="col-md-6">
        <label>Bank Name</label>
      <input name=bank_name   class="form-control" placeholder="Enter Bank Name">
    </div>
            <div class="col-md-6">
              <label>Branch Name</label>
   <input name=branch  class="form-control" placeholder="Branch Name">
    </div>
      <div class="col-md-6">
        <label>City</label>
       <input name=city   class="form-control" placeholder="Enter City">

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
                 <button style="background-color:#00A157;margin:0px !important;" type="reset" class="btn bg-olive margin formcancel" >Cancel</button>
				 <button style="background-color:#00A157;margin:0px !important;" type="submit" class="btn bg-olive margin" id=proceed  >Submit</button>
				 <a href="<?php echo site_url('Bank/View_bank');?>" style="background-color:#00A157 ;margin:0px !important;" type="button" class="btn bg-olive margin">View Bank</a>
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


     
  var name=$('input[name=bank_name]');
  var branch=$('input[name=branch]');

 
 var city=$('input[name=city]');

 
        


       var result = '';
   
if(name.val()==''){
           name.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          name.parent().parent().removeClass('has-error');
            result +='1';
      }
       if(branch.val()==''){
           branch.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          branch.parent().parent().removeClass('has-error');
            result +='1';
      }
if(city.val()==''){
           city.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          city.parent().parent().removeClass('has-error');
            result +='1';
      }
   

      if(result=='111'){


    url='<?php echo site_url('Bank/save_bank')?>';
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