<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
       Invoice
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fas fa-arrow-alt-circle-right"></i> Home</a></li>
         <li><a href="#">   Invoice</a></li>
         <li class="active">View Invoice </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        

          <div class="box box-success">
              <div class="box-header with-border">
                  <h3 class="box-title">Invoice List</h3>
                </div>
          
            <!-- /.box-header -->
            <div class="box-body">
                   
          <div class="alert alert-success" style="display: none;"></div>
          <div class="table-responsive">   
         <table id="example1" class="table  table-striped table-hover js-basic-example dataTable">
              <thead>
                <tr style="background:black;color:white">
               <th>S No</th>
      <th>Date</th>
      <th>Customer</th>
       <th>Lpo Number</th>
      <th>Total</th>
      <th>D %</th>
      <th>D amount</th>
   
      <th>Advance amount</th>
      <th>Net Total</th>
        <th>Action</th>
          <th>Print</th>
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
                    <a href="<?php echo site_url('Invoice/Invoice_add');?>" class="btn btn-success" title="Add Invoice"><i class="fas fa-plus-square"></i></a>
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
                    <h3 class="modal-title" id="exampleModalLabel">Edit Invoice</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button><hr class="marginButtom0px">
                  </div>
                  <div class="modal-body">
        <form   id="form2" method="post">
 <input type="hidden" name=id>
 <input type="hidden" name=hidden>
  

     <div class="row">
     <div class="col-md-3">
              <label>Select Customer</label>
    <select name="customer1" id="customer1" class="form-control" readonly>
        <option value="">Select</option>
        
    </select>
    </div>
         <div class=col-md-3>
             <label>Total</label>
        <input type=text class=form-control id=subtotal name=subtotal>
          </div>
           <div class=col-md-3>
               <label>Discount</label>
        <input type=text class=form-control id=totaldiscount name=totaldiscount>
          </div>
              <div class=col-md-3>
                   <label>Discount(Amount)</label>
        <input type=text class=form-control id=totaldamnt name=totaldamnt readonly>
          </div>

     <div class="col-md-3"  >
       <label>Advance Amount</label>
    <input type="text" class="form-control"  name="advance_amount" >
    </div> 
          <div class=col-md-3>
               <label>Net Total</label>
              <input type=text class=form-control id=nettotal name=nettotal readonly>
          </div>

     <div class="col-md-3" style="display: none">
       <label>Advance Percentage</label>
    <input type="text" class="form-control" name="advance_perc"  id=advance_perc>
    </div> 

            <div class=col-md-3>
               <label>Remarks</label>
              <input type=text class=form-control id=remarks name=remarks>
          </div>
              <div class=col-md-3>
               <label>Lpo Number</label>
              <input type=text class=form-control id=lpo name=lpo>
          </div>
        </div>
   
       </form>
                        
  <div class="table-responsive">   
         <table id="example1" class="table  table-striped table-hover js-basic-example dataTable">
              <thead>
                <tr style="background:black;color:white">
              
                       
                   
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
  
                     
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button  type="button" id=addnew  class="btn btn-success">Add New</button>
                    <button type="button" type="submit" id=btnUpdate  class="btn btn-success">Update</button>
                  </div>


                </div>
              </div>
            </div>
       
        <!--END MODAL EDIT-->

        <form id=form >
   <div class="modal fade" id="Moda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Invoice Details</h3>
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
         <input type='hidden' name="hiddenvalue3" id=hiddenvalue3>
                <div class="row">
             
      <div class="col-md-6" >
              <label>Select Customer</label>
    <select name="customer" id="customer" class="form-control" readonly>
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
        <button type="button" id=btnUpdate1 class="btn btn-success " style="margin-top: 24px;">Save changes</button>
        <button type="button" class="btn btn-" data-dismiss="modal">Close</button>
      </div>
</div>
</div>
</div>
   </form>

        <form id=formadd >
   <div class="modal fade" id="Modaladd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Add Invoice Details</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <input type="hidden" name="idadd">
      <input type="hidden" name="customeradd">
        
                <div class="row">
             
     
      <div class="col-md-3">
        <label>Select date</label>
    <input type="date" class="form-control" name="dateadd"/>

    </div>
      <div class="col-md-3">
         <label>Description</label>
    <input type="text" class="form-control" placeholder="Add Description" name="descriptionadd"/>
    </div>
       <div class="col-md-1">
         <label>Unit</label>
    <input type="text" class="form-control" placeholder="Unit" name="unitadd"/>
    </div>
    <div class="col-md-1">
       <label>Rate</label>
    <input type="text"  class="form-control" placeholder="Rate" name="rateadd"/>
    </div>
     <div class="col-md-1">
       <label>Qty</label>
   <input type="text" class="form-control" placeholder="Qty" name="qtyadd"/>
    
    </div>

