<body>
   
<div class="wrapper" >
<style type="text/css" media="screen, print" >

  
  @media print{
  .terms{
     -webkit-print-color-adjust:exact;
 background: black!important;

  }
  .border{
    border:1px solid black!important;
}.line{
  line-height: 8px;
}

#heading{
    color: white !important;


  }
p{
  font-size: 15px;
}
h4{
  font-size: 20px;
}
  .abc{
    -webkit-print-color-adjust:exact !important;
   background:black !important;
}
#abc{
   
color:white !important;

 
 
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
      <!-- info row -->
      <div class="row ">
        <div class="col-md-12  text-center terms" >
               <address>
          <h4 style="font-size: 25px" id=heading>Quotation</h4>
        </address>
      </div>
      </div>
        <div class="row ">
          <div class="col-xs-2">
             Quotation Ref:  </div>
          
       <div class="col-xs-5" style="border-bottom:1px solid;">
            
                     
       SMS/<?php echo date('d/Y/')?><span id=quatation_ref ></span>
          
         
        </div>

<div class="col-xs-1">
   

        <p>Date: </p>
      
</div>
  <div class="col-xs-4" style="border-bottom:1px solid;">
           
        <span id=date >
               </span>
       
        
               
        </div>
        </div>
              <div class="row ">
         <div class=col-xs-2 >
             <p>
               Company : 
    </p>    </div> 
             
             <div style="border-bottom: 1px solid" class=col-xs-10><span id=company_name ></span>
             </div>
</div>
<div class="row ">

    <div class=col-xs-2 >
           
 
                <p>Attention :</p>
                </div>
            <div style=" border-bottom: 1px solid" class=col-xs-4><span id=attention  ></span>
                </div>
            
    <div class=col-xs-2>
 

                   <p>Designation :</p>
        </div>
    <div style="border-bottom: 1px solid" class=col-xs-4>
<span id=designation  ></span>
</div>
                 </div>
                   <div class="row ">
                     <div class=col-xs-2>
                          <p>Tel :</p>
                    </div>
                    
            <div style="border-bottom: 1px solid" class=col-xs-5>
 
<span id=tel  ></span>
</div>
       
        <div class=col-xs-1>
         

             <p>Email:</p>
            </div>

<div style="border-bottom: 1px solid" class=col-xs-4>
    <span id=email  ></span>
    </div>

      </div>         
       <div class="row ">
             <div class=col-xs-2>
                  
               <p>Subject :</p>
               </div>

<div style="border-bottom: 1px solid" class=col-xs-10>
    
    <span id=subject  >:</span>
    </div>
</div>
 <div class="row ">
    <div class=col-xs-12>
<p>Dear Sir,</p>
<p><b>Reference to above inquiry,we are pleased to quote you the best competitive price as under.</b></p>
          </address>
        </div>
        </div>
        <!-- /.col -->
            <!-- /.col -->
             <div class="row ">
        <div class="col-sm-4 invoice-col">
       
        </div>
        <!-- /.col -->
      </div>
     
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 ">
         
         <table border=1 width=100% >
              <thead >
                <tr  >
            
                             
                             
                                    <th class="text-center" width="50px"><p   >Sr#</p></th>
                        <th class="text-center"><p >Description</p></th>
                        <th class="text-center" width="50px"><p >Unit</p></th>
                         <th class="text-center" width="50px"><p >Rate</p></th>
                         <th class="text-center" width="70px"><p >Quantity</p></th>
                         
                         <th class="text-center" width="70px"><p >Total</p></th>
                                        
                                        

                            </tr>
                            </thead>
               
                           
                    <tbody id="showPrice">
                    </tbody>
                    
                    </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
       
        </div>
        <!-- /.col -->
        <div class="col-xs-12">
          <p class="lead"></p>

          <div class="">
            <table class=""  width=100% height=60px  style="margin-bottom: 20px;">
            
             
           <tr >
                <td style="border:1px solid;"> <b>Total <span id="total"></span></b></td> 
                  <td style="border:1px solid;"> </td> 
               
               <td style="border:1px solid"><b><span  id="amount"></span> </b></td>
                         
              </tr>
                  <tr >
                <td style="border:1px solid;"> <b>  Discount</b></td> 
                  <td style="border:1px solid;"> </td> 
               
               <td style="border:1px solid"><b> <span  id="discount"></span> </b></td>
                         
              </tr>
               <tr >
                <td style="border:1px solid;"><b>Net Total</b>  </td> 
                  <td style="border:1px solid;"><b> <span id="words"></span></b></td> 
               
               <td style="border:1px solid"><b><span  id="subtotal"></span> </b></td>
                         
              </tr>
                <td  style="border: 1px solid;" class=terms>
                  <p style="color:white!important;">Terms and Conditions</p>
                </td>
              </tr>
            </table>
          </div>
          <div class=line>
          <p>Delivery :<span id=delivery></span></p>
          <p>Payment :<span id=payment></span></p>
          <p>Quotation Valid :<span id=quotation_valid></span></p>
          <p>Remarks :<span id=remarks></span></p>
        </div>
          <br><br>
          <p >Regards</p>
          <p  style=line-height:0.6px;><?php echo $_SESSION['full_name']?></p>
           <p >Manager</p>
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

     var id=<?php echo $id ?>;
      $.ajax({
        type: 'ajax',
        method:'post',
          data:{'id':id},     
        url:'<?php echo site_url('Quotation/edit_quotation_print')?>',
    
        datatype: 'json',
        success: function(data){

            var res=JSON.parse(data);
            var sno=0;
            var html='';
        $.each(res,function(i,item){
          
          sno++;
          html+='<tr>'+
            '<td class="border text-center"  >'+sno+'</td>'+
            '<td class=border >'+item.description+'</td>'+
            '<td class="border  text-center" >'+item.unit+'</td>'+
            '<td class="border text-center"> '+item.rate+'</td>'+
            '<td class="border text-center" >'+item.qty+'</td>'+
          
            '<td class="border text-center" >'+item.qd_amount+'</td></tr>';
$('#quatation_ref').html(item.id);

          $('#showPrice').html(html);
$('#amount').html(item.amount);
$('#subtotal').html(item.net_amount);
                    $('#s_date').html(item.date);
                     $('#discount').html(item.disc_amount);
                      $('#company_name').html(item.fullname);
                         if(item.attention!=''){
                      
                         $('#attention').html(item.firstname +' '+ item.lastname);
                            $('#designation').html(item.designation);
                              }
                              else{
                                   $('#attention').html('N/A');
                            $('#designation').html('N/A');
                              }
                               $('#tel').html(item.phone);
                                  $('#email').html(item.email);
                                     $('#delivery').html(item.delivery);

$('#payment').html(item.payment_remarks);
if(item.subject!=0){
$('#subject').html(item.subject);
}else{
    $('#subject').html(':');

}
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

$('#words').html('QAR '+convertNumberToWords(item.net_amount)+' Only');
    $('#date').html(datef);
$('#quotation_valid').html(item.valid);
$('#remarks').html(item.remarks);


});
        $('#terms').attr('css','background:black');
        window.print();
              
              }
            });
    }
        


    }); 

    </script>



</body>