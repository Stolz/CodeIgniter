<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function clean()
{
	$CI =& get_instance();

	if( ! $CI->input->is_ajax_request() AND $CI->config->item('tidy_enabled'))
	{
		$tidy = new tidy;
		$tidy->parseString($CI->output->get_output(), $CI->config->item('tidy_options'), 'utf8');
		$tidy->cleanRepair();

		$output = $tidy;

		if($CI->config->item('tidy_show_error') && $tidy->getStatus())  //Errors or warnings found
		{
			/*workaround: hide errors related to HTML5*/
			$errors = preg_replace("/line.*proprietary attribute \"data-.*\n?/", '', $tidy->errorBuffer);
			$errors = preg_replace("/line.*proprietary attribute \"placeholder.*\n?/", '', $errors);
			$errors = preg_replace("/line.*is not approved by W3C\n?/", '', $errors);
			$errors = preg_replace("/line.*trimming empty <li>\n?/", '', $errors);
			$errors = preg_replace("/line.*trimming empty <span>\n?/", '', $errors);
			$errors = preg_replace("/line.*<html> proprietary attribute \"class\"\n?/", '', $errors);

			if(strlen($errors))
				$output .= $CI->config->item('tidy_open_tag').nl2br(htmlentities($errors)).$CI->config->item('tidy_close_tag');
		}

		$CI->output->set_output("<!DOCTYPE html>\n".preg_replace('_ xmlns="http://www.w3.org/1999/xhtml"_', '', $output, 1)); //Manually add HTML5 doctype until PHP-tidy supports HTML5
	}

	$CI->output->_display();
}

/* End of file tidy.php */
/* Location: ./system/application/hooks/tidy.php */
