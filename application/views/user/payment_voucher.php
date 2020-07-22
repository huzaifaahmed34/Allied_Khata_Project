<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
 Payment Voucher
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fas fa-arrow-alt-circle-right"></i> Home</a></li>
         <li><a href="#">Voucher </a></li>
        <li class="active"> Payment Voucher</li>
      </ol>
    </section>
      

   <form   id="myForm" >
       
    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Add  Payment Voucher</h3>
        </div>
            
   <div class="alert alert-success" style="display: none;"></div>
   
   <div class="alert alert-danger" style="display: none;"></div>
        <!-- /.box-header -->
        <div class="box-body">
            
		  <div class="row">
               <div class="col-md-3">
              <label>Voucher #</label>
   <input  type=text name=voucherno  class="form-control" readonly="">
    </div>
      <div class="col-md-3">
        <label>Date</label>
       <input type=date name=date   class="form-control" value="<?php echo date('Y-m-d')?>">

    </div>
		   <div class="col-md-3">
        <label>Select Customer</label>
    <select name="customer" id="type" class="form-control">
     
   
    </select>
    </div>
   
      <div class="col-md-3">
         <label>Remarks</label>
    <input type="text" class="form-control" placeholder="Enter Remarks" name="remarks"/>
    </div>
       <div class="col-md-3">
         <label>Amount</label>
    <input type="text" class="form-control" placeholder="Enter Amount" name="amount"/>
    </div>
    <div class="col-md-3" style="margin-top: 25px">
    <button style="background-color:#00A157;margin:0px !important;" type="button" class="btn bg-olive margin" id=btnSave1  >Add Voucher</button>
	</div>
          </div>
          
             
     
       
        
              
        </form>
		  <div class="row">
		    <div class="col-md-3">
			
			</div>


        
            
      
              <!-- /.form-group -->
            </div>
			<div class="col-md-3">
			
			</div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
		  
      
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
                         <th>Amount</th>
                    
                     
                     
                        
                    </tr>
                </thead>
                <tbody id="show_data">
                    
                </tbody>
            </table>
        </div>
        </div>
              <!-- /.col -->
       
        <!-- /.col (left) -->
        <div class="col-md-10">

        
           

   

        </div>
        <div class="col-xs-2">

 <table class="table table-striped" >
                <thead>
              
                </thead>
                <tbody id="">
            
                         <td ><b>Total Amount : </b> <span id=total></span> </td>
                   </tbody>
            </table>
    
          
 
        </div>
             <div class="col-md-12" style="text-align: center;">
              <!-- /.form-group -->
              <div class="form-group">
                 <button style="background-color:#00A157;margin:0px !important;" type="button" class="btn bg-olive margin formcancel">Cancel</button>
         <button style="background-color:#00A157;margin:0px !important;" type="button" class="btn bg-olive margin" id=proceed  >Save</button>

     <a style="background-color:#00A157;margin:0px !important;" type="button" class="btn bg-olive margin" id=print  >Save and Print</a>     
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

  $('#btnSave1').click(function(){

      
  var date=$('input[name=date]');
  var remarks=$('input[name=remarks]');

 var amount=$('input[name=amount]');
 var customer=$('select[name=customer]');
  var voucherno=$('input[name=voucherno]');
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
       if(amount.val()==''){
           amount.parent().addClass('has-error').val('This Field is Required');
      }
           else{
          amount.parent().removeClass('has-error');
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


         date=date.val();
        amount=amount.val();
        customer=customer.val();
          remarks=remarks.val();
          voucherno=voucherno.val();

  total+=parseFloat(amount);

itemList.push([count,date,amount,customer,remarks,voucherno]);
          var html = '';
          var i;

          for(i=0; i<itemList.length; i++){
         
        if(itemList[i]==''){}else{  
            html +='<tr id='+itemList[i][0]+'>'+
            '<td>'+itemList[i][0]+'</td>'+
                            '<td >'+itemList[i][1]+'</td>'+
                               '<td >'+itemList[i][3]+'</td>'+
                            '<td>'+itemList[i][4]+'</td>'+
                            '<td>'+itemList[i][2]+'</td>'+
                          
                           '</tr>';
            }     } $('#show_data').html(html);

count++;

     }  $('#total').html(total);});







$('#proceed').click(function(){
  save();
});



$('#print').click(function(){
 $.ajax({
  type:'POST',
  data:{itemList:itemList,'total':total},
  dataType:'JSON',
  url:'<?php echo site_url('Voucher/add_payment_voucher')?>',
  async:false,
  success:function(){
   $.ajax({
  type:'POST',
  data:{itemList:itemList},
  dataType:'JSON',
  url:'<?php echo site_url('Voucher/add_to_session')?>',
  async:false,
  success:function(){
 
  }
})
    
 window.location.href="<?php echo site_url('Voucher/add_payment_print')?>";
 
      $('.alert-success').html('Data successfully added').fadeIn().delay(8000).fadeOut('slow');



  },
  error:function(){
    alert('data not added');
  },

});


});






  function save(){
$.ajax({
  type:'POST',
  data:{itemList:itemList,'total':total},
  dataType:'JSON',
  url:'<?php echo site_url('Voucher/add_payment_voucher')?>',
  async:false,
  success:function(){
    $('#myForm')[0].reset();
    $('#show_data tr').remove();
 showvoucher();
    itemList=[];
    count=0;
    $('#total').html(0);
total=0;
$('#btnSave1').removeAttr('disabled','disabled');

      $('.alert-success').html('Data successfully added').fadeIn().delay(8000).fadeOut('slow');


  },
  error:function(){
    alert('data not added');
  },

});

  };


 showcustomer();
 function showcustomer(){
    $.ajax({
      type:'post',
      dataType:'json',
      url:'<?php echo site_url('Quotation/show_customer1')?>',
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
  
 $('.formcancel').click(function(){

$('#myForm')[0].reset();
itemList=[];
$('#show_data').html('');
count=0;  
subtotal=0;
total=0
$('#total').html('0');
  $('#btnSave1').removeAttr('disabled','disabled');
showvoucher();
});


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