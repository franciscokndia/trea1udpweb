<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Academic Free License version 3.0
 *
 * This source file is subject to the Academic Free License (AFL 3.0) that is
 * bundled with this package in the files license_afl.txt / license_afl.rst.
 * It is also available through the world wide web at this URL:
 * http://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world wide web, please send an email to
 * licensing@ellislab.com so we can send you a copy immediately.
 *
 * @package		CodeIgniterOnfire
 * @author		Diego Portales University
 * @copyright	Copyright (c) 2014 - 2014, Diego Portales University (http://udp.cl/)
 * @license		http://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * @link		http://codeigniteronfire.com
 * @since		Version 1.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
  public function __construct()
       {
            parent::__construct();
            // Add your models here
            $this->load->model('Blogmodel');

       }


	public function index()
	{
		$this->load->view('menu');
	}

	public function listar()
	{
		$d=$this->Blogmodel->get_last_ten_entries();
		$this->load->view('list',array('data'=>$d));	
	}

	public function insert()
	{
		$this->load->view('insert');
	}

	public function insert2()
	{	
		$list=$this->Blogmodel->insert_entry();
//		$this->load->index();
		header( 'Location: index' );
	}

        public function get($id)
        {
                $d=$this->Blogmodel->getbyid($id);
	        $this->load->view('vista',array('data',$d));
        }	

	public function update()
	{
		$list=$this->Blogmodel->update_entry();
		header( 'Location: listar');
	}

	public function byid($id)
	{
		$id=$this->Blogmodel->getbyid($id);
		$this->load->view('update',array('update' => $id));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */
