<body>
   
<div class="wrapper" >
<style type="text/css" media="screen, print" >

  
  @media print{
  #terms{
    background: black;
    color: white;


  }

  }
  -webkit-print-color-adjust:exact;
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
     
        <div class="row " style="    margin-right: 5px;
    margin-left: 5px;border:1px solid black;
">
    
          
       
<div class="col-xs-12 text-center " style="border-bottom:none;">
<p>INVOICE NO <span id=invoiceno></span></span></p></div>
</address>
</div>
       <div class="row" style="padding-top: 20px;border: 1px solid;    margin-right: 5px;
    margin-left: 5px;
}">
<div class="col-xs-8 " >
<p>To : &nbsp;&nbsp;<span id=to><u>Qaraish</u></span></p></div>
<div class="col-xs-4 " >
<p>DATE: &nbsp;&nbsp;<span id=date><u>1212</u></span></p></div>

<div class="col-xs-8 " >
<p>P .O BOX: &nbsp;&nbsp;<span ><u></u></span></p></div>
<div class="col-xs-4 " >
<p>QTN NO: &nbsp;&nbsp;<span id=qtn_no><u></u></span></p></div>

<div class="col-xs-8 " >
<p>TEL : &nbsp;&nbsp;<span id=phone><u></u></span></p></div>

<div class="col-xs-4 " >
<p>DN NO : &nbsp;&nbsp;<span id=to><u></u></span></p></div>
<div class="col-xs-8 " >
<p>E-MAIL : &nbsp;&nbsp;<span id=email><u></u></span></p></div>

<div class="col-xs-4 " >
<p>L.P.O N.O : &nbsp;&nbsp;<span id=lpo><u></u></span></p></div>
<div class>
    </div>
        <!-- /.col -->
            <!-- /.col -->
        <div class="col-sm-4 invoice-col">
       
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row" style="margin-left: -11px ;margin-right: -11px;margin-top:20px; ">
        <div class="col-xs-12 ">
         
          <table border=1  width=100%  >
              <thead >
                <tr style="background:black;color:white">
            
                                
                                    <th class="text-center" width="40px">Sr#</th>
                        <th width="" >Description</th>
                        <th class="text-center"  width="50px">Unit</th>
                         <th class="text-center"  width="50px">Rate</th>
                         <th class="text-center"  width="50px">Qty</th>
                       
                         <th class="text-center"  width="120px">Total</th>
                                        
                                        

                            </tr>
                            </thead>
               
                           
                    <tbody id="showPrice" >
                    </tbody>
                
                  </table>

                  
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


    <div class="row" style="margin-left: -11px ;margin-right: -11px; ">
      
     <div class='col-xs-12' style=margin-top:40px;>
          <p>Payment Terms:<span id=payment></span></p>
          <p style="line-height:0px">Delivery Time:<span id=delivery></span></p>
         
                
                     
    
          </div>
          
         
         
            </div>
        
             <div class="row" style="margin-left: -11px ;margin-right: -11px; ">
      
            <div class='col-xs-9'>
                </div>
            <div class='col-xs-3' style="margin-top:50px;" >
         ______________________<br>Manager
          </div>

        <!-- /.col -->
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
        var nettotal=0;
wordtotal='';
discount=0;
advance=0;

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
          html+='<tr>'+
            '<td class=text-center>'+sno+'</td>'+
            '<td class=text-left>'+item.description+'</td>'+
            '<td class=text-center>'+item.unit+'</td>'+
            '<td class=text-center>'+item.rate+'</td>'+
            '<td class=text-center>'+item.qty+'</td>'+
          
            '<td class=text-center> '+item.qd_amount+'</td>'+
            '</tr>';

$('#qtn_no').html(item.quotation_id);

   discount=item.disc_amount;
   advance=item.advance_amount;
$('#amount').html(item.amount);
$('#advance').html(item.advance_amount);
var d=item.date;
var array= d.split('-');
var i;
var array1=[];
for (i =array.length-1;i>=0; i--) {
 array1.push(array[i]);

}
    var datef=array1.join('-');
 
    function convertNumberToWords(amount) {
    var words = new Array();
    words[0] = '';
    words[1] = 'One';
    words[2] = 'Two';
    words[3] = 'Three';
    words[4] = 'Four';
    words[5] = 'Five';
    words[6] = 'Six';
    words[7] = 'Seven';
    words[8] = 'Eight';
    words[9] = 'Nine';
    words[10] = 'Ten';
    words[11] = 'Eleven';
    words[12] = 'Twelve';
    words[13] = 'Thirteen';
    words[14] = 'Fourteen';
    words[15] = 'Fifteen';
    words[16] = 'Sixteen';
    words[17] = 'Seventeen';
    words[18] = 'Eighteen';
    words[19] = 'Nineteen';
    words[20] = 'Twenty';
    words[30] = 'Thirty';
    words[40] = 'Forty';
    words[50] = 'Fifty';
    words[60] = 'Sixty';
    words[70] = 'Seventy';
    words[80] = 'Eighty';
    words[90] = 'Ninety';
    amount = amount.toString();
    var atemp = amount.split(".");
    var number = atemp[0].split(",").join("");
    var n_length = number.length;
    var words_string = "";
    if (n_length <= 9) {
        var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
        var received_n_array = new Array();
        for (var i = 0; i < n_length; i++) {
            received_n_array[i] = number.substr(i, 1);
        }
        for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
            n_array[i] = received_n_array[j];
        }
        for (var i = 0, j = 1; i < 9; i++, j++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                if (n_array[i] == 1) {
                    n_array[j] = 10 + parseInt(n_array[j]);
                    n_array[i] = 0;
                }
            }
        }
        value = "";
        for (var i = 0; i < 9; i++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                value = n_array[i] * 10;
            } else {
                value = n_array[i];
            }
            if (value != 0) {
                words_string += words[value] + " ";
            }
            if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Thousand ";
            }
            if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Hundred ";
            }
            if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Thousand ";
            }
            if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
                words_string += "Hundred and ";
            } else if (i == 6 && value != 0) {
                words_string += "Hundred ";
            }
        }
        words_string = words_string.split("  ").join(" ");
    }
    return words_string;
}


    
    $('#date').html(datef);
$('#subtotal').html(item.net_amount);
$('#subtotal1').html(' QAR '+item.net_amount);
nettotal=item.net_amount;
$('#lpo').html(item.lpo_number);
$('#invoiceno').html(item.id);
  $('#subtotalwords').html( ' QAR '+ convertNumberToWords(item.net_amount));
   
               wordtotal=convertNumberToWords(item.net_amount);
                     $('#discount').html(item.disc_amount);
                     
                     
                                            $('#to').html(item.fullname);
                           
                               $('#phone').html(item.phone);
                                  $('#email').html(item.email);
                                     $('#delivery').html(item.delivery);

$('#payment').html(item.payment_remarks);
$('#quotation_valid').html(item.valid);
$('#remarks').html(item.remarks);


});
   html+='<tr style=height:20px;>'+
                '<td>  </td>'+
                '<td>  </td>'+
                '<td> </td>'+
                '<td>  </td>'+
                '<td> </td>'+
                '<td>  </td>'+
                '</tr>'+
                '<tr style="border: 1px solid ">'+
                '<td> </td>'+
                '<td><b><span id="amount">Advance Amount</span></td>'+
                '<td></td>'+
                '<td></td>'+
                '<td> </td>'+
                '<td  class=text-center>'+advance+'</td>'+
                ' </tr> '+ '<tr style="border: 1px solid ">'+
                '<td> </td>'+
                '<td><b><span id="amount">Discount Amount</span></td>'+
                '<td></td>'+
                '<td></td>'+
                '<td> </td>'+
                '<td  class=text-center>'+discount+'</td>'+
                ' </tr><tr style="border: 1px solid ">'+
                '<td><B>TOTAL</B> </td>'+
                ' <td><b><span id="amount" style=text-decoration:uppercase;> QAR '+wordtotal+' ONLY</span></td>'+
                '<td> </td>'+
                '<td></td>'+
                '<td> </td>'+
                '<td class=text-center>QAR '+nettotal+'</td>'+
                ' </tr>';
                  $('#showPrice').html(html);
       window.print();
              }
            });
    }
        


    }); 
    </script>

</body>