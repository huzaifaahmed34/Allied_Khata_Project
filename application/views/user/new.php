<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Quotation
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fas fa-arrow-alt-circle-right"></i> Home</a></li>
         <li><a href="#">Company Settings </a></li>
        <li class="active">Add New Company</li>
      </ol>
    </section>
      

   <form  action="<?php echo site_url('Company/saveCompany')?>" method="post"  id="myForm" >
       
    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Generate Quotation</h3>
        </div>
            
   <div class="alert alert-success" style="display: none;"></div>
   
   <div class="alert alert-danger" style="display: none;"></div>
        <!-- /.box-header -->
        <div class="box-body">
          
		  <div class="row">
		
            <div class="col-md-6">
              <label>Select Customer</label>
    <select name="customer" id="customer" class="form-control">
        <option value="">Select</option>
        
    </select>
    </div>
      <div class="col-md-6">
        <label>Select date</label>
    <input type="date" class="form-control" name="date"/>

    </div>
      <div class="col-md-3">
         <label>Description</label>
    <input type="text" class="form-control" placeholder="Add Description" name="description"/>
    </div>
       <div class="col-md-1">
         <label>Unit</label>
    <input type="text" class="form-control" placeholder="Unit" name="unit"/>
    </div>
    <div class="col-md-1">
       <label>Rate</label>
    <input type="text" id=rate class="form-control" placeholder="Rate" name="rate">
    </div>
     <div class="col-md-1">
       <label>Qty</label>
   <input type="text" class="form-control" placeholder="Qty" id=qty name="qty">
    
    </div>

<div class="col-md-2">
       <label>D%</label>
      <input type="text" id=discount class="form-control" placeholder="Discount" name="discount">
    </div>   
<div class="col-md-2">
       <label>D Amt</label>
    <input type="text" class="form-control" placeholder="D amount" name="damnt" readonly> 
    </div>  
    <div class="col-md-2">
       <label>Total</label>
    <input type="text" class="form-control" placeholder="Total" name="total" readonly>
    </div>  
            
	
          </div>
          
          
		  <div class="row">
		    <div class="col-md-3">
			
			</div>


<div id="confirmmodal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">        
        <h2 class="modal-title">Qoutation Confirm </h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      
        <div class=col-md-12>
             <label>Total</label>
        <input type=text class=form-control id=subtotal name=subtotal>
          </div>
           <div class=col-md-12>
               <label>Discount</label>
        <input type=text class=form-control id=totaldiscount name=totaldiscount>
          </div>
              <div class=col-md-12>
                   <label>Discount(Amount)</label>
        <input type=text class=form-control id=totaldamnt name=totaldamnt readonly>
          </div>
          <div class=col-md-12>
               <label>Net Total</label>
              <input type=text class=form-control id=nettotal name=nettotal readonly>
          </div>
            <div class=col-md-12>
               <label>Remarks</label>
              <input type=text class=form-control id=remarks name=remarks>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="save" class="btn btn-danger btn-raised g-bg-cyan">Save</button>
        <button type="button" id="print" class="btn btn-danger btn-raised g-bg-cyan"  onclick="printJS('mydata', 'html')">Save and Print</button>
        <button type="button" class="btn btn-raised" data-dismiss="modal">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
    
        
            
            <!-- /.col -->
            <div class="col-md-6" style="text-align: center;padding-top: 40px;">
              <!-- /.form-group -->
              <div class="form-group">
                 <button style="background-color:#00A157;margin:0px !important;" type="button" class="btn bg-olive margin">Cancel</button>
				 <button style="background-color:#00A157;margin:0px !important;" type="button" class="btn bg-olive margin"  id="btnSave1" >Add to List</button>
				 <a href="<?php echo site_url('Company/companyView');?>" style="background-color:#00A157 ;margin:0px !important;" type="button" class="btn bg-olive margin">View Companies List</a>
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

      <div class="row">
        <div class="col-md-12">
