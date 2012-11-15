<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** This library improves the standard CI pagination library:
	- auto calculates 'base_url' and 'uri_segment'
	- Keeps the URL options in the pagination links
	- Generates clean urls links, filtering unsopported values and setting default values for missing options
	- Can generate table headers links for you for changing the sorting of data
*/
class MY_Pagination extends CI_Pagination {

	var $CI;
	var $offset = 0;
	var $table_header = array();

	/* All the options we accept in the URL (that is, options that our model can understand).
		- first value is the default one for this option. Tt will be used if the option is not provided or if is provided but with an invalid value.
		- NULL means all values are accepted for this option
		- 'offset' is always considered an accepted option, there is no need to include it here
	*/
	var $accepted_url_options = array();

	// Options that have been provided in the URL and belong to the $accepted_url_options
	var $url_options = array(); //Automatically populated by the library
	//A FALSE value in $url_options means the option was not provided in the URL

	// Options that have been provided in the URL but don't belong to the $accepted_url_options
	var $invalid_url_options = array(); //Automatically populated by the library.

	function __construct($params = array())
	{
		$this->CI =& get_instance();
		parent::__construct($params);
	}

	function initialize($params = array(), $start_segment = 3)
	{
		if ( ! is_array($params) OR ! isset($params['accepted_url_options']) OR ! isset($params['per_page']))
			show_error('Pagination library is missing one or more required params');

		//Get options from URL
		$params['invalid_url_options'] = $this->CI->uri->uri_to_assoc($start_segment, array_keys($params['accepted_url_options']));
		//A FALSE value in $url_options means the option was not provided in the URL

		//Get offset
		$params['offset'] = (isset($params['invalid_url_options']['offset'])) ? intval($params['invalid_url_options']['offset']) : 0;
		unset($params['invalid_url_options']['offset']);

		//Set defaults values and ignore unknown options
		$params['url_options'] = array();
		foreach($params['accepted_url_options'] as $option => $accepted_values)
		{
			$value = $params['invalid_url_options'][$option];

			if(is_null($accepted_values))
				$params['url_options'][$option] = ($value === FALSE) ? FALSE : $this->CI->security->xss_clean($value); //FALSE if $option was not in the URL
			else
				$params['url_options'][$option] = (in_array($value, $accepted_values)) ? $value : $accepted_values[0];

			unset($params['invalid_url_options'][$option]);
		}

		//Some magic to determine base_url and uri_segment automatically
		$params['base_url'] = $this->CI->router->class.'/'.$this->CI->router->method.'/'.$this->CI->uri->assoc_to_uri(array_filter($params['url_options'])).'/offset'; //array_filter removes values not provided AKA remove values equal to FALSE
		$params['uri_segment'] = $this->CI->uri->total_segments(); //Last segment


		parent::initialize($params);
	}

	/** CSS to use the classes added to the likns
	th a.enabled_primary, th a.enabled_secondary, th a.disabled{padding-right:12px}
	th a.enabled_primary{background:url(up2.jpg) no-repeat 100% 50% transparent;//flecha arriba roja}
	th a.enabled_primary:hover{background:url(down2.jpg) no-repeat 100% 50% transparent;//flecha abajo roja}
	th a.enabled_secondary{background:url(down2.jpg) no-repeat 100% 50% transparent;//flecha abajo roja}
	th a.enabled_secondary:hover{background:url(up2.jpg) no-repeat 100% 50% transparent;//flecha arriba roja}
	th a.disabled:hover{background:url(up.jpg) no-repeat 100% 50% transparent;//flecha arriba regra}
	*/
	function table_header($option_name/*Name of the URL option that is used to sort results*/, $controller_prefix = NULL)
	{
		if( ! in_array($option_name, array_keys($this->accepted_url_options)) OR ! $this->table_header)
			show_error('Pagination library table header generator is missing one or more required params');

		$url_options = $this->url_options;
		$current_order = (isset($url_options[$option_name])) ? intval($url_options[$option_name]) : $this->accepted_url_options[$option_name][0];
		unset($url_options[$option_name]);

		$links = array();
		foreach($this->table_header as $idx => $header)
		{
			//El orden actual corresponde con el primer caso de la columna actual
			if((2*$idx + 1) == $current_order)
				$links[] = anchor($this->CI->uri->assoc_to_uri(array($controller_prefix.$this->CI->router->class => $this->CI->router->method, $option_name => 2*($idx+1)) + $url_options), $header, 'class="enabled_primary"');

			//El orden actual corresponde con el segundo caso de la columna actual
			elseif((2*$idx + 2) == $current_order)
				$links[] = anchor($this->CI->uri->assoc_to_uri(array($controller_prefix.$this->CI->router->class => $this->CI->router->method, $option_name => (2*$idx)+1) + $url_options), $header, 'class="enabled_secondary"');

			//El orden actual no corresponde con la columna actual
			else
				$links[] = anchor($this->CI->uri->assoc_to_uri(array($controller_prefix.$this->CI->router->class => $this->CI->router->method, $option_name => (2*$idx)+1) + $url_options), $header, 'class="disabled"');
		}
		return $links;
	}
}

/* End of file MY_Pagination.php */
/* Location: ./libraries/MY_Pagination.php */