<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
       Designation
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fas fa-arrow-alt-circle-right"></i> Home</a></li>
         <li><a href="#">   Designation</a></li>
         <li class="active">View Designation </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        

          <div class="box box-success">
              <div class="box-header with-border">
                  <h3 class="box-title">Designation List</h3>
                </div>
          
            <!-- /.box-header -->
            <div class="box-body">
                   
          <div class="alert alert-success" style="display: none;"></div>
          <div class="table-responsive">   
         <table id="example1" class="table  table-striped table-hover js-basic-example dataTable">
              <thead>
                <tr style="background:black;color:white">
         <th>Sno</th>
              
                  <th>Designation</th>
                  <th>Action</th>
                     
                </tr>
                    </thead>
                           
                    <tbody id="showdata">
                    </tbody>
                    </table>


 

                    </div>
                     
                      <div class="row">
            <div class="col-md-3">
          
          </div>
            
                
                <!-- /.col -->
                <div class="col-md-6" >
                 
                </div>
          <div class="col-md-3" style="text-align: right; padding-top:30px;">
           <!-- /.form-group -->
                  <div class="form-group">
                    <button class="btn btn-success" id="btnExport" title="Save as PDF"><i class="fas fa-file-pdf"></i></button>
                    <button class="btn btn-success" id="btnExcel" title="Save as Excel"><i class="far fa-file-excel"></i></button>
                    <a href="<?php echo site_url('Designation/Add_designation');?>" class="btn btn-success" title="Add Designation"><i class="fas fa-plus-square"></i></a>
                  </div>
                  <!-- /.form-group -->
          
          </div>
                <!-- /.col -->
        </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
 

        <!-- MODAL EDIT -->
       
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content update-modal" >
                  <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Edit Designation</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button><hr class="marginButtom0px">
                  </div>
                  <div class="modal-body">
       <form   id="form2" method="post">
      <div class="col-md-6">
                            <input type="hidden" name="id" value=  >
                            <label class=" col-form-label">Country</label>
                              <input type="text" name="designation"  class="form-control" placeholder="Enter Designation Name" >
                            </div>
                          
 </form>

   
  
                     
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btnUpdate" class="btn btn-success">Update</button>
                  </div>


                </div>
              </div>
            </div>
       
 
<div id="deleteModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">        
        <h3 class="modal-title">Confirm Delete</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><hr class="marginButtom0px">
      </div>
      <div class="modal-body">
            Do you want to delete this record?
      </div>
      <div class="modal-footer">
        <button type="button" id="btnDelete" class="btn btn-danger">Delete</button>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
   



</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script>
    $(function(){
   
showdata();
   function showdata(){
    $.ajax({
      type:'ajax',
method:'post',
          
        url:'<?php echo site_url('Designation/showdesignation')?>',
        async:false,
        success:function(res){
          var html='';

var res=JSON.parse(res);
var sno=1;
    $.each(res,function(i,item){
          html+='<tr><td>'
          +sno+'</td><td>'
          +res[i].name+'</td><td><a href=javascript:; data='+res[i].id+' class=editdata><i class="fa fa-pencil-square-o"></i></a> &nbsp;<a href=javascript:; data='+res[i].id+' class=deletedata><i class="fa fa-trash"></i></a></td></tr>';
         sno++;});
          $('#showdata').html(html);
        },
        error:function(){
          alert('data not found');
        }

    });
   };
   $('#showdata').on('click','.editdata',function(){
$('#Modal_Edit').modal('show');
var id=$(this).attr('data');

$.ajax({
    type:'post',
    data:{'id':id},
    datatype:'json',
 
    url:'<?php echo site_url('Allied/designationedit')?>',
    success:function(res){
          res=JSON.parse(res);

     $.each(res,function(i,item){
 $('input[name=id]').val(res[i].id);
        $('input[name=designation]').val(res[i].name);
        
      });
    },
});
$('#btnUpdate').click(function(){
        var data=$('#form2').serialize();
        $.ajax({
            method:'post',
            data:data,
            url:'<?php echo site_url('Allied/designationupdate')?>',
            success:function(res){
              $('#Modal_Edit').modal('hide');
              showdata();
                 $('.alert-success').html('Data Updated Succesfully').fadeIn().delay(4000).fadeOut('slow');

            },
            error:function(){
              alert('data not added');
            }
        });
});
   });


     $('#showdata').on('click','.deletedata',function(){
$('#deleteModal').modal('show');
var id=$(this).attr('data');
$('#btnDelete').click(function(){


$.ajax({
    type:'post',
    data:{'id':id},
    datatype:'json',
    url:'<?php echo site_url('Allied/designationdelete')?>',
    success:function(res){
      $('#deleteModal').modal('hide');
      showdata();
        $('.alert-success').html('Data Deleted Succesfully').fadeIn().delay(4000).fadeOut('slow');
     

    },

  });
});
});
  
    //function
    
    }); 

    </script>

  

</body>
</html>

