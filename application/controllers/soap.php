<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/** Example of SOAP client using the native PHP SOAP extension */

class Soap extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->config->set_item('tidy_enabled', FALSE);
		$this->config->set_item('compress_output', FALSE);
	}

	private function _pre($x)
	{
		echo '<pre>';
		print_r($x);
		echo '</pre>';
	}

	function client()
	{
		$wsdl = 'http://www.webservicex.net/globalweather.asmx?WSDL';
		
		try {
			$client = new SoapClient($wsdl, array('trace' => TRUE/*Required for >__getLast*() functions */, 'exceptions' => TRUE));

			echo '<h3>List of SOAP functions</h3>';
			$this->_pre($client->__getFunctions());

			echo '<h3>List of SOAP types</h3>';
			$this->_pre($client->__getTypes());

			
			echo '<h3>SOAP request PHP object</h3>';
			$this->_pre($client->GetWeather(array('CountryName' => 'Spain', 'CityName' => 'Valencia')));

			echo '<h3>Last SOAP request</h3>';
			$this->_pre($client->__getLastRequestHeaders());
			$this->_pre($client->__getLastRequest());

			echo '<h3>Last SOAP response</h3>';
			$this->_pre($client->__getLastResponseHeaders());
			$this->_pre($xml = $client->__getLastResponse());
// 			$this->_pre(simplexml_load_string($xml));

			
		}
		catch (Exception $e){
			echo '<div style="color:red;border:1px solid red">';
			echo nl2br($e->getMessage());
			echo '</div>';
		}
	}

}

/* End of file soap.php */
/* Location: ./application/controllers/soap.php */



