<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>

</head>
<body>

	<table class=table>
		<thead>
			<th>S No</th>
			<th>Date</th>
			<th>Customer</th>
			<th>Total</th>
			<th>D %</th>
			<th>D amount</th>
			<th>Net Total</th>
				<th>Action</th>
					<th>Print</th>

		</thead>
		<tbody id=showdata>
		</tbody>


	</table>
	<table  class=table id=showhidden style="display: none">
				<thead>
			<th>S no</th>
			<th>Description</th>
			<th>Unit</th>
			<th>Rate</th>
			<th>Qty</th>
			<th>Discount(%)</th>
			<th>Discount(Amount)</th>
			<th>Total</th>

		</thead>
		<tbody id=showdatahidden>
		</tbody>

	</table>

<div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Quotation Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form   id="form2" method="post">
 <input type="hidden" name=id>

 <input type="hidden" name=hidden>
  

     <div class="row">
    <div class="col-md-6">
              <label>Select Customer</label>
    <select name="customer1" id="customer1" class="form-control">
        <option value="">Select</option>
        
    </select>
    </div>
         <div class=col-md-6>
             <label>Total</label>
        <input type=text class=form-control id=subtotal name=subtotal>
          </div>
           <div class=col-md-6>
               <label>Discount</label>
        <input type=text class=form-control id=totaldiscount name=totaldiscount>
          </div>
              <div class=col-md-6>
                   <label>Discount(Amount)</label>
        <input type=text class=form-control id=totaldamnt name=totaldamnt readonly>
          </div>
          <div class=col-md-6>
               <label>Net Total</label>
              <input type=text class=form-control id=nettotal name=nettotal readonly>
          </div>
            <div class=col-md-6>
               <label>Remarks</label>
              <input type=text class=form-control id=remarks name=remarks>
          </div>
   
       </form>
</div>
   <table class="table" style="margin-top: 50px;" > 
        <thead>
                    <tr>
                       
                   
                      <th>Sr#</th>
                       <th>Customer</th>
                        <th>Date</th>
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
                <tbody id="showtrade">
                    
                </tbody>
</table>
  
      </div>
      <div class="modal-footer">
        <button type="button" id=btnUpdate class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
</div></div>
</div>
<form id=form action="<?php echo site_url('Quotation/update_quotationdetails')?>" method=post>
   <div class="modal fade" id="Moda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Quotation Details</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<input type="hidden" name="id2">
       <input type='hidden' name="cnid2" id=cnid2>
        <input type='hidden' name="hiddenvalue" id=hiddenvalue>
        <input type='hidden' name="hiddenvalue1" id=hiddenvalue1>
       
        
         <input type='hidden' name="hiddenvalue2" id=hiddenvalue2>
       
        
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
    <input type="text" id=rate class="form-control" placeholder="Rate" name="rate"/>
    </div>
     <div class="col-md-1">
       <label>Qty</label>
   <input type="text" class="form-control" placeholder="Qty" id=qty name="qty"/>
    
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
     
      </div>
      <div class="modal-footer">
        <button type="button" id=btnUpdate1 class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
</div>
</div>
</div>
   </form>
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
</div><!-- /.modal -->


<div id="deleteMo" class="modal fade" tabindex="-1" role="dialog">
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
        <button type="button" id="btnDelete1" class="btn btn-danger btn-raised g-bg-cyan">Delete</button>
        <button type="button" class="btn btn-raised" data-dismiss="modal">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
</body></html>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

      <script src="<?php echo base_url('assets/js/print.min.js')?>"></script>

<script type="text/javascript">
	$(function(){
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

damnt=parseInt(rate)*parseInt(qty)*(parseInt(discount)*1/100);
total=((parseInt(rate)*parseInt(qty))-damnt);
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

damnt=parseInt(rate)*parseInt(qty)*(parseInt(discount)*1/100);
total=((parseInt(rate)*parseInt(qty))-damnt);
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
damnt=parseInt(rate)*parseInt(qty)*(parseInt(discount)*1/100);
total=((parseInt(rate)*parseInt(qty))-damnt);
$('input[name=damnt]').val(damnt);
$('input[name=total]').val(total);

       });



$('#totaldiscount').on('keyup',function(){
 var nettotal=$('input[name=subtotal]').val();
var d=$('input[name=totaldiscount]').val();
  if(d==''){
  d=0;

}

totaldamnt=parseInt(nettotal)*(parseInt(d)*1/100);
nettotal=(parseInt(nettotal)-totaldamnt);
$('input[name=totaldamnt]').val(totaldamnt);
$('input[name=nettotal]').val(nettotal);

       });


