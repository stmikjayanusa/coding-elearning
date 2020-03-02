<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
	}
	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'page'  => 'Dashboard',
			'small' => title(),
			'urls'  => ''
		];
		$this->template->display('layout/content', $data);
	}
	public function walas()
	{
		$data = [
			'title' => 'Dashboard',
			'page'  => 'Dashboard',
			'small' => title(),
			'urls'  => ''
		];
		$this->template->display('layout/content', $data);
	}
	public function guru()
	{
		$data = [
			'title' => 'Dashboard',
			'page'  => 'Dashboard',
			'small' => title(),
			'urls'  => ''
		];
		$this->template->display('layout/content', $data);
	}
	public function siswa()
	{
		$data = [
			'title' => 'Dashboard',
			'page'  => 'Dashboard',
			'small' => title(),
			'urls'  => ''
		];
		$this->template->display('layout/content', $data);
	}
}
