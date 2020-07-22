<body onload=window.print()>
   
<div class="wrapper" >
<style type="text/css" media="screen, print" >

  
  @media print{
  #terms{
    background: black;
    color: white;


  }

  

  }
 
</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
       
    </section>


    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
      
           
          </h2>
        </div>
        <!-- /.col -->
      </div>
     <div class=row>
       <div class="col-xs-12 text-center">
        <h3><u>Al Shamlan Marine Services</u></h3>


       </div>
       <div class="col-xs-12" style="margin-top: 20px;">
        <table width="100%" border=1>
          <thead >
            <th  class="text-center">S.No</th>
             <th class="text-center">Invoice Date</th>
              <th class="text-center">L.P.O No</th>
               <th class="text-center">Invoice No</th>
                <th class="text-center">Description</th>
                 <th class="text-center">Total Invoice Amount</th>
                  <th class="text-center">Received Date</th>
                   <th class="text-center">Cheque No</th>
                    <th class="text-center">Received Payment Detail</th>

<th class="text-center">Received Payments </th>
<th class="text-center">Remaining Payments</th>
<th class="text-center">Remarks</th>

          </thead>
        </table>
       </div>
  <div class=col-xs-12>
        <table width="40%" border=1 style="float:right;margin-top:30px;" >
          <thead >
           <tr>
                   <th  colspan="1">Total Amount</th>
                    
<th class="text-center" colspan="2">123123</th>
</tr>
  <tr>
                   <th colspan=1>Total Advance Amount</th>
                    <th class="text-center" colspan=2>1231</th>


 
</tr>
  <tr>
                   <th  colspan="1">Over Due</th>
                    <th class="text-center" colspan="2" id=red>123123</th>


</tr>
          </thead>
        </table>
       </div>

     </div>
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
       
          
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
 
  <div class="control-sidebar-bg"></div>
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>
  <?php $id=$this->uri->segment('3'); ?>
  
    $(function(){
     showPrice();
    //function

    function showPrice(){
var id=<?php echo $id ?>;
      $.ajax({
        type: 'ajax',
        method:'post',
      data:{'id':id},
        url:'<?php echo site_url('invoice/print_invoice_Show')?>',
      
        datatype: 'json',
        success: function(data){
          
            var res=JSON.parse(data);
            var sno=0;
            var html='';
            var trate;
            var tqty;
            var tdis;
            var tamount;

        $.each(res,function(i,item){
      
          sno++;
          html+='<tr><td class=text-center>'+sno+'</td><td class=text-center>'+item.description+'</td><td class=text-center>'+item.unit+'</td><td class=text-center>'+item.rate+'</td><td class=text-center>'+item.qty+'</td><td class=text-center>'+item.discount_percentage+'</td><td class=text-center>'+item.discount_amount+'</td><td class=text-center> '+item.qd_amount+'</td></tr>';

$('#qtn_no').html(item.quotation_id);
$('#date').html(item.date);
          $('#showPrice').html(html);
$('#amount').html(item.amount);
$('#advance').html(item.advance_amount);

$('#subtotal').html(item.net_amount);
$('#subtotal1').html(item.net_amount);
$('#lpo').html(item.lpo_number);
               
                     $('#discount').html(item.disc_amount);
                                            $('#to').html(item.fullname);
                           
                               $('#phone').html(item.phone);
                                  $('#email').html(item.email);
                                     $('#delivery').html(item.delivery);

$('#payment').html(item.payment_remarks);
$('#quotation_valid').html(item.valid);
$('#remarks').html(item.remarks);


});
       window.print();
              }
            });
    }
        


    }); 

    </script>

</body>