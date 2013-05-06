<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include_once __DIR__ . '/base.php';

class Admin extends Base
{
	public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('layout_admin');
    }

    public function index()
	{
		$this->layout->view('admin/index');
	}
}