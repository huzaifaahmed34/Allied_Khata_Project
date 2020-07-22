<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
      Bank Settings
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fas fa-arrow-alt-circle-right"></i> Home</a></li>
         <li><a href="#">Bank Settings</a></li>
         <li class="active">View Bank</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        

          <div class="box box-success">
              <div class="box-header with-border">
                  <h3 class="box-title">Company's List</h3>
                </div>
          
            <!-- /.box-header -->
            <div class="box-body">
                   
          <div class="alert alert-success" style="display: none;"></div>
          <div class="table-responsive">   
         <table id="example1" class="table  table-striped table-hover js-basic-example dataTable">
              <thead>
                <tr style="background:black;color:white">
           <th>Sno</th>
                       <th>Bank name</th>
                        <th>Branch</th>
                      
                          <th>City</th>
                     
                        <th>Action</th>                         
                     
                </tr>
                    </thead>
                           
                    <tbody id="show_data">
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
                    <a href="<?php echo site_url('Bank/add_bank');?>" class="btn btn-success" title="Add Bank"><i class="fas fa-plus-square"></i></a>
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
          <form id="form2" method="post">
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content update-modal" >
                  <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Edit Company</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button><hr class="marginButtom0px">
                  </div>
                  <div class="modal-body">
    
 <input type="hidden" name=id>
 


           
          <div class="alert alert-success a1" style="display: none;"></div>

        <div class="row">
      <div class="col-md-6">
        <label>Bank Name</label>
      <input name=bank_name   class="form-control" placeholder="Enter Company Name">
    </div>
            <div class="col-md-6">
              <label>Branch Name</label>
   <input name=branch  class="form-control" placeholder="Enter Phone">
    </div>
      <div class="col-md-6">
        <label>City</label>
       <input name=city   class="form-control" placeholder="Enter Fax Number">

    </div>
   


    </div> 
   

  
                     
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button  type="submit" id=btnUpdate  class="btn btn-success">Update</button>
                  </div>




                </div>
              </div>
            </div>
       
        </form>
        <!--END MODAL EDIT-->

   

<!-- delete -->
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
<script type="text/javascript">
  $(function(){
    show_data();
  function show_data(){
    $.ajax({
      method:'post',
      datatype:'json',
      url:'<?php echo site_url('Bank/show_Bank')?>',
      success:function(res){
        var html='';
      var sno=1;


        var res=JSON.parse(res);
        $.each(res,function(i,item){
              
       

          
          html+='<tr>'+
            '<td>'+sno+'</td>'+
            '<td>'+item.fullname+'</td>'+
            '<td>'+item.address+'</td>'+
            '<td>'+item.city+'</td>'+
            '<td><a href=javascript:; data='+item.id+' class=editdata><i class="fa fa-pencil-square-o"></i></a> &nbsp;'+
            '<a href=javascript:; data='+item.id+'  class=deletedata><i class="fa fa-trash"></i></a></td>'+
            '</tr>';
           sno++;
        
}); $('#show_data').html(html);

        },
        });



      }


 
 $('#show_data').on('click','.editdata',function(){
$('#Modal_Edit').modal('show');

var id=$(this).attr('data');
$.ajax({
    method:'post',


 data:{'id':id},

  
    datatype:'json',
  
  
    url:'<?php echo site_url('bank/edit_Bank')?>',
    success:function(res){
     var res=JSON.parse(res);
     console.log(res);

    $.each(res,function(i,item){

             $('input[name=id]').val(item.id);

 $('input[name=bank_name]').val(res[i].fullname);

 $('input[name=branch]').val(res[i].address);
 $('input[name=city]').val(res[i].city);
 


  
     });
     
    },
}); 

});
 $('#form2').on('submit',function(e){
  e.preventDefault();

  var data=$('#form2').serialize();

       
        $.ajax({
            method:'post',
             dataType:'JSON',
            data:data,
            url:'<?php echo site_url('Bank/update_Bank')?>',
             
            success:function(res){
              $('#Modal_Edit').modal('hide');
              show_data();
                 $('.alert-success').html('Data Updated Succesfully').fadeIn().delay(4000).fadeOut('slow');

            },
            error:function(){
              alert('data not added');
            }
        });
});


     $('#show_data').on('click','.deletedata',function(){
$('#deleteModal').modal('show');
var id=$(this).attr('data');
var type=$(this).attr('data2');

  url='<?php echo site_url('Bank/delete_Bank')?>'

$('#btnDelete').unbind().click(function(){


$.ajax({
    type:'post',
    data:{'id':id},
    datatype:'json',
    url:url,
    success:function(res){
      $('#deleteModal').modal('hide');
      show_data();
        $('.alert-success').html('Data Deleted Succesfully').fadeIn().delay(4000).fadeOut('slow');
     

    },

  });
});
});



   });

</script>


