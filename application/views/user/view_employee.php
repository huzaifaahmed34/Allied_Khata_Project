<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
      Employee
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fas fa-arrow-alt-circle-right"></i> Home</a></li>
         <li><a href="#">Employee</a></li>
         <li class="active">View Employee</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        

          <div class="box box-success">
              <div class="box-header with-border">
                  <h3 class="box-title">Employee's List</h3>
                </div>
          
            <!-- /.box-header -->
            <div class="box-body">
                   
          <div class="alert alert-success" style="display: none;"></div>
          <div class="table-responsive">   
         <table id="example1" class="table  table-striped table-hover js-basic-example dataTable">
              <thead>
                <tr style="background:black;color:white">
           <th>Sno</th>
             
                        <th>Firstname</th>
                        <th>lastname</th>
                         <th>Cnic</th>
                        <th>Phone1</th>
                        <th>Phone2</th>
                         <th>Gender</th>
                           <th>City</th>
                            <th>Address</th>
                            
                             <th>Email</th>
                       
                          <th>Dob</th>
                       <th>Doj</th>
                        <th>Job</th>
                       
                           <th>Basicpay</th>
                           <th>Designation</th>
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
                    <a href="<?php echo site_url('Employee/add_employee');?>" class="btn btn-success" title="Add Employee"><i class="fas fa-plus-square"></i></a>
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
                    <h3 class="modal-title" id="exampleModalLabel">Edit Employee</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button><hr class="marginButtom0px">
                  </div>
                  <div class="modal-body">
       <form   id="form2" method="post">
 <input type="hidden" name=id>
 


           
          <div class="alert alert-success a1" style="display: none;"></div>

        <div class="row">
    
    <input name=id type="hidden" class="form-control" >
     <input name=account_id type="hidden" class="form-control" >
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
      <div class="col-md-4">
        <label>Enter Gender</label><br>Male
       <input type=radio name=gender  id=male value=male  >Female
       <input type=radio name=gender  id=female value=female >

    </div>
    </div> 
 </form>

   

  
                     
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id=btnUpdate  class="btn btn-success">Update</button>
                  </div>


                </div>
              </div>
            </div>
       
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
      url:'<?php echo site_url('Employee/show_employee')?>',
      async:false,
      success:function(res){
        var html='';
      var sno=1;
        var res=JSON.parse(res);
        $.each(res,function(i,item){

          html+='<tr>'+
            '<td>'+sno+'</td>'+
            '<td>'+item.firstname+'</td>'+
            '<td>' +item.lastname+'</td>'+
            '<td>'+item.cnic+'</td>'+
            '<td>'+item.phone_1+'</td>'+
            '<td>'+item.phone_2+'</td>'+
            '<td>'+item.gender+'</td>'+
            '<td>'+item.city+'</td><td>'+item.address+'</td>'+
            '<td>'+item.email+'</td>'+
            '<td>'+item.dob+'</td>'+
            '<td>'+item.doj+'</td>'+
            '<td>'+item.job_type+'</td>'+
            '<td>'+item.basic_pay+'</td>'+
            '<td>'+item.designation+'</td>'+
            '<td><a href=javascript:; data='+item.id+' class=editdata><i class="fa fa-pencil-square-o"></i>'+
            '</a> &nbsp;<a href=javascript:; data='+item.id+' data2='+item.account_id+' class=deletedata><i class="fa fa-trash"></i></a></td>'+
            '</tr>';
         sno++;
}); $('#show_data').html(html);

        },
        });



      }

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
  
  
    url:'<?php echo site_url('Employee/edit_employee')?>',
    success:function(res){
   
     var res=JSON.parse(res);
    $.each(res,function(i,item){

             $('input[name=id]').val(item.id);

$('input[name=account_id]').val(item.account_id);
      $('input[name=firstname]').val(item.firstname);
$('input[name=lastname]').val(item.lastname);
$('input[name=phone]').val(item.phone_1);
$('input[name=phone1]').val(item.phone_2);
$('input[name=dob]').val(item.dob);
$('input[name=doj]').val(item.doj);
 $('input[name=basicpay]').val(item.basic_pay); 
 $('input[name=city]').val(item.city);
 $('input[name=address]').val(item.address);
 $('#designation option[value='+item.designation+']').attr('selected','selected');
 $('#job option[value="'+item.job_type+'"]').attr('selected','selected');
                if(item.gender=='male'){
$('#male').prop("checked",true);

                };

                if(item.gender=='female'){
$('#female').prop("checked",true);

                };
 


 $('input[name=cnic]').val(item.cnic);
 
$('input[name=email]').val(item.email);

  
     });
     
    },
}); 

});
 $('#btnUpdate').click(function(){
        var data=$('#form2').serialize();
        $.ajax({
            method:'post',
            data:data,
            url:'<?php echo site_url('Employee/update_employee')?>',
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
var id=$(this).attr('data2');


  url='<?php echo site_url('Employee/delete_employee')?>'

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
  

   });

</script>


