
<?php
/**
 * ------------------------------------------------------------------------
 */
//require APPPATH . '/third_party/restful/libraries/Rest_controller.php';

class Jobs extends Rest_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('tasks');
	}
	
}