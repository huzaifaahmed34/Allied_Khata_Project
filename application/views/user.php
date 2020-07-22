<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>

</head>
<body>
    <form   id="myForm" method="post">
    <div class="container">
    <h2 style="margin-top:20px">Add User</h2>
       
          <div class="alert alert-success a1" style="display: none;"></div>

        <div class="row">
            <div class="col-md-6">
              <label>Enter First Name</label>
    <input name="first_name" id="" class="form-control">
       
    </div>
      <div class="col-md-6">
              <label>Enter Last Name</label>
    <input name="last_name" id="" class="form-control">
       
    </div>

  <div class="col-md-6">
              <label>Enter Username</label>
    <input name="username" id="" class="form-control">
       
    </div>

  <div class="col-md-6">
              <label>Enter Email</label>
    <input name="email" id="" class="form-control">
       
    </div>


  <div class="col-md-6">
              <label>Enter Password</label>
    <input name="password" id="" class="form-control">
       
    </div>

  <div class="col-md-6">
              <label>Enter Contact Number</label>
    <input name="contact" id="" class="form-control">
       
    </div>

  <div class="col-md-6">
              <label>Gender</label><br>
              Male
   <input  type="radio" name="gender"  value="male" checked>
    Female <input type="radio" name="gender" value=female >
       
    </div>


  <div class="col-md-6">
              <label>Enter dob</label>
    <input name="dob" type=date id="" class="form-control">
       
    </div>

  <div class="col-md-6">
              <label>Address</label>
    <textarea name="address" id="address" class="form-control">
       </textarea>
    </div>
<div class=col-md-12 style="margin-top: 10px;">
<input type=button id=submit value="Add Data" class="btn btn-primary"></div>







    </div>

</form>
<table class="table mt-5" style="margin-top: 50px" >
	<thead style=background:black;color:white;>
		<tr><td>ID</td>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Username</td>
			<td>Email</td>
			
			<td>Contact</td>
			<td>Gender</td>
			<td>Dob</td>
			<td>Address</td>
			<td>Action</td>
		</tr>

	</thead>
	<tbody id=showdata>
		
	</tbody>
</table>
</div></form>

      <form id="form2" >
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-md" role="document">
                <div class="modal-content update-modal" >
                  <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Edit User</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -28px;">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                      <input name=id type=hidden>
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
              <label>Gender</label><br>
              Male
   <input  type="radio" name="gender1" id="male" value=male>
    Female <input type="radio" name="gender1" id="female" value=female>
       
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
                        
                     
                                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="btnUpdate" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
            </form></div>

            <div id="deleteModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">        
        <h4 class="modal-title">Confirm Delete</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
            Do you want to delete this record?
      </div>
      <div class="modal-footer">
        <button type="button" id="btnDelete" class="btn btn-danger btn-raised g-bg-cyan">Delete</button>
        <button type="button" class="btn btn-raised" data-dismiss="modal">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
</body>
</html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 

    
<script>
    $(function(){
$('#submit').click(function(){
			
		var fname=$('input[name=first_name]');
		var lname=$('input[name=last_name]');

		var email=$('input[name=email]');
		var contact=$('input[name=contact]');
		var dob=$('input[name=dob]');
		var username=$('input[name=username]');
		var password=$('input[name=password]');
		var address=$('input[name=address]');
		var gender=$('input[name=gender]');
		var address=$('textarea[name=address]');
	var result='';
	if(fname.val()==''){
		fname.parent().addClass('has-error');
	}
	else{
		fname.parent().removeClass('has-error');
		result+='1';
	}
		if(lname.val()==''){
		lname.parent().addClass('has-error');
	}
	else{
		lname.parent().removeClass('has-error');
		result+='1';
	}
		if(email.val()==''){
		email.parent().addClass('has-error');
	}
	else{
		email.parent().removeClass('has-error');
		result+='1';
	}
		if(contact.val()==''){
		contact.parent().addClass('has-error');
	}
	else{
	contact.parent().removeClass('has-error');
		result+='1';
	}
		if(dob.val()==''){
		dob.parent().addClass('has-error');
	}
	else{
		dob.parent().removeClass('has-error');
		result+='1';
	}
		
		if(username.val()==''){
		username.parent().addClass('has-error');
	}
	else{
		username.parent().removeClass('has-error');
		result+='1';
	}
		if(password.val()==''){
		password.parent().addClass('has-error');
	}
	else{
		password.parent().removeClass('has-error');
		result+='1';
	}
	


	if(result=='1111111'){

		var data=$('#myForm').serialize();
	

	
		$.ajax({
		  type:'post',
    data:data,
    datatype:'json',
 
    url:"<?php echo site_url('User/insert')?>",
			success:function(res){
				$('.alert-success').html('Data added Successfully').fadeIn().delay('4000').fadeOut('slow');
				$('#myForm')[0].reset();

			},
			error:function(){
				alert('error');
			}
		});
	}


});
showdata();
function showdata(){
		$.ajax({
			   type:'ajax',
method:'post',
         
        url:"<?php echo site_url('User/showdata')?>",
        
        success:function(res){
          var html='';

var res=JSON.parse(res);

    $.each(res,function(i,item){
          html+='<tr><td>'
          +res[i].id+'</td><td>'
          +res[i].first_name+'</td><td>'
          +res[i].last_name+'</td><td>'
          +res[i].username+'</td><td>'
          +res[i].email+'</td><td>'
          +res[i].contact+'</td><td>'
          +res[i].dob+'</td><td>'
          +res[i].gender+'</td><td>'
          +res[i].address+'</td><td><a href=javascript:; data='+res[i].id+' class=editdata>Edit</a> &nbsp;<a href=javascript:; data='+res[i].id+' class=deletedata>Delete</a></td></tr>';
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

            		if(res[i].gender=='male'){
$('#male').prop("checked",true);

            		};

            		if(res[i].gender=='female'){
$('#female').prop("checked",true);

            		};
              $('textarea[name=address1]').val(res[i].address);
                $('input[name=contact1]').val(res[i].contact);
                  $('input[name=dob1]').val(res[i].dob);
                    $('input[name=gender1]').val(res[i].gender);
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


    });
    </script>

