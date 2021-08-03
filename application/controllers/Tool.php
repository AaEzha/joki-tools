<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tool extends CI_Controller {
	public function dm_button()
	{
		$data['title'] = "Twitter DM Button";
		$data['content'] = "tools/dm-button";

		$this->form_validation->set_rules('twitter_id', 'Twitter ID', 'required');
		$this->form_validation->set_rules('opening_text', 'Opening Text', 'required');

		if ($this->form_validation->run() == true) {
			$this->load->model('M_dmbutton');

			$data = new M_dmbutton();
			$data->twitter_id = $this->input->post('twitter_id');
			$data->opening_text = $this->input->post('opening_text');
			$data->save();

			$res = "https://twitter.com/messages/compose?text=". urlencode($this->input->post('opening_text')) . "&recipient_id=". $data->twitter_id;

			$this->session->set_flashdata('result', $res);
			return redirect('dm-button');
		}else{
			$this->load->view('template/header', $data);
		}

	}
}
