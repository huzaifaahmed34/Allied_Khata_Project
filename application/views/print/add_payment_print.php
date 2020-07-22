<body onload="window.print()">
   
<div class="wrapper" >
<style type="text/css" media="screen, print" >

  
  @media print{
  #terms{
    background: black;
    color: white;


  }
  #size{
    font-size:auto;
  }

  }
  -webkit-print-color-adjust:exact;
</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
   
    </section>

<?php

$arr=$_SESSION['payment_voucher_array']; 
     
    for($i=0;$i<sizeof($arr) ;$i++){
      ?>
    <section class="invoice" style="height:  700px">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12 text-center">
          <h2 class="">
      Payment Voucher<br>
           قسيمة دفع
          </h2>
        </div>
             <div class="col-xs-4 ">
     <h3>No:</h3> 
        </div>
        <div class="col-xs-4 " style="margin-top: 20px;">
        
   <table border=1 width="100%">
          <tr>
            <Td id=size class=text-center width=30px>Amount</Td>
             <Td id=size class=text-center width=50px ><span id=amount ><?php echo $arr[$i][2];?></span></Td>
              <Td id=size class=text-center width=20px ><span id=amountarabic> <?php echo $arr[$i][2];?></span></Td>
               <Td id=size class=text-center width=20px>كمية</Td>

          </tr>
        </table>
           
        
        </div>

           <div class="col-xs-4 text-right" style="margin-top: 20px;">
 <p id=size>Date &nbsp;:&nbsp;  <span style="text-decoration: underline;"><?php echo date('Y-m-d'); ?></span> : تاريخ  </p>
        </div>
        <!-- /.col -->
      </div>
<div class=row style="border:2px solid;margin-top: 20px;padding-bottom: 20px;margin-right: 0px;margin-left: 0px;">


<div class="col-xs-12" style="margin-top: 20px;margin-bottom: 20px">



<div style="width:50%;float: left">
<p id=size>Payment for Mr/ Messrs : <span id=customer style="text-decoration: underline;">
  <?php $a=$arr[$i][3];
    $qry=$this->db->query("select * from accounts where id='$a'")->result();
    foreach ($qry as $key) {
      echo $key->fullname;
      # code...
    }
 

?></span></p></div>

<div style="width:50%;float: left;direction:rtl"><p id=size>نالدفع للسيد / السادة  : <span id=customer style="text-decoration: underline;"></span></p></div>



<div style="width:50%;float: left">
<p id=size>The Sum of QRS. : <span id=qrs style="text-decoration: underline;"> <?php echo $arr[$i][2];?></span></p></div>

<div style="width:50%;float: left;direction:rtl"><p id=size>نمجموع QRS. : <span id=qrsarabic style="text-decoration: underline;"> <?php echo $arr[$i][2];?></span></p></div>


<div style="width:50%;float: left">
<p id=size>By Cash/Cheque No : <span id=cashno style="text-decoration: underline;"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date : <span id=date style="text-decoration: underline;"><?php echo $arr[$i][1];?></span></p>
</div><div style="width:50%;float: left;direction:rtl"><p id=size>نقدا / الشيك رقم  : <span id=cashnoarabic style="text-decoration: underline;"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; اريخ &nbsp;&nbsp;<span id=datearabic style="text-decoration: underline;"><?php echo $arr[$i][1];?></span></p></div>






<div style="width:50%;float: left">
<p id=size>Drawn On : <span id=drawn style="text-decoration: underline;"></span></p></div>

<div style="width:50%;float: left;direction:rtl"><p id=size>مأخوذ
 : <span id=drawnarabic style="text-decoration: underline;"></span></p></div>



 

<div style="width:50%;float: left" >
<p id=size>In Settlement Of : <span id=settlement style="text-decoration: underline;"><?php echo $arr[$i][4];?></span>
</p></div>
<div style="width:50%;float: left;direction:rtl"><p id=size>في تسوية  : <span id=settlementarabic style="text-decoration: underline;"><?php echo $arr[$i][4];?></span></p></div>





</div>
<div class="col-xs-4 text-center" id=size style="margin-top: 10px;">
  <p>Manager مدير</p>_________________
</div>    
<div class="col-xs-4 text-center"  id=size style="margin-top: 10px;">
  <p>Accountant محاسب</p>_________________
</div>      
<div class="col-xs-4 text-center" id=size  style="margin-top: 10px;">
  <p>Receiver المتلقي</p>_________________
</div>    
</div>
     </section>

     <?php 
}
     ?>
   </div></div></body>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
  
  