<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function construct()
	{
		parent::construct();//初始化,必须有这句
	}

	public function all($pageNo = NULL)
	{
		$this->load->model('Video_model');
		$data['videos'] = $this->Video_model->get_videos();
		$this->load->view('video_list',$data);

	}

	public function detail($aid)
	{
		echo $aid;
		$this->load->model('Video_model');
		$data['video'] = $this->Video_model->getVideoByid($aid);
		$this->load->view('video_detail',$data);

	}
}
