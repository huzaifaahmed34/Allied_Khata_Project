<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
     Designation
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fas fa-arrow-alt-circle-right"></i> Home</a></li>
         <li><a href="#"> Designation</a></li>
        <li class="active">Add Designation</li>
      </ol>
    </section>
      

   <form   id="form1" action="<?php echo site_url('Designation/designationadd')?>">
       
    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Add Designation</h3>
        </div>
            
   <div class="alert alert-success" style="display: none;"></div>
   
   <div class="alert alert-danger" style="display: none;"></div>
        <!-- /.box-header -->
        <div class="box-body">
          
		  <div class="row">
	     <div class="col-md-6">
                              
                            <label class="col-form-label">Designation: </label>
                              <input type="text" name="designation1"  class="form-control" placeholder="Enter Designation Name" >
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
				 <button style="background-color:#00A157;margin:0px !important;" type="button" class="btn bg-olive margin"  id="adddata" >Submit</button>
				 <a href="<?php echo site_url('Designation/view_designation');?>" style="background-color:#00A157 ;margin:0px !important;" type="button" class="btn bg-olive margin">View Designation</a>
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
    $('#adddata').click(function(){
      var data=$('#form1').serialize();

      var name=$('input[name=designation1]');
      
      var url=$('#form1').attr('action');
      var r='';
      if(name.val()==''){
        name.parent().addClass('has-error');
      }
      else{
        name.parent().removeClass('has-error');
             r+='1';

      }
      
      if(r=='1'){
       
          $.ajax({
          
            method:'post',
            data:data,
            url:url,
            datatype:'json',
            success:function(res){
               
                $('#add').modal('hide');
                $('#form1')[0].reset();
                $('.alert-success').html('Data Inserted Succesfully').fadeIn().delay(4000).fadeOut('slow');
            },
            error:function(){
              alert('no');
            },
          });
      };
    });
  });
</script>