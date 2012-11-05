<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//to-do delete this file is you don't plan to use Datamapper ORM

class Datamapperexample extends DataMapper {

	public $validation = array(
		'foo' => array(
			'rules' => array('required', 'min_length' => 5, 'max_length' => 10),
			'label' => 'Foo'
		)
	);

}

/* End of file datamapperexample.php */
/* Location: ./application/models/datamapperexample.php */
