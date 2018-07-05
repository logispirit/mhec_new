<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	
	public function index()
	{
		$this->load->view('data/data');
	}


	public function traffic_data_table()
	{
		$this->load->view('data/traffic_data_table');
	}


	public function data_collection_data_table()
	{
		$this->load->view('data/data_collection_data_table');
	}


	public function enviromental_data_table()
	{
		$this->load->view('data/enviromental_data_table');
	}


	public function highway_data_table()
	{
		$this->load->view('data/highway_data_table');
	}


	public function hydrology_data_table()
	{
		$this->load->view('data/hydrology_data_table');
	}


	public function miscellaneous_data_table()
	{
		$this->load->view('data/miscellaneous_data_table');
	}


	public function social_data_table()
	{
		$this->load->view('data/social_data_table');
	}









}
