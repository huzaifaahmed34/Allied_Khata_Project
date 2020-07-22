<?php header('Access-Control-Allow-Origin: *'); ?><?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller{
	function __construct(){
		parent::__construct();
		       
       if(!isset($_SESSION['login'])){


        redirect('Login');
       }
		$this->load->model('Post_model','m');
	}
	function index(){
        
		$this->load->view('Post');
       
	} 

	function Country(){
        
		$this->load->view('country_view');
       
	} 

function Sector(){
        
		$this->load->view('sector_view');
       
	} 	 public function new()
    {
        $this->load->view('welcome_message');
    }

function Country_edit(){
        
		$this->load->view('country_trade_show');
       
	}
	   public function countryedit()
    {
        
        $data=$this->m->country_edit();
        echo json_encode($data);
        
    }
       public function countryupdate()
    {
     
        $data=$this->m->country_update();
        echo json_encode($data);
        
    }  
    public function countrydelete()
    {
    
        $data=$this->m->country_delete();
        echo json_encode($data);
        
    }
    
public function sectoredit()
    {
        
        $data=$this->m->sector_edit();
        echo json_encode($data);
        
    }
       public function sectorupdate()
    {
     
        $data=$this->m->sector_update();
        echo json_encode($data);
        
    }  
    public function sectordelete()
    {
    
        $data=$this->m->sector_delete();
        echo json_encode($data);
        
    }
    

	public function sectoradd()
    {
        $data=$this->m->sectoradd();
		echo json_encode($data);
    }
    
    public function save_Country()
    {
        $data=$this->m->save_Country();
		echo json_encode($data);
    }
        public function countryadd()
    {
        $data=$this->m->countryadd();
		echo json_encode($data);
    }
        public function showcountry()
    {
        $data=$this->m->showcountry();
		echo json_encode($data);
    }
     public function showsector()
    {
        $data=$this->m->showsector();
		echo json_encode($data);
    }
    
       public function show()
    {
        $data=$this->m->fetch_data();
		echo json_encode($data);
    }
     public function shownews()
    {
        $data=$this->m->shownews();
		echo json_encode($data);
    }

         public function edit()
    {
        $data=$this->m->edit_data();
		echo json_encode($data);
    }
  public function edit_trade()
    {
        $data=$this->m->edit_trade();
		echo json_encode($data);
    }
         public function update()
    {
        $data=$this->m->update_data();
		echo json_encode($data);
    }
    public function update_trade()
    {
        $data=$this->m->update_trade();
		echo json_encode($data);
    }
      public function delete()
    {
        $data=$this->m->delete_data();
		echo json_encode($data);
    }
    
   public function delete_trade()
    {
        $data=$this->m->delete_trade();
		echo json_encode($data);
    }
    

 function action()
 {
  $this->load->model("Post_model");
  $this->load->library("excel");
  $object = new PHPExcel();

  $object->setActiveSheetIndex(0);

  $table_columns = array("cn_id", "country_id", "Sector Id", "trade_with","Trade","Year","Value","Currency","Type");

  $column = 0;

  foreach($table_columns as $field)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
   $column++;
  }

  $employee_data = $this->Post_model->fetch_data();

  $excel_row = 2;

  foreach($employee_data as $row)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->cn_id);
   $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->country_id);
   $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->sector_id);
   $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->trade_with);
     $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->trade);
   $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->year);
     $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->value);
       $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->currency);
       $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row, $row->type);
        
           
   $excel_row++;
  }

  $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
  header('Content-Type: application/vnd.ms-excel');
  header('Content-Disposition: attachment;filename="Employee Data.xls"');
  $object_writer->save('php://output');
 }

 public function generate_pdf() {
	//load pdf library
	$this->load->library('Pdf');
	
	$pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	// set document information
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('https://www.roytuts.com');
	$pdf->SetTitle('Country Trade');
	$pdf->SetSubject('Country Trade');
	$pdf->SetKeywords('TCPDF, PDF, MySQL, Codeigniter');

	// set default header data
	//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

	// set header and footer fonts
	$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
	$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

	// set default monospaced font
	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

	// set margins
	$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
	$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

	// set auto page breaks
	$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

	// set image scale factor
	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

	// set font
	$pdf->SetFont('times', 'BI', 12);
	
	// ---------------------------------------------------------
	
	
	//Generate HTML table data from MySQL - start
	$template = array(
		'table_open' => '<table border="1" cellpadding="2" cellspacing="1">'
	);

	$this->table->set_template($template);

	$this->table->set_heading('CN Id', 'Country Id', 'Sector Id', 'Trade', 'Trade With','year','value','currency','type');
	
	$salesinfo = $this->m->fetch_data();
		
	foreach ($salesinfo as $sf):
		$this->table->add_row($sf->cn_id, $sf->country_id, $sf->sector_id, $sf->trade, $sf->trade_with,$sf->year,$sf->value,$sf->currency,$sf->type);
	endforeach;
	
	$html = $this->table->generate();
	//Generate HTML table data from MySQL - end
	
	// add a page
	$pdf->AddPage();
	
	// output the HTML content
	$pdf->writeHTML($html, true, false, true, false, '');
	
	// reset pointer to the last page
	$pdf->lastPage();

	//Close and output PDF document
	$pdf->Output(md5(time()).'.pdf', 'D');
}

}