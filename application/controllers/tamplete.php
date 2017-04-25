<?php 


class  Tamplete extends CI_Controller 
{
	
function __construct()
{
	
	parent::__construct();
}
	
	function  test()
{
	$data="";
		$this->admin($data);
		
}




	
	function boot($data)
	{
		$this->load->view('boot',$data);
		
	}
	
	function jquary($data)
	{
		$this->load->view('jquary',$data);
		
	}
	
	function admin($data)
	{
		$this->load->view('admin',$data);
		
	}
	
}