$('#subtotal').on('keyup',function(){
 var nettotal=$('input[name=subtotal]').val();
var d=$('input[name=totaldiscount]').val();
  if(d==''){
  d=0;

}
if(nettotal==''){
	nettotal=0;
}

totaldamnt=parseInt(nettotal)*(parseInt(d)*1/100);
nettotal=(parseInt(nettotal)-totaldamnt);
$('input[name=totaldamnt]').val(totaldamnt);
$('input[name=nettotal]').val(nettotal);

       });

		show_data();
	function show_data(){
		$.ajax({
			method:'post',
			datatype:'json',
			url:'<?php echo site_url('Quotation/quotation_show')?>',
			success:function(resp){
				var html='';
			
				var res=JSON.parse(resp);
				var sno=1;
				var i;		

				for(i=0;i<res.length;i++){
					
					html+='<tr><td>'+sno+'</td><td>'+res[i].date+'</td><td>'+res[i].fullname+'</td><td>'+res[i].amount+'</td><td>'+res[i].disc_perc+'</td><td>'+res[i].disc_amount+'</td><td>'+res[i].net_amount+'</td><td><a href=javascript:; data='+res[i].id+' class=editdata>Edit</a> &nbsp;<a href=javascript:; data='+res[i].id+'   class=deletedata>Delete</a></td><td><a href=javascript:; data='+res[i].id+' class=print id=print>Print Preview</a></td></tr>';
		
	sno++;			}



$('#showdata').html(html);


				},
				});



			}
<?php
include('print.php');
?>


function show_Trade(id){
	


}


$('#showdata').on('click','.print',function(){
		var id=$(this).attr('data');
		
		$.ajax({
			type:'ajax',
			method:'POST',
			datatype:'JSON',
			 data:{'id':id},

			url:'<?php echo site_url('Quotation/quotation_detail_show')?>',
			success:function(resp){
			
				var html='';
				var res=JSON.parse(resp);
				var sno=1;
				$.each(res,function(i,item){

					html+='<tr><td>'+sno+'</td><td>'+item.description+'</td><td>'+item.unit+'</td><td>'+item.rate+'</td><td>'+item.qty+'</td><td>'+item.discount_percentage+'</td><td>'+item.discount_amount+'</td><td>'+item.net_amount+'</td></tr>';
				sno++;

					
});	$('#showdatahidden').html(html);

				$("#showhidden").css("display", "block");


          // do whatever you want to do     
           printJS({
    printable: 'showhidden',

    type: 'html',
    targetStyles: ['*']
 })     

document.getElementById('print').addEventListener ("click", print);
$("#showhidden").css("display","none");
		




$("#showhidden").css("display","none");

				},
				});
		
		
});








function show_Trade(id){
	

		$.ajax({
			method:'post',
			datatype:'json',
			 data:{'id':id},

			url:'<?php echo site_url('Quotation/show_quotationdetails')?>',
			success:function(resp){
			console.log(resp);
				var html='';
				var res=JSON.parse(resp);
				$.each(res,function(i,item){
					html+='<tr><td>'+item.id+'</td><td>'+item.customer_id+'</td><td>'+item.date+'</td><td>'+item.description+'</td><td>'+item.unit+'</td><td>'+item.rate+'</td><td>'+item.qty+'</td><td>'+item.discount_percentage+'</td><td>'+item.discount_amount+'</td><td>'+item.net_amount+'</td><td><a href=javascript:; data='+item.id+' class=editdata1>Edit</a> &nbsp;<a href=javascript:; data='+item.id+'  data2='+item.qoutation_id+' data3='+item.net_amount+' class=deletedata1>Delete</a></td></tr>';
				
});	$('#showtrade').html(html);

				},
				});

}
$('#showdata').on('click','.editdata',function(){
	var id=$(this).attr('data');
	
	show_Trade(id);
	

			});
	
	$('#showtrade').on('click','.editdata1',function(){
$('#Moda').modal('show');

var id=$(this).attr('data');
 
$.ajax({
    method:'post',


 data:{'id':id},

  
    datatype:'json',
  
  
    url:'<?php echo site_url('Quotation/edit_quotationdetails')?>',
    success:function(res){
     var res=JSON.parse(res);
   

    $.each(res,function(i,item){
   
    $('input[name=id2]').val(item.id);

    $('input[name=cnid2]').val(item.qoutation_id);


 $('input[name=date]').val(res[i].date);
 $('input[name=description]').val(res[i].description);

  $('input[name=damnt]').val(res[i].discount_amount);
 $('input[name=total]').val(res[i].net_amount);
  $('input[name=unit]').val(item.unit);

 $('input[name=rate]').val(item.rate);
 $('input[name=qty]').val(item.qty);
 $('input[name=discount]').val(res[i].discount_percentage);
 $('#customer option[value='+item.customer_id+']').attr('selected','selected');
 
    
     });
     
    },
});	

});
 $('#showdata').on('click','.editdata',function(){
$('#Modal_Edit').modal('show');

var id=$(this).attr('data');
edit_quotation(id);
});
function edit_quotation(id){
$.ajax({
    method:'post',


 data:{'id':id},

  
    datatype:'json',
  
  
    url:'<?php echo site_url('Quotation/edit_quotation')?>',
    success:function(res){
     var res=JSON.parse(res);
     console.log(res);

    $.each(res,function(i,item){




    	       $('input[name=id]').val(item.id);
  $('input[name=totaldamnt]').val(res[i].disc_amount);
 $('input[name=subtotal]').val(res[i].amount);
 $('input[name=totaldiscount]').val(res[i].disc_perc);
 $('input[name=nettotal]').val(res[i].net_amount);
  $('input[name=remarks]').val(res[i].remarks);
  $('#customer1 option[value='+item.customer_id+']').attr('selected','selected');
 
    }); 
   } 
});	


};

