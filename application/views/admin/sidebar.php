
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/user1-128x128.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php 
                  if(isset($_SESSION['user_name']))
                  {
                      echo $full_name=$_SESSION['user_name'];
                  }else{
                      
                      echo "No session active." ;
                  }
                  ?>
            </p>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="">
          <a href="<?php echo site_url('Home');?>" target="_blank">
            <i class="fa fa-desktop"></i><span> Dashboard</span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i><span>Quotation</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('Quotation/Add_Quotation');?>"><i class="far fa-dot-circle"></i>&nbspGenerate Quotation</a></li>
             <li><a href="<?php echo site_url('Quotation/Quotationview');?>"><i class="far fa-dot-circle"></i> View Quotation</a></li>
          </ul>
        </li> 

         <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i><span>Invoice</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('Invoice');?>"><i class="far fa-dot-circle"></i> Generate Invoice</a></li>
             <li><a href="<?php echo site_url('Invoice/Invoice_view');?>"><i class="far fa-dot-circle"></i> View Invoice</a></li>

          </ul>
        </li> 
        
    <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i><span>Customer</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('Customer/Add_Accounts');?>"><i class="far fa-dot-circle"></i>&nbspAdd Customer</a></li>
             <li><a href="<?php echo site_url('Customer/Accounts_view');?>"><i class="far fa-dot-circle"></i> View Customer</a></li>
          </ul>
        </li> 
          
            <li class="treeview">
          <a href="#">
            <i class="fa fa-dollar"></i><span>Transaction</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo site_url('Voucher/Payment_Voucher');?>"><i class="far fa-dot-circle"></i> Payment Voucher</a>
            </li>
           
            <li><a href="<?php echo site_url('Voucher/Receipt_Voucher');?>"><i class="far fa-dot-circle"></i> Receipt Voucher</a>
            </li>

                  <li><a href="<?php echo site_url('Voucher/Bank_Payment_Voucher');?>"><i class="far fa-dot-circle"></i> Bank Payment Voucher</a>
            </li>
             <li><a href="<?php echo site_url('Voucher/Bank_Reciept_Voucher');?>"><i class="far fa-dot-circle"></i> Bank Receipt Voucher</a>
            </li> 
           </ul>
      


        </li> 
             
     


             <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i><span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             
           
            <li><a href="<?php echo site_url('Reports/invoice_reports');?>"><i class="far fa-dot-circle"></i> Account Statement</a></li>
           
   
            <li><a href="<?php echo site_url('Reports/Payment_report');?>"><i class="far fa-dot-circle"></i> Payment Statement</a></li>
           

            <li><a href="<?php echo site_url('Reports/Receipt_report');?>"><i class="far fa-dot-circle"></i> Receipt Statement</a></li>
        
          <li><a href="<?php echo site_url('Reports/Bank_Payment_report');?>"><i class="far fa-dot-circle"></i>  Bank Payment Statement</a></li>

            <li><a href="<?php echo site_url('Reports/Bank_Receipt_report');?>"><i class="far fa-dot-circle"></i>  Bank Receipt Statement</a></li>

          </ul>
        </li> 

      

  <li class="treeview">
          <a href="#">
            <i class="fas fa-gear"></i> <span>&nbsp;Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
          <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i><span>&nbsp&nbspEmployee</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('Employee/Add_employee');?>"><i class="far fa-dot-circle"></i> Add Employee</a></li>
             <li><a href="<?php echo site_url('Employee/employee_view');?>"><i class="far fa-dot-circle"></i> View Employee</a></li>
          </ul>
        </li> 
     
                 <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i><span>&nbsp&nbspVendor</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('Vendors/Add_Vendor');?>"><i class="far fa-dot-circle"></i> Add Vendor</a></li>
             <li><a href="<?php echo site_url('Vendors/view_vendors');?>"><i class="far fa-dot-circle"></i> View Vendor</a></li>
          </ul>
        </li> 
                 <?php  if($_SESSION['user_type']!='user' ){?>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-industry"></i><span>&nbsp&nbspCompany</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
  <?php  if($_SESSION['user_type']!='admin'){?>
            <li><a href="<?php echo site_url('Company/Add_company');?>"><i class="far fa-dot-circle"></i> Add Company</a></li>
            <?php
            }
            if($_SESSION['user_type']=='admin' ||  $_SESSION['user_type']=='super_admin'){
            ?>
             <li><a href="<?php echo site_url('Company/View_Company');?>"><i class="far fa-dot-circle"></i> View Company</a></li>
                   <?php } ?> 
          </ul>
     
        </li>  
           <?php } ?> 


       <li class="treeview">
          <a href="#">
            <i class="fab fa-product-hunt"></i><span>&nbsp&nbsp&nbsp&nbspDesignation</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('Designation/Add_Designation');?>"><i class="far fa-dot-circle"></i> Add Designation</a></li>
             <li><a href="<?php echo site_url('Designation/View_Designation');?>"><i class="far fa-dot-circle"></i>  View Designation</a></li>
          </ul>
        </li> 
            <li class="treeview">
          <a href="#">
            <i class="fa fa-building"></i><span>&nbsp&nbspBank Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('Bank/Add_Bank');?>"><i class="far fa-dot-circle"></i> Add Bank</a></li>
             <li><a href="<?php echo site_url('Bank/View_Bank');?>"><i class="far fa-dot-circle"></i>  View Bank</a></li>
          </ul>
        </li> 


           <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i><span>&nbsp&nbspUser</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('user/Add_User');?>"><i class="far fa-dot-circle"></i> Add User</a></li>
             <li><a href="<?php echo site_url('user/View_User');?>"><i class="far fa-dot-circle"></i> View User</a></li>
          </ul>
        </li> 
                
          
        
      </ul>
    </li>
        
        
        
        
        
 
            <?php
          
              
        
          ?>
          
         
        
         
       
          </ul>
          
          </li>
    </section>
    <!-- /.sidebar -->
  </aside>