<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
    Reports
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fas fa-arrow-alt-circle-right"></i> Home</a></li>
         <li><a href="#">Reports</a></li>
        <li class="active">Bank Receipt Report</li>
      </ol>
    </section>
      

   <form   id="myForm" >
       
    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Bank Receipt  Report</h3>
        </div>
            
   <div class="alert alert-success" style="display: none;"></div>
   
   <div class="alert alert-danger" style="display: none;"></div>
        <!-- /.box-header -->
        <div class="box-body">
          
		  <div class="row">
		
            <div class="col-md-4">
              <label>From Date</label>
    <input name="from_date"  class="form-control" type=date>
        </div>
     
            <div class="col-md-4">
              <label>To Date</label>
    <input name="to_date"  class="form-control" type=date value="<?php echo date('Y-m-d')?>">
    </div>
     
            
	
          </div>
          
          
		  <div class="row">
		    <div class="col-md-3">
			
			</div>



            
            <!-- /.col -->
            <div class="col-md-6" style="text-align: center;padding-top: 40px;">
              <!-- /.form-group -->
              <div class="form-group">
                 <button style="background-color:#00A157;margin:0px !important;" type="button" class="btn bg-olive margin formcancel">Cancel</button>
				 <button style="background-color:#00A157;margin:0px !important;" type="button" class="btn bg-olive margin"  id="proceed" >View Report</button>
             <a style="background-color:#00A157;margin:0px !important;" type="button" class="btn bg-olive margin"  id="print" >Print</a>
			
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
                        <th>Sr#</th>
                         <th>Date</th>
                          <th>Account</th>
                       
                       
                         <th>Remarks</th>
                           
                         <th>Debit</th>

                         <th>Credit</th>
                       
                        
                          
                        
                    </tr>
                </thead>
                <tbody id="show_data">
                    
             
            </table>
            </div>
<div class=col-xs-10>
</div>
<div class="col-xs-2">

 <table class="table table-striped" >
                <thead>
              
                </thead>
                <tbody id="">
            
                         <td style="background: #36688d;color:white;"><b>Debit : </b> <span id=debit></span> </td>

  <td style="background: #36688d;color:white;"><b>Credit : </b> <span id=total></span> </td>                   </tbody>
            </table>
    
          
 
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
        <!-- /.box-body -->
        
      </div>
 
  </div>
 

  <div class="control-sidebar-bg"></div>

<!-- ./wrapper -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

   <script src="<?php echo base_url('assets/js/print.min.js')?>"></script>
<script type="text/javascript">
  



$(function(){
var array=[];
$('#proceed').click(function(){
var total=0;

var from_date=$('input[name=from_date]').val();
var to_date=$('input[name=to_date]').val();

$.ajax({
type:'post',
data:{'from_date':from_date,'to_date':to_date},

url:'<?php echo site_url('Reports/show_bank_receipt_report')?>',
datatype:'json',
success:function(res){

      var res=JSON.parse(res);
      var html='';
      var sno=0;
      var debit='';
$.each(res,function(i,item){
  array.push([sno,res[i].date,res[i].fullname,res[i].remarks,res[i].amount]);
  sno++;
  
if(item.amount>0){
   html+='<tr>'+
            '<td>'+sno+'</td>'+
            '<td>'+res[i].date+'</td>'+
            '<td>'+res[i].fullname+'</td>'+
            '<td>'+res[i].remarks+'</td>'+
            '<td>'+res[i].amount+'</td>'+
            '<td>'+0+'</td>'+
            '</tr>';
   debit=parseInt(debit+parseInt(item.amount));
  }
  if(item.amount<0){
 var a=parseInt(-1*res[i].amount);
 total=parseInt(total+a);
html+='<tr>'+
            '<td>'+sno+'</td>'+
            '<td>'+res[i].date+'</td>'+
            '<td>'+res[i].fullname+'</td>'+
            '<td>'+res[i].remarks+'</td>'+
            '<td>'+0+'</td>'+
            '<td>'+a+'</td>'+
            '</tr>';

  }

});
$('#show_data').html(html);
$('#debit').html(debit.toFixed(2));
$('#total').html(total.toFixed(2));
},

error:function(){

        alert('data not found');
}

});


});
$('#print').click(function(){
  $.ajax({
type:'post',
data:{'array':array},
url:'<?php echo site_url('Reports/report3')?>',
datatype:'json',
success:function(){
  


},


});
$('#print').attr('href','<?php echo site_url('Reports/bank_receipt_report_print')?>');



})


$('.formcancel').click(function(){
$('#myForm')[0].reset();
$('#show_data').html('');
array=[];
$('#total').html('0');
 });


});



</script>