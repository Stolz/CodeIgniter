<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* MY_Form_Validation Class
*
* Extends the core CI_Form_Validation.
* More validataion rules available at https://github.com/EllisLab/CodeIgniter/wiki/MY-Validation
*
* NOTE: The error messages must be added to the validation language files (language/LANGUAGE/form_validation_lang.php)
*/

class MY_Form_Validation extends CI_Form_Validation {

	/**
	 * SQL Date type "YYYY-MM-DD"
	 *
	 * @param	string
	 * @return	bool
	 */
	function is_date($str)
	{
		if(count($array = explode('-', trim($str))) != 3)
			return FALSE;

		list($y, $m, $d) = $array;

		if( ! @checkdate($m, $d, $y))
			return FALSE;

		return TRUE;
	}


	// BEGIN : Backports of CI 3.0-dev into CI 2.x ****************************

	/**
	 * Differs from another field
	 *
	 * @param	string
	 * @param	string	field
	 * @return	bool
	 */
	public function differs($str, $field)
	{
		return ! (isset($this->_field_data[$field]) && $this->_field_data[$field]['postdata'] === $str);
	}

	/**
	* Equal to or Greater than
	*
	* @param string
	* @param int
	* @return bool
	*/
	public function greater_than_equal_to($str, $min)
	{
		return is_numeric($str) ? ($str >= $min) : FALSE;
	}

	/**
	 * Equal to or Less than
	 *
	 * @param	string
	 * @param	int
	 * @return	bool
	 */
	public function less_than_equal_to($str, $max)
	{
		return is_numeric($str) ? ($str <= $max) : FALSE;
	}


	/**
	 * Valid URL
	 *
	 * @param	string	$str
	 * @return	bool
	 */
	public function valid_url($str)
	{
		if (empty($str))
		{
			return FALSE;
		}
		elseif (preg_match('/^(?:([^:]*)\:)?\/\/(.+)$/', $str, $matches))
		{
			if (empty($matches[2]))
			{
				return FALSE;
			}
			elseif ( ! in_array($matches[1], array('http', 'https'), TRUE))
			{
				return FALSE;
			}

			$str = $matches[2];
		}

		$str = 'http://'.$str;

		// There's a bug affecting PHP 5.2.13, 5.3.2 that considers the
		// underscore to be a valid hostname character instead of a dash.
		// Reference: https://bugs.php.net/bug.php?id=51192
		if (version_compare(PHP_VERSION, '5.2.13', '==') === 0 OR version_compare(PHP_VERSION, '5.3.2', '==') === 0)
		{
			sscanf($str, 'http://%[^/]', $host);
			$str = substr_replace($str, strtr($host, array('_' => '-', '-' => '_')), 7, strlen($host));
		}

		return (filter_var($str, FILTER_VALIDATE_URL) !== FALSE);
	}


	// END : Backports of CI 3.0-dev into CI 2.x ******************************
}


/* End of file MY_Form_Validation.php */
/* Location: ./application/libraries/MY_Form_Validation.php */