<div class="col-md-2">
       <label>D%</label>
      <input type="text" id=discount class="form-control" placeholder="Discount" name="discountadd">
    </div>   
<div class="col-md-2">
       <label>D Amt</label>
    <input type="text" class="form-control" placeholder="D amount" name="damntadd" readonly> 
    </div>  
    <div class="col-md-2">
       <label>Total</label>
    <input type="text" class="form-control" placeholder="Total" name="totaladd" readonly>
    </div>  
  
</div>
     
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id=btnadd class="btn bg-olive">Add </button>
       
      </div>
</div>
</div>
</div>
   </form>


 
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

<div id="deleteMo" class="modal fade" tabindex="-1" role="dialog">
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
        <button type="button" id="btnDelete1" class="btn btn-danger">Delete</button>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</div>

<!-- ./wrapper -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
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

  $('input[name=qtyadd]').on('keyup',function(){
 var rate=$('input[name=rateadd]').val();

 var qty=$('input[name=qtyadd]').val();
  var discount=$('input[name=discountadd]').val();
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
$('input[name=damntadd]').val(damnt);
$('input[name=totaladd]').val(total);

       });


 $('input[name=rateadd]').on('keyup',function(){
 var rate=$('input[name=rateadd]').val();
 var qty=$('input[name=qtyadd]').val();
  var discount=$('input[name=discountadd]').val();
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
$('input[name=damntadd]').val(damnt);
$('input[name=totaladd]').val(total);

       });



