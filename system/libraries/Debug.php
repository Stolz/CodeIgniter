<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Library for debuging Datamapper ORM for Codeigniter using FireBug and FirePHP

 * http://datamapper.wanwizard.eu/pages/toc.html
 * http://getfirebug.com/
 * http://www.firephp.org/
 */

class Debug {

	private $_ci;

    public function __construct()
	{
		$this->_ci = & get_instance();
		if( ! isset($this->_ci->firephp))
			$this->_ci->load->library('debug');
    }

	/** Standar firephp debug*/
	public function d($x, $label = NULL)
	{
		$this->_ci->firephp->log($x, $label);
	}

	/** Debug Datamaper Object(s) */
	public function dm($object, $label = NULL, $collapse = FALSE)
	{
		$is_iterated = isset($object->_dm_dataset_iterator);
		$count = ($is_iterated) ? $object->_dm_dataset_iterator->count() : count($object->all);
		$class = get_class($object);
		if( ! empty($label))
			$label = "$label ";

		if($count > 1) //Lets do a group result
		{
			$this->_ci->firephp->group("{$label}$class ($count results)", array('Collapsed' => $collapse));
			if($is_iterated)
			{
				while($object->_dm_dataset_iterator->valid())
				{
					$this->_ci->firephp->log($this->purge($object->_dm_dataset_iterator->current()));
					$object->_dm_dataset_iterator->next();
				}
			}
			else
			{
				foreach($object->all as $o)
					$this->_ci->firephp->log($this->purge($o));
			}
			$this->_ci->firephp->groupEnd();
		}
		else //Single result
		{
			if($is_iterated)
				$this->_ci->firephp->log($object->_dm_dataset_iterator->results, "$class $label");
			else
				$this->_ci->firephp->log($this->purge($object), "$class $label");
		}
	}

	//Show query results used to retieve Datamaper Object(s)
	public function q($object, $limit = 10)
	{
		$query = $this->_ci->db->query($object->get_sql($limit));

		$table = array();
		$table[] = array_keys($query->row_array());
		foreach($query->result_array() as $row)
			$table[] = $row;
		$this->_ci->firephp->table("debug (limit=$limit)", $table);
	}


	/** Purge Datammaper metada data, leaving only the data */
	private function purge($o)
	{
		$x = new stdClass();

		//Data
		foreach($o->fields as $f)
			$x->{$f} =$o->{$f};

		//has_one Relationships
		foreach(array_keys($o->has_one) as $rel)
		{
			if(isset($o->{$rel}))
				$x->{$rel} = $this->purge($o->{$rel});
			if(isset($o->{$rel.'_count'}))
				$x->{$rel.'_count'} = $o->{$rel.'_count'};

		}

		//has_many Relationships
		foreach(array_keys($o->has_many) as $rel)
		{
			if(isset($o->{$rel}))
			{
				if(count($o->{$rel}->all) == 1)
					$x->{$rel} = $this->purge($o->{$rel});
				else foreach($o->{$rel}->all as $key => $rel2)
					$x->{$rel}[] = $this->purge($rel2);
			}
			if(isset($o->{$rel.'_count'}))
				$x->{$rel.'_count'} = $o->{$rel.'_count'};
		}
		return $x;
	}
}