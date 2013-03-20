<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** Library to manage assets. Read application/config/assets.php for more info */

class CI_Assets {

	private $CI;
	private $hosting = ASSETS;
	private $config;
	private $assets = array();
	private $css = array();
	private $js = array();

	public function __construct($assets = array())
	{
		$this->CI =& get_instance();

		if(isset($assets[0]) AND ! is_array(isset($assets[0])))
		{
			log_message('debug', 'Assets Library initialized (parameters given)');
			$this->load_config_file();

			 //Add the given assets.
			$this->add($assets);
		}
		elseif(count($assets))
		{
			log_message('debug', 'Assets Library initialized (no parameters given)');
			$this->config = $assets; //No need to load config. CI already did it for us
		}
		else
		{
			log_message('debug', 'Assets Library initialized (empty parameters given)');
			$this->load_config_file();
		}
	}

	private function load_config_file()
	{
		$this->CI->config->load('assets', TRUE);
		$this->config = $this->CI->config->item('assets');
	}

	public function add($asset)
	{
		if(empty($asset))
			return $this; //Return the object to allow method chaining

		//Convert to array to allow loading multiple assets at a time
		$assets = (is_array($asset)) ? $asset : array($asset);

		foreach($assets as $asset)
		{
			if(isset($this->config[$asset]) AND ! in_array($asset, $this->assets)) //The asset exist and has not been added yet
			{
				$this->assets[] = $asset; //Add asset to the list of loaded assets
				$asset = $this->config[$asset]; //Get asset information from config

				if(isset($asset['css']) AND ! empty($asset['css'])) //The asset has CSS
					$this->add_css($asset['css']);

				if(isset($asset['cdn']) AND ! empty($asset['cdn'])) //The asset has CDN JS
					$this->js[] = $asset;
				elseif(isset($asset['js']) AND ! empty($asset['js'])) //The asset has JS
					$this->add_js($asset['js']);
			}
			else
				log_message('debug', sprintf('Assets %s was not found in config/assets.php', $asset));
		}

		//Return the object to allow method chaining
		return $this;
	}

	public function add_css($file)
	{
		if(empty($file))
			return $this; //Return the object to allow method chaining

		//Convert to array to allow loading multiple files at a time
		$files = (is_array($file)) ? $file : array($file);
		foreach($files as $file)
			if( ! in_array($file, $this->css))
				$this->css[] = $file;

		//Return the object to allow method chaining
		return $this;
	}

	public function add_js($file)
	{
		if(empty($file))
			return $this; //Return the object to allow method chaining

		//Convert to array to allow loading multiple files at a time
		$files = (is_array($file)) ? $file : array($file);
		foreach($files as $file)
			if( ! in_array($file, $this->js))
				$this->js[] = $file;

		//Return the object to allow method chaining
		return $this;
	}

	//Generates JavaScript
	public function build_js()
	{
		$output = '';
		foreach($this->js as $file)
		{
			if(is_array($file) AND ! empty($file['cdn'])) //is a CDN
			{
				$cdn = (is_array($file['cdn'])) ? $file['cdn'] : array($file['cdn']);
				foreach($cdn as $cdn_file)
					$output .= '<script type="text/javascript" src="'.$cdn_file.'"></script>';

				if(isset($file['fallback']) AND ! empty($file['fallback']) AND isset($file['js']) AND ! empty($file['js']))
				{
					$output .= '<script type="text/javascript">if('.$file['fallback'].'){';
					$js = (is_array($file['js'])) ? $file['js'] : array($file['js']);
					foreach($js as $file)
						$output .= 'document.write(unescape("%3Cscript src=\''.$this->build_url('js', $file).'\' type=\'text/javascript\'%3E%3C/script%3E"));';
					$output .= '}</script>';
				}
				$output .= "\n";
			}
			else
				$output .= '<script type="text/javascript" src="'.$this->build_url('js', $file).'"></script>'."\n";
		}

		return $output;
	}

	//Generates CSS
	public function build_css()
	{
		$output = '';
		foreach($this->css as $file)
		{
			$output .= '<link type="text/css" rel="stylesheet" href="'.$this->build_url('css', $file).'" />'."\n";
		}

		return $output;
	}

	//If the URL is local add the prefix and extension
	private function build_url($extension, $url)
	{
		if('http' == substr($url, 0, 4) OR '//' == substr($url, 0, 2))
			return $url;

		$postfix = (".$extension" == substr($url, -1 - strlen($extension))) ? NULL : ".$extension";

		return $this->hosting.$extension.'/'.$url.$postfix;
	}
}

/* End of file Assets.php */
/* Location: ./system/libraries/Assets.php */
