<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
      Company
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fas fa-arrow-alt-circle-right"></i> Home</a></li>
         <li><a href="#">Company</a></li>
         <li class="active">View Company</li>
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
                       <th>Company name</th>
                        <th>Phone</th>
                         <th>Fax</th>
                        <th>Email</th>
                       
                        <th>City</th>
                          <th>Address</th>
                       <th>Logo</th>
                         
                         <th>Action</th>
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
  <input type="hidden" name=hidden>


           
          <div class="alert alert-success a1" style="display: none;"></div>

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
      url:'<?php echo site_url('Company/show_Company')?>',
      async:false,
      success:function(res){
        var html='';
      var sno=1;


        var res=JSON.parse(res);
        $.each(res,function(i,item){
               if(item.status==0){
        var enable='<input type=radio value="0" name=status'+item.id+'  class=enable data='+item.id+' checked>';
         var disable='<input type=radio name=status'+item.id+' value="1" class=disable data='+item.id+'>';
      }
        if(item.status==1){
        var disable='<input type=radio name=status'+item.id+' value="1" class=disable data='+item.id+' checked>';
          var enable='<input type=radio value="0" name=status'+item.id+'  class=enable data='+item.id+' >';
      }

          
          html+='<tr>'+
            '<td>'+sno+'</td>'+
            '<td>'+item.company_name+'</td>'+
            '<td>'+item.phone+'</td>'+
            '<td>'+item.fax+'</td>'+
            '<td>'+item.email+'</td>'+
            '<td>'+item.city+'</td>'+
            '<td>'+item.address+'</td>'+
            '<td><img src=<?php echo base_url()?>uploads/'
          +item.logo+' width=50px height=50px></td>'+
            '<td><a href=javascript:; data='+item.id+' class=editdata><i class="fa fa-pencil-square-o"></i></a> &nbsp;'+
            '<a href=javascript:; data='+item.id+'  class=deletedata><i class="fa fa-trash"></i></a></td>'+
            '<td>Enable '+enable+'Disable '+disable+'</td></tr>';
           sno++;
        
}); $('#show_data').html(html);

        },
        });



      }



       $('#show_data').on('click','.enable',function(){
      
        var id=$(this).attr('data');

        var value=$(this).attr('value');
      
      
        $.ajax({
    type:'post',
    data:{'id':id,'value':value},
    datatype:'json',
 
    url:'<?php echo site_url('Company/company_status')?>',
  
    });
      });
  

   $('#show_data').on('click','.disable',function(){
      
        var id=$(this).attr('data');

        var value=$(this).attr('value');
      
      
        $.ajax({
    type:'post',
    data:{'id':id,'value':value},
    datatype:'json',
 
    url:'<?php echo site_url('Company/company_status')?>',
  
    });
      });

$('#show_data').on('click','.editdata',function(){
  var id=$(this).attr('data');

  
  

      });
  
 
 $('#show_data').on('click','.editdata',function(){
$('#Modal_Edit').modal('show');

var id=$(this).attr('data');
$.ajax({
    method:'post',


 data:{'id':id},

  
    datatype:'json',
  
  
    url:'<?php echo site_url('Company/edit_Company')?>',
    success:function(res){
     var res=JSON.parse(res);
     console.log(res);

    $.each(res,function(i,item){

             $('input[name=id]').val(item.id);

 $('input[name=company_name]').val(res[i].company_name);

 $('input[name=phone]').val(res[i].phone);
 $('input[name=city]').val(res[i].city);
 $('input[name=address]').val(res[i].address);
 $('input[name=fax]').val(res[i].fax);
  $('input[name=email]').val(res[i].email);
 $('input[name=hidden]').val(res[i].logo);


  
     });
     
    },
}); 

});
 $('#form2').on('submit',function(e){
  e.preventDefault();

 
       
        $.ajax({
            method:'post',
             dataType:'JSON',
            data:new FormData(this),
            url:'<?php echo site_url('Company/update_Company')?>',
               contentType:false,
    cache:false,
   processData:false,
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

  url='<?php echo site_url('Company/delete_Company')?>'

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