function edit_quotation1(id){
$.ajax({
    method:'post',


 data:{'id':id},

  
    datatype:'json',
  
  
    url:'<?php echo site_url('Quotation/edit_quotation')?>',
    success:function(res){
     var res=JSON.parse(res);
     
    $.each(res,function(i,item){

  
 $('input[name=subtotal]').val(res[i].amount);
 
    }); 
   } 
});	


};

 $('#btnUpdate1').click(function(){
       var data=$('#form').serialize();
var cnid=$('input[name=cnid2]').val();

  $.ajax({
            method:'post',
            data:data,
            url:'<?php echo site_url('Quotation/update_quotationdetails')?>',
            success:function(res){
            	var res=JSON.parse(res);
            if(	$.each(res,function(i,item){
            		$('#hiddenvalue').val(item.net_amount);
            })){
            	var dis=$('input[name=totaldiscount]').val();
var amo=$('input[name=subtotal]').val();
$('#hiddenvalue1').val(dis);
$('#hiddenvalue2').val(amo);
  var data1=$('#form').serialize();
  alert(data1);
          $.ajax({
            method:'post',
            data:data1,

            url:'<?php echo site_url('Quotation/update_quotationdetails1')?>',
            datatype:'json',
			success:function(response){
      
         var res=JSON.parse(response); 
            	    $('#Moda').modal('hide');
            	show_Trade(cnid);
            	edit_quotation(cnid);
    
     var subtotal=0;
    
                 $('.alert-success').html('Data Updated Succesfully').fadeIn().delay(4000).fadeOut('slow');

            },
            error:function(){
              alert('data not added');
            }

        });
      }
}
            
        });
});



 $('#btnUpdate').click(function(){
        var data=$('#form2').serialize();
        $.ajax({
            method:'post',
            data:data,
            url:'<?php echo site_url('Quotation/update_quotation')?>',
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


     $('#showdata').on('click','.deletedata',function(){
$('#deleteModal').modal('show');
var id=$(this).attr('data');

$('#btnDelete').click(function(){


$.ajax({
    type:'post',
    data:{'id':id},
    datatype:'json',
    url:'<?php echo site_url('Quotation/delete_quotation')?>',
    success:function(res){
      $('#deleteModal').modal('hide');
      show_data();
        $('.alert-success').html('Data Deleted Succesfully').fadeIn().delay(4000).fadeOut('slow');
     

    },

  });
});
});


     $('#showtrade').on('click','.deletedata1',function(){
$('#deleteMo').modal('show');
var id=$(this).attr('data');
var cnid=$(this).attr('data2');
var subtotal=$(this).attr('data3');

var dis=$('input[name=totaldiscount]').val();
var total=$('input[name=subtotal]').val();

alert(subtotal);
$('#btnDelete1').unbind().click(function(){

$.ajax({
    type:'post',
    data:{'id':id,'qid':cnid,'sub':subtotal,'dis':dis,'total':total},
    datatype:'json',

    url:'<?php echo site_url('Quotation/delete_quotationdetails')?>',
    success:function(res){
    	
    	
    	res=JSON.parse(res);

      $('#deleteMo').modal('hide');

   
show_Trade(cnid);
edit_quotation(cnid);
  var subt=0;

        $('.alert-success').html('Data Deleted Succesfully').fadeIn().delay(4000).fadeOut('slow');
     

    },


  });

});


});
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
  $('#customer1').html(html);

      }

    });


  };
     

});

	</script>