<div class=table-responsive>
 <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                        <th>Sr#</th>
                        <th>Description</th>
                        <th>Unit</th>
                         <th>Rate</th>
                         <th>Quantity</th>
                          <th>D%</th>
                         <th>D Amnt</th>
                         <th>Total</th>
                          <th>Action</th>
                     
                        
                    </tr>
                </thead>
                <tbody id="show_data">
                    
                </tbody>
            </table>
          </div>
            <button type=button class="btn btn-primary" id=proceed >Confirm</button>
 
        </div>
        <!-- /.col (left) -->
        <div class="col-md-6">

        
           

   

        </div>
        <!-- /.col (right) -->
      </div>
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
count=0;     
       var itemList=[];
var subtotal=0;
       $('#qty').on('keyup',function(){
 var rate=$('input[name=rate]').val();
 var qty=$('input[name=qty]').val();
   var discount=$('input[name=discount]').val();
if(qty==''){
  qty=0;

}
if(rate==''){
  rate=0;
}
if(discount==''){
  discount=0;
}
damnt=parseFloat(rate)*parseFloat(qty)*(parseFloat(discount)*1/100);
total=((parseFloat(rate)*parseFloat(qty))-damnt);
$('input[name=damnt]').val(damnt);
$('input[name=total]').val(total);

       });
    $('#rate').on('keyup',function(){
 var rate=$('input[name=rate]').val();
 var qty=$('input[name=qty]').val();
   var discount=$('input[name=discount]').val();
if(qty==''){
  qty=0;

}
if(rate==''){
  rate=0;
}
if(discount==''){
  discount=0;
}
damnt=parseFloat(rate)*parseFloat(qty)*(parseFloat(discount)*1/100);
total=((parseFloat(rate)*parseFloat(qty))-damnt);
$('input[name=damnt]').val(damnt);
$('input[name=total]').val(total);

       });



$('#discount').on('keyup',function(){
 var rate=$('input[name=rate]').val();
 var qty=$('input[name=qty]').val();
  var discount=$('input[name=discount]').val();

  if(qty==''){
  qty=0;

}
if(rate==''){
  rate=0;
}
if(discount==''){
  discount=0;
}
damnt=parseFloat(rate)*parseFloat(qty)*(parseFloat(discount)*1/100);
total=((parseFloat(rate)*parseFloat(qty))-damnt);
$('input[name=damnt]').val(damnt);
$('input[name=total]').val(total);

       });



$('#totaldiscount').on('keyup',function(){
 var nettotal=$('input[name=subtotal]').val();
var d=$('input[name=totaldiscount]').val();
  if(d==''){
  d=0;

}

totaldamnt=parseFloat(nettotal)*(parseFloat(d)*1/100);
nettotal=(parseFloat(nettotal)-totaldamnt);
$('input[name=totaldamnt]').val(totaldamnt);
$('input[name=nettotal]').val(nettotal);

       });

  $('#btnSave1').click(function(){

  
       var customer=$('select[name=customer]');
        var date=$('input[name=date]');

 var description=$('input[name=description]');
 var unit=$('input[name=unit]');

 var rate=$('input[name=rate]');
 var qty=$('input[name=qty]');
 var discount=$('input[name=discount]');
 
 var total=$('input[name=total]');
 var damnt=$('input[name=damnt]');
 
 
       
       var result = '';
   
          if(customer.val()==''){
           customer.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          customer.parent().parent().removeClass('has-error');
            result +='1';
      }

         if(date.val()==''){
           date.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          date.parent().parent().removeClass('has-error');
            result +='1';
      }
       if(description.val()==''){
           description.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          description.parent().parent().removeClass('has-error');
            result +='1';
      }

 if(unit.val()==''){
           unit.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          unit.parent().parent().removeClass('has-error');
            result +='1';
      } if(rate.val()==''){
           rate.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          rate.parent().parent().removeClass('has-error');
            result +='1';
      } if(discount.val()==''){
           discount.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          discount.parent().parent().removeClass('has-error');
            result +='1';
      }

      if(result=='111111'){


          customer=customer.val();
        date=date.val();
description=description.val();
unit=unit.val();
rate=rate.val();
qty=qty.val();
discount=discount.val();
total=total.val();
damnt=damnt.val();
itemList.push([count,customer,date,description,unit,rate,qty,discount,damnt,total]);
subtotal=parseFloat(subtotal)+parseFloat(total);
$('#subtotal').val(subtotal);
          var html = '';
          var i;

          for(i=0; i<itemList.length; i++){
                  
        if(itemList[i]==''){}else{  
            html +='<tr id='+itemList[i][0]+'>'+
            '<td>'+itemList[i][0]+'</td>'+
                            '<td >'+itemList[i][3]+'</td>'+
                               '<td >'+itemList[i][4]+'</td>'+
                            '<td>'+itemList[i][5]+'</td>'+
                            '<td>'+itemList[i][6]+'</td>'+
                             '<td>'+itemList[i][7]+'</td>'+ '<td>'+itemList[i][8]+'</td>'+
            '<td>'+itemList[i][9]+'</td>'+
            '<td>' +'<button class="btn btn-danger delete">' +'Delete' +'</button>' +'</td>' +
            '</tr>';
            }     }   $('#show_data').html(html);

count++;
     } });
