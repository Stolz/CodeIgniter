<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function clean()
{
	$CI =& get_instance();

	if( ! $CI->input->is_ajax_request() AND $CI->config->item('tidy_enabled'))
	{
		$tidy = new tidy;
		$tidy->parseString($CI->output->get_output(), $CI->config->item('tidy_options'), 'utf8');
		$tidy->cleanRepair();

		if($CI->config->item('tidy_show_error') && $tidy->getStatus())  //Errors or warnings found
			$CI->output->set_output($tidy.$CI->config->item('tidy_open_tag').nl2br(htmlentities($tidy->errorBuffer)).$CI->config->item('tidy_close_tag'));
		else
			$CI->output->set_output($tidy);
	}

	$CI->output->_display();
}

/* End of file tidy.php */
/* Location: ./system/application/hooks/tidy.php */
