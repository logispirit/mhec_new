<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {


	public function index()
	{
		$this->load->view('adminDashboard/admin_login_page');
	}


		public function dashboard()
	{
		$this->load->view('adminDashboard/dashboard_main_page');
	}


//////////////////////    project section   /////////////////////////////////////////////

	// show poject 
		public function showProject()
	{
		$this->load->view('adminDashboard/project/show_project');
	}


	// add poject 
		public function addProjectOnging()
	{
		$this->load->view('adminDashboard/project/add_new_ongoing_project');
	}

	// add poject 
		public function addProjectCompleted()
	{
		$this->load->view('adminDashboard/project/add_new_completed_project');
	}



	// edit poject 
		public function editProject()
	{
		$this->load->view('adminDashboard/project/edit_project');
	}
	
//////////////////////////////////////////////////////////////////////////////////////

//////////////////////    Album section   /////////////////////////////////////////////0
	
	// add photo
		public function addPhoto()
	{
		$this->load->view('adminDashboard/gallery/add_new_images');
	}




		// add Vacancies
		public function addVacancies()
	{
		$this->load->view('adminDashboard/vacancies/add_vacancies');
	}



		// add CSR
		public function addCsr()
	{
		$this->load->view('adminDashboard/csr/add_csr');
	}

		// add trainig
		public function addTraining()
	{
		$this->load->view('adminDashboard/training/add_training');
	}





	//////////////////////////////////////////////////////////////////////////////////////

//////////////////////    Data section   /////////////////////////////////////////////0
	
	// add add_traffic_data
		public function add_traffic_data()
	{
		$this->load->view('adminDashboard/data/add_traffic_data');
	}

	// add add_highway_data
		public function add_highway_data()
	{
		$this->load->view('adminDashboard/data/add_highway_data');
	}

	// add add_hydrology_data
		public function add_hydrology_data()
	{
		$this->load->view('adminDashboard/data/add_hydrology_data');
	}

	// add add_enviromental_data
		public function add_enviromental_data()
	{
		$this->load->view('adminDashboard/data/add_enviromental_data');
	}

	// add add_social_data
		public function add_social_data()
	{
		$this->load->view('adminDashboard/data/add_social_data');
	}

	// add add_data_collection_data
		public function add_data_collection_data()
	{
		$this->load->view('adminDashboard/data/add_data_collection_data');
	}

	// add add_miscellaneous_data
		public function add_miscellaneous_data()
	{
		$this->load->view('adminDashboard/data/add_miscellaneous_data');
	}




}