$('#show_data').on('click', '.delete', function() {
    $(this).parent().parent('tr').remove();
var m=$(this).parent().parent('tr').attr('id');

if(itemList[m][0]==m){
    subtotal=subtotal-itemList[m][9];
itemList[m]=[];};

});
 

  $('#proceed').click(function(){


    $('#confirmmodal').modal('show');
    $('#subtotal').val(subtotal);

  });


  $('#save').click(function(){
    save();
  subtotal=0;  
  });
    $('#print').click(function(){

    save();
 

    
  });
  function save(){
var subtotal=$('input[name=subtotal]');
var totaldiscount=$('input[name=totaldiscount]');
var totaldamnt=$('input[name=totaldamnt]');
var nettotal=$('input[name=nettotal]');
var remarks=$('input[name=remarks]');
var result='';
if(subtotal.val()==''){
           subtotal.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          subtotal.parent().parent().removeClass('has-error');
            result +='1';
      } 

      if(totaldamnt.val()==''){
           totaldamnt.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          totaldamnt.parent().parent().removeClass('has-error');
            result +='1';
      } 
      if(nettotal.val()==''){
           nettotal.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          nettotal.parent().parent().removeClass('has-error');
            result +='1';
      } 
      if(remarks.val()==''){
           remarks.parent().parent().addClass('has-error').val('This Field is Required');
      }
           else{
          remarks.parent().parent().removeClass('has-error');
            result +='1';
      } 
if(result=='1111'){
var j;

subtotal=subtotal.val();
totaldamnt=totaldamnt.val();
totaldiscount=totaldiscount.val();
nettotal=nettotal.val();
remarks=remarks.val();
for(j=0;j<itemList.length;j++){
  if(itemList[j]!='' ){
    
       itemList[j].push(subtotal,totaldiscount,totaldamnt,nettotal,remarks); 


}
}

$.ajax({
  type:'ajax',
  method:'POST',
  data:{itemList:itemList},
  datatype:'JSON',
  url:'<?php echo site_url('Quotation/add_data')?>',
  success:function(res){
    $('#subtotal').val('');
    $('#myForm')[0].reset();
  
subtotal=0;

    itemList=[];

    count=0;
    $('#confirmmodal').modal('hide');
$('#show_data tr').remove();

      $('.alert-success').html('Data successfully added').fadeIn().delay(8000).fadeOut('slow');


  },
  error:function(){
    alert('data not added');
  
  }

});
}
  };
 
 showcustomer();
 function showcustomer(){
    $.ajax({
      type:'post',
      dataType:'json',
      url:'<?php echo site_url('Quotation/show_customer')?>',
      success:function(res){
      
        var html=''; 
           html+='<option >Select </option>';

         $.each(res,function(i,item){
            html+='<option value='+item.id+'>'+item.fullname+'</option>';
        });
        $('#customer').html(html);

      }

    });


  };



});

    </script>
 
</body>
</html>