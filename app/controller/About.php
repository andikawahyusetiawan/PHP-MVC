<?php

class About extends Controller {

	public function index($nama = 'wahyu', $umur = 32, $pekerjaan = 'mahasiswa')
	{
		$data['nama'] = $nama;
		$data['umur'] = $umur;
		$data['pekerjaan'] = $pekerjaan;
		$data['judul'] = 'About Me';
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}

	public function page()
	{
		$data['judul'] = 'Pages';
		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/footer');
	}


}