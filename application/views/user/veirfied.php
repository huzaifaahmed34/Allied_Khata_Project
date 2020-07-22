<head>
	 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/util.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
</head><center >
	<h1>Welcome To Allied Khata
	</h1><h1>Your account is Verified Successfully
	</h1>
	<a href="<?php echo site_url('Login')?>" class="btn btn-primary ">Login to your account</a>

</center>

<?php 
$i=$this->uri->segment(3);
$id=str_split($i,10)  ;
 
$this->db->query("update user set status='Active' where id='$id[1]'");

?>