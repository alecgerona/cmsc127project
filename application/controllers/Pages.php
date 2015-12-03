<?php
class Pages extends CI_Controller {

	


	public function view($page = 'home'){

		 if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->helper('url');
        $this->load->database();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);

	}

	public function inventorypage(){
		$this->load->model('inventory_model');
		$data['query'] = $this->inventory_model->popinventory();
		$this->load->view('templates/header-user');
		$this->load->view('pages/inventorypage', $data);
		$this->load->view('templates/footer-user');
	}

	public function addinventory(){
		$this->load->model('inventory_model');
		$this->inventory_model->pushinventory();

		$data['query'] = $this->inventory_model->popinventory();
		$this->load->view('templates/header-user');
		$this->load->view('pages/inventorypage', $data);
		$this->load->view('templates/footer-user');
	}

	public function process(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$this->load->library('session');
		// Load the model
		$this->load->model('login_model');
		// Validate the user can login
		$result = $this->login_model->validate();
		// Now we verify the result
		if(! $result){
			// If user did not validate, then show them login page again
			redirect('Pages/view');
		}else{
			// If user did validate, 
			// Send them to members area

			$this->session->set_userdata('username', $this->input->post('username'));

			$sql = "SELECT username, password FROM admin WHERE username='$username' and password='$password'";
			$query = $this->db->query($sql);
			if ($query-> num_rows() == 1){ //Is admin
		    	$this->load->view('templates/header-user');
				redirect('Pages/orderhistory');
				$this->load->view('templates/footer-user');
		    } 
		    else { //Is user
		    	$this->load->view('templates/header-user');
				redirect('Pages/user');
				$this->load->view('templates/footer-user');
		    }


		}		
	}

	public function user(){
	 	$this->load->database();
	 	$this->load->model('inventory_model');

	 	$this->load->view('templates/header-user');
        $this->load->view('pages/user');
        $this->load->view('templates/footer-user');
	}

	public function viewOrderHistory(){
		$this->load->model('inventory_model');
		$data['query'] = $this->inventory_model->poporderhistory();
		
		$this->load->view('templates/header-user');
		$this->load->view('pages/orderhistory', $data);
		$this->load->view('templates/footer-user');
	}

	public function generateSOR(){
		$this->load->model('inventory_model');
		$data['query'] = $this->inventory_model->poporderhistory();
		$html = $this->load->view('pages/orderhistorylite', $data, true);
		$pdfFilePath = "tbhsalesorderreport.pdf";
		$this->load->library('m_pdf');
		$pdf = $this->m_pdf->load();
		$pdf->WriteHTML($html);
		$pdf->Output();
		//$pdf->Output($pdfFilePath, "D");
	}

	public function purchase(){
		$this->load->database();
		$this->load->model('inventory_model');
		$this->inventory_model->useingredients();

		$this->load->view('templates/header-user');
		$this->load->view('pages/user');
		$this->load->view('templates/footer-user');
	}
}