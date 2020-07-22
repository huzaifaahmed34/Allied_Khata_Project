<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
 Bank Receipt Voucher
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fas fa-arrow-alt-circle-right"></i> Home</a></li>
         <li><a href="#">Voucher </a></li>
        <li class="active">Bank Receipt Voucher</li>
      </ol>
    </section>
      

   <form   id="myForm" >
       
    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Add  Bank Voucher</h3>
        </div>
            
   <div class="alert alert-success" style="display: none;"></div>
   
   <div class="alert alert-danger" style="display: none;"></div>
        <!-- /.box-header -->
        <div class="box-body">
             <h4 class="box-title">Customer Account</h4>
	
             
     
         <div class="row" style="margin-top: 20px;">
               <div class="col-md-1">
              <label>Voucher #</label>
   <input  type=text name=voucherno  class="form-control" readonly="">
    </div>

      <div class="col-md-2">
        <label>Date</label>
       <input type=date name=date1   class="form-control" value="<?php echo date('Y-m-d')?>">

    </div>
       <div class="col-md-2">
        <label>Select Account</label>
    <select name="customer1" id="type1" class="form-control">
     
   
    </select>
    </div>

        <div class="col-md-2">
      <label>Balance</label>
   <input  type=text name=balance1  class="form-control" readonly="">
    </div>
      <div class="col-md-2">
         <label>Remarks</label>
    <input type="text" class="form-control" placeholder="Enter Remarks" name="remarks1"/>
    </div>
       <div class="col-md-2">
         <label>Debit</label>
    <input type="text" class="form-control" placeholder="Enter Amount" name="debit1"/>
    </div>
    <div class="col-md-1" style="margin-top: 25px">
    <button style="background-color:#00A157;margin:0px !important;" type="button" class="btn bg-olive margin" id=btnSave2  >Add </button>
  </div>
          </div>
          
        
                  <div class="row" style="margin-top: 20px;margin-bottom: 20px;">
                      <div class="col-md-12">
            <h4 class="box-title">Bank Account</h4>
          </div>
       <div class="col-md-2">
        <label>Select Account</label>
    <select name="customer" id="type" class="form-control">
     
   
    </select>
    </div>
    <div class="col-md-2">
      <label>Balance</label>
   <input  type=text name=balance  class="form-control" readonly="">
    </div>
      <div class="col-md-2">
        <label>Date</label>
       <input type=date name=date   class="form-control">

    </div>
    
      <div class="col-md-3">
         <label>Remarks</label>
    <input type="text" class="form-control" placeholder="Enter Remarks" name="remarks"/>
    </div>
       <div class="col-md-2">
         <label>Credit</label>
    <input type="text" class="form-control" placeholder="Enter Amount" name="credit" />
    </div>
    <div class="col-md-1" style="margin-top: 25px">
    <button style="background-color:#00A157;margin:0px !important;" type="button" class="btn bg-olive margin" id=btnSave1  >Add </button>
  </div>
          </div>
          
        </form>
		  <div class="row">
		    <div class="col-md-3">
			
			</div>


       
			<div class="col-md-3">
			
			</div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
		  
    <input type=hidden name=subtotal>  
      <!-- /.box -->

      <div class="row">
        <div class="col-md-12">
<div class=table-responsive>
 <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                      <th>Serial no</th>
                        <th>Date</th>
                        <th>Account</th>
                        <th>Remarks</th>
                         <th>Debit</th>
                         <th>Credit</th>
                         
                         <th>Action</th>
                     
                     
                        
                    </tr>
                </thead>
                <tbody id="show_data">
                    
                </tbody>

                <tfoot >
                  <tr>
                    <td></td>
                      <td></td>
                        <td></td>
                          <td></td>
                    <td id=debit ><b></b> </td>
                    <td  id=credit><b></b>  </td></tr>
                      <tr>
                    <td></td>
                      <td></td>
                        <td></td>
                          <td></td>

               
                    <td   colspan="2" ><b>Total Amount : <span id=total></span></b>  </td></tr>
                </tfoot>

            </table>
        </div>
        </div>
        <!-- /.col (left) -->
        <div class="col-md-10">

        
           

   

        </div>
        <div class="col-xs-2">

 <table class="table table-striped" >
                <thead>
              
                </thead>
                <tbody id="">
            
                       
                   </tbody>
            </table>
    
          
 
        </div>

            
            <!-- /.col -->
            <div class="col-md-12" style="text-align: center;">
              <!-- /.form-group -->
              <div class="form-group">
                 <button style="background-color:#00A157;margin:0px !important;" type="button" class="btn bg-olive margin formcancel">Cancel</button>
         <button style="background-color:#00A157;margin:0px !important;" type="button" class="btn bg-olive margin" id=proceed  >Save</button>
      
              </div>
              <!-- /.form-group -->
            </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
       
   </form>
   
 
  </div>  </div>
        <!-- /.box-body -->
        
      </div>
 

  <div class="control-sidebar-bg"></div>

