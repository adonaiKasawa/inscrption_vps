<?php 
/**
 * 
 */
require "form/val.php";
class Form 
{	
	private $_currentItem = null;
	private $_postData = array();
	private $_val = array();
	private $_error = array();

	function __construct()
	{
		$this->_val = new Val();
	}
	public function post($field)
	{
		$this->_postData[$field] = $_POST[$field];
		$this->_currentItem = $field;
		// echo "..........". $this->_currentItem.'......';
		return $this;
	}
	public function fetchPost($fielname = false)
	{
		if ($fielname)
		{

			if ( isset($this->_postData[$fielname]) ) 

			 return $this->_postData[$fielname];

			else
				return false;
			
		
		}
		else
		{
			return $this->_postData;
		}
	}

	public function val($typeOfValidator, $arg = null)
	{
		# code...
		if ($arg  == null) {
			# code...
			$error = $this->_val->{$typeOfValidator}($this->_postData[$this->_currentItem]);
		}else{
			$error = $this->_val->{$typeOfValidator}($this->_postData[$this->_currentItem], $arg);
		}
		
		if ($error) {
			# code...
			
			$this->_error[$this->_currentItem] = $error;
			
		}
		return $this;

	}

	public function submit()
	{
		# code...
		if (empty($this->_error)) {
			# code...
			return true;
		}else{
			$str = '';
			foreach ($this->_error as $key => $value) {
				# code...
				$str .= $key . ' => ' . $value ."<br>" ;
			}
			// $e = implode(',', $this->_error);
			throw new Exception($str);
			
		}
	}



}




