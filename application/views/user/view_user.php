<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
      User
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fas fa-arrow-alt-circle-right"></i> Home</a></li>
         <li><a href="#">     User</a></li>
         <li class="active">View   User</li>
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
        <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
      <th>Email</th>
      
      <th>Contact</th>
   
      <th>Dob</th>
      <th>Address</th>
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
                    <a href="<?php echo site_url('User/Add_User');?>" class="btn btn-success" title="Add Designation"><i class="fas fa-plus-square"></i></a>
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
                    <h3 class="modal-title" id="exampleModalLabel">Edit  User</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button><hr class="marginButtom0px">
                  </div>
                  <div class="modal-body">
       <form   id="form2" method="post">
           <input name=id type=hidden>
           <div class=row>
              <div class="col-md-6">
         <label>Select Company Name</label>
        <select name="company" id="company" class="form-control">
       
   
    </select>
  </div>
            <div class="col-md-6">
              <label>Enter First Name</label>
    <input name="first_name1" id="" class="form-control">
       
    </div>
      <div class="col-md-6">
              <label>Enter Last Name</label>
    <input name="last_name1" id="" class="form-control">
       
    </div>

  <div class="col-md-6">
              <label>Enter Username</label>
    <input name="username1" id="" class="form-control">
       
    </div>

  <div class="col-md-6">
              <label>Enter Email</label>
    <input name="email1" id="" class="form-control">
       
    </div>



  <div class="col-md-6">
              <label>Enter Contact Number</label>
    <input name="contact1" id="" class="form-control">
       
    </div>



  <div class="col-md-6">
              <label>Enter dob</label>
    <input name="dob1" type=date id="" class="form-control">
       
    </div>

  <div class="col-md-6">
              <label>Address</label>
    <textarea name="address1" id="address" class="form-control">
       </textarea>
    </div>
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
         
        url:"<?php echo site_url('User/showdata')?>",
        
        success:function(res){
          var html='';
var sno=1;
var res=JSON.parse(res);

    $.each(res,function(i,item){
          html+='<tr>'+

            '<td>'+sno+'</td>'+
            '<td>'+res[i].first_name+'</td>'+
            '<td>'+res[i].last_name+'</td>'+
            '<td>'+res[i].username+'</td>'+
            '<td>'+res[i].email+'</td>'+
            '<td>'+res[i].contact+'</td>'+
            '<td>'+res[i].dob+'</td>'+
            '<td>'+res[i].address+'</td>'+
            '<td><a href=javascript:; data='+res[i].id+' class=editdata><i class="fa fa-pencil-square-o"></i></a> '+
            '&nbsp;<a href=javascript:; data='+res[i].id+' class=deletedata><i class="fa fa-trash"></i></a></td>'+
            
            '</tr>';
          sno++;
        });
          $('#showdata').html(html);

           
        },
        error:function(){
          alert('data not found');
        }


    });

}

  $('#showdata').on('click','.editdata',function(){
$('#Modal_Edit').modal('show');
var id=$(this).attr('data');

$.ajax({
    type:'post',
    data:{'id':id},
    datatype:'json',
 
    url:'<?php echo site_url('User/user_edit')?>',
    success:function(res){
  
          res=JSON.parse(res);

     $.each(res,function(i,item){
 $('input[name=id]').val(res[i].id);
        $('input[name=first_name1]').val(res[i].first_name);
          $('input[name=last_name1]').val(res[i].last_name);
            $('input[name=email1]').val(res[i].email);

           
              $('textarea[name=address1]').val(res[i].address);
                $('input[name=contact1]').val(res[i].contact);
                  $('input[name=dob1]').val(res[i].dob);
                   $('#company option[value='+item.company_id+']').attr('selected','selected');
 
                      $('input[name=username1]').val(res[i].username);
                        
      });
    },
});
$('#btnUpdate').click(function(){
        var data=$('#form2').serialize();
        $.ajax({
            method:'post',
            data:data,
            url:'<?php echo site_url('User/user_update')?>',
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
    url:'<?php echo site_url('User/user_delete')?>',
    success:function(res){
      $('#deleteModal').modal('hide');
      showdata();
        $('.alert-success').html('Data Deleted Succesfully').fadeIn().delay(4000).fadeOut('slow');
     

    },

  });
});
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

  

</body>
</html>

