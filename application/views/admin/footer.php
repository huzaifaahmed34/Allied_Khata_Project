
  <footer class="main-footer no-print">
    <div class="pull-right hidden-xs">
     <section>
  <ul id="services">
   
    <li>
      <div class="facebook">
        <a href="#">
          <i class="fab fa-facebook-f"></i>
        </a>
      </div>
    </li>
    <li>
      <div class="twitter">
        <a href="#">
          <i class="fab fa-twitter"></i>
        </a>
      </div>
    </li>
    <li>
      <div class="youtube">
        <a href="#">
          <i class="fab fa-youtube"></i>
        </a>
      </div>
    </li>
    <li>
      <div class="instagram">
        <a href="#">
          <i class="fab fa-instagram"></i>
        </a>
      </div>
    </li>
    <li>
      <div class="github">
        <a href="#">
          <i class="fab fa-github"></i>
        </a>
      </div>
    </li>
  </ul>
  
</section>
    </div>
    <strong>Copyright &copy; 2019 <a href="alliedtajar.com">Allied Biz Tech (Pvt) Ltd</a></strong>. All rights
    reserved.
  </footer>
  
  
  

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->

<!-- ./wrapper -->

<!-- jQuery 3 -->

 <link href="https://fonts.googleapis.com/css?family=Raleway+Dots" rel="stylesheet" type="text/css">
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminLTE.min.css">

<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>assets/bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>


<script src="https://cdn.jsdelivr.net/npm/multiple-select-js@latest/dist/js/multiple-select.js"></script>
<div class="container no-print">
	<div class="row">
	 <div id="Smallchat">
    <div class="Layout Layout-open Layout-expand Layout-right" style="background-color:#36688D;color: rgb(255, 255, 255);opacity: 5;border-radius: 10px;">
      <div class="Messenger_messenger" s>
        <div class="Messenger_header" style="background-color:#36688D!important; color: white;">
           <span class="chat_close_icon"><i class="fas fa-times"></i></span> </div>
        <div class="Messenger_content">
          <div class="Messages" style="background: #36688D">
            <div class="Messages_list">
			 <img class="chat-img" src="https://cdn3.iconfinder.com/data/icons/toolbar-people/512/call_center_phone_telephone_mobile-512.png" height="70" width="70">
			 <h3>Abdul Ghafoor</h3>
			 <p>Looking for help? Contact me now I will surely help you.</p>
			 <a href="tel:+923326775000" ><button class="call-button"><h4><span class="call_icon"><i class="fas fa-phone-alt"></i></span><b> +92 332 6775000</b></h4></button></a>
			
			</div>
          </div>
        </div>
      </div>
    </div>
    <!--===============CHAT ON BUTTON STRART===============-->
    <div class="chat_on"> <span class="chat_on_icon"><i class="fas fa-phone-alt"></i></span> </div>
    <!--===============CHAT ON BUTTON END===============-->
  </div>
	</div>
</div>
<script>

// CHAT BOOT MESSENGER////////////////////////


$(document).ready(function(){
    $(".chat_on").click(function(){
        $(".Layout").toggle();
        $(".chat_on").hide(300);
    });
    
       $(".chat_close_icon").click(function(){
        $(".Layout").hide();
           $(".chat_on").show(300);
    });
    
});
</script>


<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
	
	$('#radioBtn a').on('click', function(){
    var sel = $(this).data('title');
    var tog = $(this).data('toggle');
    $('#'+tog).prop('value', sel);
    
    $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
    $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
	})
	
	</script>
	
<!-- DataTables -->
<script src="<?php echo base_url();?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->


<!-- page script -->
<script type="text/javascript">
  $(function(){
  $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : true,
    })
});
</script>
</body>
</html>