<!-- ./wrapper -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

   <script src="<?php echo base_url('assets/js/print.min.js')?>"></script>

<script>
    $(function(){
count=0;     
       var itemList=[];

var total=0;
var counter=0;
var debit1=0;
var credit1=0;
check();

$('.formcancel').click(function(){

$('#myForm')[0].reset();

$('#show_data').html('');
count=0;     
 itemList=[];

total=0;
counter=0;
debit1=0;
credit1=0;
$('#total').html('0');
showvoucher();
});


function check(){

var t=$('input[name=subtotal]');

if(t.val()!=0){
  $('#proceed').attr('disabled','disabled');
}

if(t.val()==0){
    $('#proceed').removeAttr('disabled','disabled');
}

};
  $('#btnSave1').click(function(){

  
      
  var date=$('input[name=date]');
  var remarks=$('input[name=remarks]');

 var credit=$('input[name=credit]');
 var customer=$('select[name=customer]');
 
       var result = '';
   
          if(date.val()==''){
           date.parent().addClass('has-error').val('This Field is Required');
      }
           else{
          date.parent().removeClass('has-error');
            result +='1';
      }

         if(remarks.val()==''){
           remarks.parent().addClass('has-error').val('This Field is Required');
      }
           else{
          remarks.parent().removeClass('has-error');
            result +='1';
      }
       if(credit.val()==''){
           credit.parent().addClass('has-error').val('This Field is Required');
      }
           else{
          credit.parent().removeClass('has-error');
            result +='1';
      }
if(customer.val()==''){
           customer.parent().addClass('has-error').val('This Field is Required');
      }
           else{
          customer.parent().removeClass('has-error');
            result +='1';
      }
 

      if(result=='1111'){
check();
 var customername = $('select[name=customer]').find(":selected").text();
          
         date=date.val();
        credit=credit.val();
        customer=customer.val();
         
          remarks=remarks.val();
          
  total+=parseFloat(credit);
  $('input[name=subtotal]').val(total);
   credit1+=parseInt(credit);

itemList.push([count,date,0,credit,customer,remarks,customername]);
          var html = '';
          var i;
var j;
          for(i=itemList.length-1; i<itemList.length; i++){
         
        if(itemList[i]==''){}else{  
            html +='<tr id='+itemList[i][0]+'>'+
            '<td>'+itemList[i][0]+'</td>'+
                            '<td >'+itemList[i][1]+'</td>'+
                               '<td >'+itemList[i][6]+'</td>'+
                            '<td>'+itemList[i][5]+'</td>'+ '<td>'+0+'</td>'+
                            '<td>'+itemList[i][3]+'</td>'+
                          
       '<td>'+ '<button class="btn btn-danger delete"' +'Delete' +'</button>'+'</td>' +
       '</tr>';
           
 
            }  
 $('#show_data').append(html);
 check();
          

}
               




 

count++;

     }  $('#total').html(total);
$('#credit').html(parseInt(credit1));
   });




 $('#btnSave2').click(function(){

check();
  var date=$('input[name=date1]');
  var remarks=$('input[name=remarks1]');

 var debit=$('input[name=debit1]');
 var customer=$('select[name=customer1]');
  var voucherno=$('select[name=voucherno]');
 
       var result = '';
   
          if(date.val()==''){
           date.parent().addClass('has-error').val('This Field is Required');
      }
           else{
          date.parent().removeClass('has-error');
            result +='1';
      }

         if(remarks.val()==''){
           remarks.parent().addClass('has-error').val('This Field is Required');
      }
           else{
          remarks.parent().removeClass('has-error');
            result +='1';
      }
       if(debit.val()==''){
           debit.parent().addClass('has-error').val('This Field is Required');
      }
           else{
          debit.parent().removeClass('has-error');
            result +='1';
      }
if(customer.val()==''){
           customer.parent().addClass('has-error').val('This Field is Required');
      }
           else{
          customer.parent().removeClass('has-error');
            result +='1';
      }
 

      if(result=='1111'){
 var customername = $('select[name=customer1]').find(":selected").text();
        

         date=date.val();
        debit=debit.val();
        customer=customer.val();
          remarks=remarks.val();
          
  total-=parseFloat(debit);
   debit1-=parseFloat(debit);
 $('input[name=subtotal]').val(total);
itemList.push([count,date,debit,0,customer,remarks,customername]);
          var html = '';
          var i;

          for(i=itemList.length-1; i<itemList.length; i++){
         
        if(itemList[i]==''){}else{  
            html +='<tr id='+itemList[i][0]+'><td>'+itemList[i][0]+'</td>'+
                            '<td >'+itemList[i][1]+'</td>'+
                               '<td >'+itemList[i][6]+'</td>'+
                            '<td>'+itemList[i][5]+'</td>'+ '<td>'+itemList[i][2]+'</td>'+
                            '<td>'+0+'</td>'+
                          
                           '<td>' +
        '<button class="btn btn-danger delete">' +
        'Delete' +
        '</button>' +
        '</td>' +'</tr>';

        $('#show_data').append(html);
        }     
                 } 

count++;


     }  $('#total').html(total);
     $('#debit').html(parseFloat(debit1));
     check();

   });



$('#show_data').on('click', '.delete', function() {
    $(this).parent().parent('tr').remove();
var m=$(this).parent().parent('tr').attr('id');


if(itemList[m][0]==m){
if(itemList[m][2]>0){
   total=total-(-1*itemList[m][2]);
    debit1=debit1+parseInt(itemList[m][2]);
     $('input[name=subtotal]').val(total);
     check();
}
else{
  total=total-(itemList[m][3]);
  credit1=credit1-itemList[m][3];
  $('input[name=subtotal]').val(total);
  check();
}
itemList[m]=[];
$('#total').html(total);
$('#debit').html(debit1);
$('#credit').html(credit1);
};


});
  




$('#proceed').click(function(){
  
$.ajax({
  type:'POST',
  data:{itemList:itemList,'total':total,'debit':debit1,'credit':credit1},
  dataType:'JSON',
  url:'<?php echo site_url('Voucher/add_bank_receipt_voucher')?>',
  success:function(){
    $('#myForm')[0].reset();
    $('#show_data tr').remove();
 showvoucher();
    itemList=[];
    count=0;
    $('#total').html(0);
    $('#debit').html(0);
    $('#credit').html(0);
total=0;
debit1=0;
credit1=0;

      $('.alert-success').html('Data successfully added').fadeIn().delay(8000).fadeOut('slow');


  },
  error:function(){
    alert('data not added');
  },

});

  });


 showcustomer();
 function showcustomer(){
    $.ajax({
      type:'post',
      dataType:'json',
      url:'<?php echo site_url('Voucher/show_bank_customer1')?>',
      success:function(res){
      
        var html=''; 
           html+='<option value="" >Select </option>';

         $.each(res,function(i,item){
            html+='<option value='+item.id+'>'+item.fullname+'</option>';
        });
        $('#type1').html(html);

      }


    });


  };
  $('#type').change(function(){

      var bank_id=$('#type').val();

$.ajax({
type:'post',
data:{'id':bank_id},
url:'<?php echo site_url('Voucher/show_bank_balance')?>',
datatype:'json',
 success:function(res){
      var res=JSON.parse(res);
         $.each(res,function(i,item){
            $('input[name=balance]').val(item.balance);
        });
      

      }



});

  });
  $('#type1').change(function(){

      var bank_id=$('#type1').val();

$.ajax({
type:'post',
data:{'id':bank_id},
url:'<?php echo site_url('Voucher/show_bank_balance')?>',
datatype:'json',
 success:function(res){
      var res=JSON.parse(res);
         $.each(res,function(i,item){
            $('input[name=balance1]').val(item.balance);
        });
      

      }



});

  });
   showbankcustomer();
 function showbankcustomer(){
    $.ajax({
      type:'post',
      dataType:'json',
      url:'<?php echo site_url('Voucher/show_bank_customer')?>',
      success:function(res){
      
        var html=''; 
           html+='<option value="" >Select </option>';

         $.each(res,function(i,item){
            html+='<option value='+item.id+'>'+item.fullname+'</option>';
        });
        $('#type').html(html);

      }


    });


  };


 showvoucher();
 function showvoucher(){
    $.ajax({
      type:'post',
      datatype:'json',
      url:'<?php echo site_url('Voucher/voucher_id')?>',
      success:function(res){
var res=JSON.parse(res);

          $.each(res,function(i,item){
           
           $('input[name=voucherno]').val(item.id);
        });
      

      }
      

    });


  };


});

    </script>
 
</body>
</html>