$('input[name=discountadd]').on('keyup',function(){
 var rate=$('input[name=rateadd]').val();
 var qty=$('input[name=qtyadd]').val();
  var discount=$('input[name=discountadd]').val();

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
$('input[name=damntadd]').val(damnt);
$('input[name=totaladd]').val(total);

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



$('#advance_perc').on('keyup',function(){

 var nettotal=$('input[name=nettotal]').val();
 
var d=$('input[name=advance_perc]').val();
  if(d==''){
  d=0;

}

totaldamnt=parseInt(nettotal)*(parseInt(d)*1/100);
$('input[name=advance_amount]').val(totaldamnt);

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

      url:'<?php echo site_url('Invoice/Invoice_show')?>',
      async:false,
      success:function(resp){
        var html='';
      
        var res=JSON.parse(resp);
        var sno=1;
        var i;    

        for(i=0;i<res.length;i++){
        
  var id='<?php echo('')?>'+res[i].id+'';
  
          html+='<tr>'+
            '<td>'+sno+'</td>'+
            '<td>'+res[i].date+'</td>'+
            '<td>' +res[i].fullname+'</td>'+
            '<td>'+res[i].lpo_number+'</td>'+
            '<td>'+res[i].amount+'</td>'+
            '<td>'+res[i].disc_perc+'</td>'+
            '<td>'+res[i].disc_amount+'</td>'+
            '<td>'+res[i].advance_amount+'</td>'+
            '<td>'+res[i].net_amount+'</td>'+
            '<td><a href=javascript:; data='+res[i].id+' class=editdata><i class="fa fa-pencil-square-o"></i></a> &nbsp;'+
            '<a href=javascript:; data='+res[i].id+'   class=deletedata><i class="fa fa-trash"></i></a></td>'+
            '<td><a href="<?php echo site_url('Invoice/Invoiceprint/')?>'+id+'" data='+res[i].id+' class=print id=print>Print Preview</a></td></tr>';
    
  sno++;      }



$('#showdata').html(html);


        },
        });



      }





function show_Trade(id){
  

    $.ajax({
      method:'post',
      datatype:'json',
       data:{'id':id},

      url:'<?php echo site_url('Invoice/show_Invoicedetails')?>',
      success:function(resp){
  var sno=0;

        var html='';
        var res=JSON.parse(resp);
        $.each(res,function(i,item){
              sno++;
          html+='<tr>'+
            '<td>'+sno+'</td>'+
            '<td>'+item.customer_id+'</td>'+
            '<td>'+item.date+'</td>'+
            '<td>'+item.description+'</td>'+
            '<td>'+item.unit+'</td>'+
            '<td>'+item.rate+'</td>'+
            '<td>'+item.qty+'</td>'+
            '<td>'+item.discount_percentage+'</td>'+
            '<td>'+item.discount_amount+'</td>'+
            '<td>'+item.net_amount+'</td>'+
            '<td><a href=javascript:; data='+item.id+' class=editdata1><i class="fa fa-pencil-square-o"></i></a> &nbsp;<a href=javascript:; data='+item.id+'  data2='+item.invoice_id+' data3='+item.net_amount+' class=deletedata1><i class="fa fa-trash"></i></a></td>'+
            '</tr>';
        
}); $('#showtrade').html(html);

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
  
  
    url:'<?php echo site_url('Invoice/edit_Invoicedetails')?>',
    success:function(res){
     var res=JSON.parse(res);
   

    $.each(res,function(i,item){
   
    $('input[name=id2]').val(item.id);

    $('input[name=cnid2]').val(item.invoice_id);


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
edit_invoice(id);
});
function edit_invoice(id){
$.ajax({
    method:'post',


 data:{'id':id},

  
    datatype:'json',
  
  
    url:'<?php echo site_url('Invoice/edit_invoice')?>',
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
   $('input[name=advance_perc]').val(res[i].advance_perc);
  $('input[name=advance_amount]').val(res[i].advance_amount);
  $('input[name=lpo]').val(res[i].lpo_number);

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
  
  
    url:'<?php echo site_url('Invoice/edit_invoice')?>',
    success:function(res){
     var res=JSON.parse(res);
     
    $.each(res,function(i,item){

  
 $('input[name=subtotal]').val(res[i].amount);
 
    }); 
   } 
}); 


};

 $('#btnUpdate1').unbind().click(function(){
       var data=$('#form').serialize();
var cnid=$('input[name=cnid2]').val();

  $.ajax({
            method:'post',
            data:data,
            url:'<?php echo site_url('Invoice/update_invoicedetails')?>',
            success:function(res){
              var res=JSON.parse(res);
            if( $.each(res,function(i,item){
                $('#hiddenvalue').val(item.net_amount);

            })){
               var advance=$('input[name=advance_amount]').val();

              var dis=$('input[name=totaldiscount]').val();
var amo=$('input[name=subtotal]').val();
$('#hiddenvalue1').val(dis);
$('#hiddenvalue2').val(amo);
$('#hiddenvalue3').val(advance);

  var data1=$('#form').serialize();

          $.ajax({
            method:'post',
            data:data1,

            url:'<?php echo site_url('Invoice/update_invoicedetails1')?>',
            datatype:'json',
      success:function(response){
      
         var res=JSON.parse(response); 
                  $('#Moda').modal('hide');
              show_Trade(cnid);
              edit_invoice(cnid);
    
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



 $('#btnUpdate').unbind().click(function(){
        var data=$('#form2').serialize();
        
        $.ajax({
            method:'post',
            data:data,
            url:'<?php echo site_url('Invoice/update_invoice')?>',
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

$('#btnDelete').unbind().click(function(){


$.ajax({
    type:'post',
    data:{'id':id},
    datatype:'json',
    url:'<?php echo site_url('invoice/delete_invoice')?>',
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
var hi=$('input[name=advance_amount]').val();

var c=$('select[name=customer1]').val();

$('#btnDelete1').unbind().click(function(){

$.ajax({
    type:'post',
    data:{'id':id,'qid':cnid,'sub':subtotal,'dis':dis,'total':total,'hiddenvalue3':hi,'c':c},
    datatype:'json',

    url:'<?php echo site_url('invoice/delete_invoicedetails')?>',
  async:false,
        success:function(res){
      
   

      $('#deleteMo').modal('hide');

   
show_Trade(cnid);
edit_invoice(cnid);
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
      url:'<?php echo site_url('Invoice/show_customer')?>',
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
     






// Add new invoice//



$('#addnew').unbind().click(function(){
$('#Modaladd').modal('show');

var id=$('input[name=id]').val();

var customer=$('select[name=customer1]').val();

$('input[name=idadd').val(id);

$('input[name=customeradd').val(customer);
});
$('#btnadd').unbind().click(function(){

var id=$('input[name=id]').val();

   var nettotal=$('input[name=subtotal]').val();
var data=$('#formadd').serialize();

 var date=$('input[name=dateadd]');

 var description=$('input[name=descriptionadd]');
 var unit=$('input[name=unitadd]');

 var rate=$('input[name=rateadd]');
 var qty=$('input[name=qtyadd]');
 var discount=$('input[name=discountadd]');
 
 var total=$('input[name=totaladd]');
 var damnt=$('input[name=damntadd]');
 

       
       var result = '';
   
         

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

      if(result=='11111'){
$.ajax({
type:'post',
data:data,

 url:'<?php echo site_url('Invoice/insert_invoice')?>',
datatype:'json',
success:function(resp){

show_Trade(id);
 
   var total=$('input[name=totaladd]').val();
var t=parseFloat(parseFloat(nettotal)+parseFloat(total));
$('input[name=subtotal]').val(t);

var d=$('input[name=totaldiscount]').val();
totaldamnt=parseFloat(t)*(parseFloat(d)*1/100);

nettotal=(parseFloat(t)-totaldamnt);
$('input[name=totaldamnt]').val(totaldamnt);

$('input[name=nettotal]').val(nettotal);

$('#Modaladd').modal('hide');

}
      
})}

});


});

  </script>
