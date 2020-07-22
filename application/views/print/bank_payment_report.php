<body onload="window.print();">
    <style type="text/css">
      
      p{
        font-size:12px;
      }
    </style>
<div class="wrapper" >


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Reports</a></li>
        <li class="active">Bank Payment Report</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
    
          <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
           Allied Khata
           
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-xs-12 i">
               <address>
            <strong>
                 <h4>Bank Payment Report 
                 </h4></strong>
       
          
        
           
          </address>
        </div>
        <!-- /.col -->
    <?php 
    $v=$_SESSION['company_id'];
$name='';
    $qry=$this->db->query("Select * from company_details where id='$v'")->result();
    $company_name='';
    $address='';
    $email='';
    $phone='';
foreach ($qry as $q) {
  $company_name=$q->company_name;
 $address=$q->address;
 $email=$q->email;  
 $phone=$q->phone;

  # code...
}


    ?>
        <!-- /.col -->
        <div class="col-xs-6 ">

      <p> <i class="fa fa-building"></i> <b>Company Name : </b><span id=company><?php echo $company_name?></span></p>
         <p> <i class="fa fa-phone"></i>  <b>Phone : </b><span id=phone><?php echo $phone?></span></p>
           <p> <i class="fa fa-envelope"></i>  <b>Email : </b><span id=email><?php echo $email?></span></p>
        </div>
          <div class="col-xs-6 ">
      
         <p> <i class="fa fa-calendar"></i>  <b>Date : </b><span id=date><?php echo date('Y-m-d')?></span></p>
           <p> <i class="fa fa-address-book"></i>  <b>Address : </b><span id=address><?php echo $address?></span></p>
        </div>
        <!-- /.col -->
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
       
        </div>
        <!-- /.col -->
      </div>      <!-- /.row -->
 
      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
         
         <table class="table  table-striped table-hover js-basic-example dataTable">
              <thead>
                <tr style="background:black;color:white">
            
                             
                                    <th>Sr#</th>
                   
                         <th>Date</th>
                        <th>Name</th>
                       
                         <th>Remarks</th>
                           
                         <th>Debit</th>
                          <th>Credit</th>
                          

                            </tr>
                            </thead>
               
                           
                    <tbody id="showPrice"><?php
                    $arr=$_SESSION['bank_payment_array'];
                    $debit=0;

                    $credit=0;
for($i=0;$i<sizeof($arr) ;$i++){
for($j=0;$j<sizeof($arr[$i]);$j++){?>


<?php
}?>

<tr>
  <td><?php echo $arr[$i][0]?></td>
  <td><?php echo $arr[$i][1]?></td>
<td><?php echo $arr[$i][2]?></td>
   <td><?php echo $arr[$i][3]?></td>
    <?php  if($arr[$i][4]>0){ ?>
     <td><?php echo $arr[$i][4]?></td>
     <td>0</td>
     <?php 
     $debit+=$arr[$i][4];}
     else{ ?>
     <td>0</td>
     <td><?php echo -1*$arr[$i][4]?></td>
     <?php
     $credit+=(-1*$arr[$i][4]); }?>  

   </tr>
<?php
 
}
  ?>
                    </tbody>
                    
                    </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

            
      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-7">
       
        </div>
        <!-- /.col -->
        <div class="col-xs-5">
          <p class="lead"></p>

          <div >
            <table class="table">
            
             
             
              <tr style="color:green">
              
           
             
                <td> <b>Debit :<span id="subtotal"> <?php echo $debit?></span></b></td>
                 <td> <b>Credit :<span id="subtotal"> <?php echo $credit?></span></b></td>
                <td></td>
              </tr>
            </table>
          </div>
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